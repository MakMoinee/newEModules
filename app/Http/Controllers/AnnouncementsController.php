<?php

namespace App\Http\Controllers;

use App\Events\PostAnnouncement;
use App\Models\AcademicStrands;
use App\Models\Announcements;
use App\Models\Notif;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnnouncementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put('users', $user);
            if ($user[0]['userType'] != 1) {
                return redirect('/');
            }
            $nem = $user[0]['username'];
            $strandsAvailable = AcademicStrands::all();
            $announce = Announcements::all();
            $announce = count($announce) == 0 ? [] : $announce;
            $newAnnounce = [];
            $startIndex = $request->query('page') == null ? 1 : $request->query('page');
            $pageCount = 0;
            $pageRes = array();
            $eachRes = array();
            $loopCount = 0;

            $searchKey = $request->query('search');
            $searchArr = array();

            $tCount = 0;

            foreach ($announce as $a) {
                if ($searchKey) {
                    if ($a['description'] != $searchKey) {
                        continue;
                    } else {
                        array_push($searchArr, $a);
                    }
                } else {
                    $tCount++;
                    array_push($newAnnounce, $a);
                    if ($tCount == 5) {
                        array_push($eachRes, $a);
                        array_push($pageRes, $eachRes);
                        $eachRes = [];
                        $tCount = 0;
                        $pageCount++;
                    } else if ($loopCount + 1 == count($announce)) {
                        if ($tCount < 5) {
                            array_push($eachRes, $a);
                            array_push($pageRes, $eachRes);
                            $pageCount++;
                        }
                    } else {
                        array_push($eachRes, $a);
                    }
                    $loopCount++;
                }
            }

            if ($searchKey) {

                foreach ($searchArr as $r2) {
                    $tCount++;
                    array_push($newAnnounce, $r2);
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
            return view(
                'new.adminannounce',
                [
                    'nem' => $nem,
                    'availableStrands' => $strandsAvailable,
                    'announce' => $announce,
                    'pageRes' => count($pageRes) == 0 ? [] : $pageRes[$startIndex - 1],
                    'pic' => $pic,
                    'startIndex' => $startIndex,
                    'pageCount' => round($pageCount)
                ]
            );
        } else {
            return redirect('/');
        }
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

            $nem = $user[0]['username'];
            $strandsAvailable = AcademicStrands::all();

            if ($request->btnAdd) {
                $file = $request->file('file');
                $mimetype = $file->getMimeType();
                // dd($file);
                if ($mimetype == "image/png" || $mimetype == "image/jpg" || $mimetype == "image/jpeg") {
                    $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/storage/announcements';
                    // dd($request);
                    try {
                        $fileName = $request->description . "" . strtotime(now()) . "." . $file->getClientOriginalExtension();
                        $isFile = $file->move($destinationPath,  $fileName);
                        $announce = new Announcements();
                        $announce->description = $request->description;
                        $announce->subtext = $request->subtext;
                        $announce->description = $request->description;
                        $announce->activated = 0;
                        $announce->card = $fileName;
                        $isSave = $announce->save();
                        if ($isSave) {
                            session()->put('successAddingAnnounce', true);
                        } else {
                            session()->put('errorAddingAnnounce', true);
                        }
                    } catch (Exception $e) {
                        session()->put('errorAddingAnnounce', true);
                    }
                } else {
                    session()->put('errorAddingAnnounce', true);
                }
            }

            return redirect('/announcements');
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
    public function show($id)
    {
        //
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
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put('users', $user);
            if ($user[0]['userType'] != 1) {
                return redirect('/');
            }

            if ($request->btnActivate) {
                $affectedRows = DB::table('announcements')
                    ->where(['announceID' => $id])
                    ->update([
                        'activated' => 1
                    ]);
                if ($affectedRows > 0) {
                    session()->put('successUpdateAnnounce', true);
                    // $announce = DB::table('announcements')->where(['announceID' => $id])->get();

                    $announce = Announcements::where(['announceID' => $id])->get();
                    // dd($announce[0]);
                    // PostAnnouncement::dispatch($announce[0]);
                    $notif = new Notif();
                    $notif->description = $announce[0]->description;
                    $notif->save();

                    event(new PostAnnouncement($announce[0]));
                } else {
                    session()->put('errorUpdateAnnounce', true);
                }

                return redirect('/announcements');
            }
            if ($request->btnDeactivate) {
                $affectedRows = DB::table('announcements')
                    ->where(['announceID' => $id])
                    ->update([
                        'activated' => 0
                    ]);
                if ($affectedRows > 0) {
                    session()->put('successUpdateAnnounce', true);
                } else {
                    session()->put('errorUpdateAnnounce', true);
                }
                return redirect('/announcements');
            }
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
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put('users', $user);
            if ($user[0]['userType'] != 1) {
                return redirect('/');
            }

            if ($request->btnDelete) {
                $affectedRows = DB::table('announcements')
                    ->where(['announceID' => $id])
                    ->delete();
                if ($affectedRows > 0) {
                    session()->put('successDeleteAnnounce', true);
                } else {
                    session()->put('errorDeleteAnnounce', true);
                }
                return redirect('/announcements');
            }
        } else {
            return redirect('/');
        }
    }
}
