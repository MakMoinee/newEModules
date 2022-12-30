<?php

namespace App\Http\Controllers;

use App\Models\AcademicStrands;
use App\Models\AcademicTrack;
use App\Models\EUsers;
use App\Models\ModuleHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminStrandController extends Controller
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
            if ($user[0]['userType'] == 3 || $user[0]['userType'] == 2) {
                return redirect('/');
            }
            $nem = $user[0]['username'];
            $nUsers = EUsers::all();
            $total = count($nUsers);
            $newUsers = DB::table('vwtotalnewusers')->first();
            $totalNewUsers = $newUsers->TotalNewUsers;
            $uType = $user[0]['userType'];
            $queryResult = DB::table('vwallstrands')->where([['status', '<>', 2]])->get();
            $result = json_decode($queryResult, true);
            $modules = [];
            $startIndex = $request->query('page') == null ? 1 : $request->query('page');
            $pageCount = 0;
            $pageRes = array();
            $eachRes = array();
            $loopCount = 0;

            $searchKey = $request->query('search');
            $searchArr = array();

            $tCount = 0;
            foreach ($result as $r) {
                if ($searchKey) {
                    if (!str_contains(strtolower($r['SubjectName']), $searchKey)) {
                        continue;
                    } else {
                        array_push($searchArr, $r);
                    }
                } else {
                    $tCount++;
                    array_push($modules, $r);
                    if ($tCount == 5) {
                        array_push($eachRes, $r);
                        array_push($pageRes, $eachRes);
                        $eachRes = [];
                        $tCount = 0;
                        $pageCount++;
                    } else if ($loopCount + 1 == count($result)) {
                        if ($tCount < 5) {
                            array_push($eachRes, $r);
                            array_push($pageRes, $eachRes);
                            $pageCount++;
                        }
                    } else {
                        array_push($eachRes, $r);
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

            $strandsAvailable = AcademicStrands::all();
            $uid = $user[0]['userID'];
            $queryResult = DB::table('user_pic_profiles')->where(['userID' => $uid])->get();
            $pic = "";

            if (count($queryResult) > 0) {
                $profiles = json_decode($queryResult, true);
                $pic = $profiles[0]['filePath'];
            }


            // dd([
            //     'nem' => $nem,
            //     'totalNewUsers' => $totalNewUsers,
            //     'totalUsers' => $total,
            //     'modules' => $modules,
            //     'pageRes' => count($pageRes) == 0 ? [] : $pageRes[$startIndex - 1],
            //     'availableStrands' => $strandsAvailable,
            //     'pic' => $pic,
            //     'startIndex' => $startIndex,
            //     'pageCount' => $pageCount
            // ]);
            return view(
                'new.adminmodules',
                [
                    'nem' => $nem,
                    'totalNewUsers' => $totalNewUsers,
                    'totalUsers' => $total,
                    'modules' => $modules,
                    'pageRes' => count($pageRes) == 0 ? [] : $pageRes[$startIndex - 1],
                    'availableStrands' => $strandsAvailable,
                    'pic' => $pic,
                    'startIndex' => $startIndex,
                    'pageCount' => round($pageCount),
                    'uType'=>$uType
                ]
            );
        } else {
            return redirect("/");
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

            if ($user[0]['userType'] == 2) {
                return redirect('/');
            }

            if (isset($request->btnAdd)) {
                //check if existing sequence
                $queryResult = DB::table('vwallstrands')->where(
                    [
                        'strandID' => $request->strand,
                        'category' => $request->category,
                        'SubjectName' => $request->description
                    ]
                )->get();
                $count = count($queryResult);
                if ($count > 0) {
                    session()->put('errorExistingSequence', true);
                } else {
                    $newTrack = new AcademicTrack();
                    $newTrack->description = $request->description;
                    $newTrack->strandID = $request->strand;
                    $newTrack->sequence = $request->sequence;
                    $newTrack->category = $request->category;
                    $newTrack->hours = $request->hours;
                    $newTrack->prerequisite = $request->prerequisite;
                    $affectedRows = $newTrack->save();
                    if ($affectedRows > 0) {
                        session()->put('successAddingModule', true);
                    } else {
                        session()->put('errorAddingModule', true);
                    }
                }
            } else if (isset($request->btnUpdate)) {
                $affectedRows = DB::table('academic_tracks')
                    ->where(['trackID' => $request->trackID])
                    ->update([
                        'description' => $request->description,
                        'hours' => $request->hours,
                        'prerequisite' => $request->prerequisite
                    ]);

                if ($affectedRows > 0) {
                    session()->put('successUpdatingModule', true);
                } else {
                    session()->put('errorUpdatingModule', true);
                }
            }


            return redirect('/adminstrands');
        }
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put('users', $user);

             if ($user[0]['userType'] == 2) {
                return redirect('/');
            }
            return redirect('/adminstrands');
        }
        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put('users', $user);

            if ($user[0]['userType'] == 2) {
                return redirect('/');
            }
            return redirect('/adminstrands');
        }
        return redirect('/');
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

            if ($user[0]['userType'] == 2) {
                return redirect('/');
            }
            return redirect('/adminstrands');
        }
        return redirect('/');
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

            if ($user[0]['userType'] == 2) {
                return redirect('/');
            }

            if ($request->btnArchive) {
                $affectedRows = DB::table('academic_tracks')
                    ->where(['trackID' => $id])
                    ->update(['status' => 2]);

                if ($affectedRows > 0) {
                    session()->put('successDeletingModule', true);
                } else {
                    session()->put('errorDeletingModule', true);
                }
                return redirect('/adminstrands');
            } else {
                $affectedRows = DB::table('academic_tracks')
                    ->where(['trackID' => $id])
                    ->delete();

                if ($affectedRows > 0) {
                    $affectedRows2 = DB::table('modules')
                        ->where(['trackID' => $id])
                        ->delete();
                    session()->put('successDeletingArchivedModule', true);
                } else {
                    session()->put('errorDeletinArchivedgModule', true);
                }
                return redirect('/archive');
            }
        }
        return redirect('/');
    }
}
