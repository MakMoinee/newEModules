<?php

namespace App\Http\Controllers;

use App\Models\AcademicStrands;
use App\Models\EUsers;
use App\Models\Modules;
use Exception;
use Illuminate\Http\Exceptions\PostTooLargeException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class ModulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put('users', $user);

            if ($user[0]['userType'] != 1) {
                return redirect('/');
            }
            $file = $request->file('files');
            $fileName = "";
            if ($file) {
                $mimetype = $file->getMimeType();

                if ($mimetype == "application/pdf" || $mimetype == "application/docs" || $mimetype == "applications/xlsx" || $mimetype == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" || $mimetype == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" || $mimetype == "application/vnd.openxmlformats-officedocument.presentationml.presentation") {
                    $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/storage/emodules';
                    try {
                        $fileName = $request->description . "" . date('ymd', strtotime(now())) . "." . $file->getClientOriginalExtension();
                        $isFile = $file->move($destinationPath,  $fileName);
                    } catch (Exception $e) {
                    }
                } else {
                    session()->put('errorMimeTypeNotValid', true);
                    $id = $request->tid;
                    $title = $request->title;
                    return redirect(route('modules.show', ['module' => $id, 'title' => $title]));
                }
            }

            try {
                $newEmodule = new Modules();
                $newEmodule->trackID = $request->tid;
                $newEmodule->description = $request->description;
                $newEmodule->sequence = $request->sequence;
                $newEmodule->filePath = $fileName;
                $isSave = $newEmodule->save();
                if ($isSave) {
                    session()->put('successAddEModule', true);
                } else {
                    session()->put('errorAddEModule', true);
                }
            } catch (Exception $e) {
            }
            $id = $request->tid;
            return redirect(route('modules.show', ['module' => $id]));
        } else {
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put('users', $user);

            if ($user[0]['userType'] != 1) {
                return redirect('/');
            }
            $title = $request->title;
            $nem = $user[0]['username'];
            $strandsAvailable = AcademicStrands::all();

            $tracks = DB::table('academic_tracks')
                ->where(['trackID' => $id])
                ->get();

            $queryResult = DB::table('modules')
                ->where(['trackID' => $id])
                ->get();
            $emodules = json_decode($queryResult, true);
            $modules = [];
            $startIndex = $request->query('page') == null ? 1 : $request->query('page');
            $pageCount = 0;
            $pageRes = array();
            $eachRes = array();
            $loopCount = 0;

            $searchKey = $request->query('search');
            $searchArr = array();

            $tCount = 0;

            foreach ($emodules as $e) {
                if ($searchKey) {
                    if ($e['description'] != $searchKey) {
                        continue;
                    } else {
                        array_push($searchArr, $e);
                    }
                } else {
                    $tCount++;
                    array_push($modules, $e);
                    if ($tCount == 5) {
                        array_push($eachRes, $e);
                        array_push($pageRes, $eachRes);
                        $eachRes = [];
                        $tCount = 0;
                        $pageCount++;
                    } else if ($loopCount + 1 == count($emodules)) {
                        if ($tCount < 5) {
                            array_push($eachRes, $e);
                            array_push($pageRes, $eachRes);
                            $pageCount++;
                        }
                    } else {
                        array_push($eachRes, $e);
                    }
                    $loopCount++;
                }
            }

            if ($searchKey) {

                foreach ($searchArr as $r2) {
                    $tCount++;
                    array_push($modules, $r2);
                    if ($tCount == 5) {
                        array_push($eachRes, $r2);
                        array_push($pageRes, $eachRes);
                        $eachRes = [];
                        $tCount = 0;
                        $pageCount++;
                    } else if ($loopCount + 1 == count($searchArr)) {
                        if ($tCount < 5) {
                            array_push($eachRes, $r2);
                            array_push($pageRes, $eachRes);
                            $pageCount++;
                        }
                    } else {
                        array_push($eachRes, $r2);
                    }
                    $loopCount++;
                }
            }

            $uid = $user[0]['userID'];
            $queryResult = DB::table('user_pic_profiles')->where(['userID' => $uid])->get();
            $pic = "";

            if (count($queryResult) > 0) {
                $profiles = json_decode($queryResult, true);
                $pic = $profiles[0]['filePath'];
            }

            // dd([
            //     'nem' => $nem,
            //     'availableStrands' => $strandsAvailable,
            //     'emodules' => $modules,
            //     'pageRes' => count($pageRes) == 0 ? [] : $pageRes[$startIndex - 1],
            //     'tracks' => $tracks,
            //     'title' => $title,
            //     'id' => $id,
            //     'pic' => $pic,
            //     'startIndex' => $startIndex,
            //     'pageCount' => round($pageCount)
            // ]);
            return view('new.adminemodules', [
                'nem' => $nem,
                'availableStrands' => $strandsAvailable,
                'emodules' => $emodules,
                'pageRes' => count($pageRes) == 0 ? [] : $pageRes[$startIndex - 1],
                'tracks' => $tracks,
                'title' => $title,
                'id' => $id,
                'pic' => $pic,
                'startIndex' => $startIndex,
                'pageCount' => round($pageCount)
            ]);
        } else {
            return redirect('/');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put('users', $user);

            if ($user[0]['userType'] != 1) {
                return redirect('/');
            }
            $file = $request->file('files');
            if ($file) {
                $mimetype = $file->getMimeType();

                if ($mimetype == "application/pdf") {
                    $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/storage/emodules';
                    try {
                        $fileName = $request->description . "" . date('ymd', strtotime(now())) . "." . $file->getClientOriginalExtension();
                        $isFile = $file->move($destinationPath,  $fileName);
                        $affectedRows = DB::table('modules')
                            ->where([
                                'moduleID' => $request->btnUpdate,
                            ])
                            ->update([
                                'sequence' => $request->sequence,
                                'description' => $request->description,
                                'filePath' => $fileName
                            ]);
                        if ($affectedRows > 0) {
                            session()->put('successUpdateEModule', true);
                        } else {
                            session()->put('errorUpdateEModule', true);
                        }
                    } catch (Exception $e) {
                    }
                } else {
                    session()->put('errorAddEModule', true);
                }
            } else {
                $affectedRows = DB::table('modules')
                    ->where([
                        'moduleID' => $request->btnUpdate,
                    ])
                    ->update([
                        'sequence' => $request->sequence,
                        'description' => $request->description,
                    ]);
                if ($affectedRows > 0) {
                    session()->put('successUpdateEModule', true);
                } else {
                    session()->put('errorUpdateEModule', true);
                }
            }
            return redirect(route('modules.show', ['module' => $request->tid]));
        } else {
            return redirect('/');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        // dd(['id' => $id, 'req' => $request]);
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put('users', $user);

            if ($user[0]['userType'] != 1) {
                return redirect('/');
            }

            $affectedRows = DB::table('modules')
                ->where(['moduleID' => $id])
                ->delete();
            if ($affectedRows > 0) {
                session()->put('successDeleteModule', true);
            } else {
                session()->put('errorDeleteModule', true);
            }
            return redirect(route('modules.show', ['module' => $request->btnDelete]));
        } else {
            return redirect('/');
        }
    }
}
