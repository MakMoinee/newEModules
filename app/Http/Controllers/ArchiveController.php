<?php

namespace App\Http\Controllers;

use App\Models\AcademicStrands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArchiveController extends Controller
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
            // dd($request);
            $uType = $user[0]['userType'];
            $uid = $user[0]['userID'];
            $queryResult = DB::table('user_pic_profiles')->where(['userID' => $uid])->get();
            $pic = "";
            if (count($queryResult) > 0) {
                $profiles = json_decode($queryResult, true);
                $pic = $profiles[0]['filePath'];
            }

            if (strtolower($request->query('category')) == "subjects") {
                $queryResult = DB::table('vwallstrands')->where([['status', '=', 2]])->get();
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
                return view('new.adminarchive', [
                    'pic' => $pic,
                    'modules' => $modules,
                    'pageRes' => count($pageRes) == 0 ? [] : $pageRes[$startIndex - 1],
                    'availableStrands' => $strandsAvailable,
                    'startIndex' => $startIndex,
                    'pageCount' => round($pageCount),
                    'uType' => $uType
                ]);
            } else if (strtolower($request->query('category')) == "users") {

                $uType = $user[0]['userType'];
                $allUsers = DB::table('e_users')->where(['userType' => 3])->orderByDesc('created_at')->get();

                $userss = json_decode($allUsers, true);
                $startIndex = $request->query('page') == null ? 1 : $request->query('page');
                $pageCount = 0;
                $pageRes = array();
                $eachRes = array();
                $loopCount = 0;

                $searchKey = $request->query('search');
                $searchArr = array();

                $tCount = 0;
                $newUsers = array();

                foreach ($userss as $u) {
                    if ($searchKey) {
                        if (!str_contains(strtolower($u['firstname']), strtolower($searchKey))) {
                            continue;
                        } else {
                            array_push($searchArr, $u);
                        }
                    } else {
                        $tCount++;
                        array_push($newUsers, $u);
                        if ($tCount == 5) {
                            array_push($eachRes, $u);
                            array_push($pageRes, $eachRes);
                            $eachRes = [];
                            $tCount = 0;
                            $pageCount++;
                        } else if ($loopCount + 1 == count($userss)) {
                            if ($tCount < 5) {
                                array_push($eachRes, $u);
                                array_push($pageRes, $eachRes);
                                $pageCount++;
                            }
                        } else {
                            array_push($eachRes, $u);
                        }
                        $loopCount++;
                    }
                }

                if ($searchKey) {

                    foreach ($searchArr as $r2) {
                        $tCount++;
                        array_push($newUsers, $r2);
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

                return view('new.adminarchiveusers', [
                    'eusers' => $newUsers,
                    'pic' => $pic,
                    'uType' => $uType,
                    'pageRes' => count($pageRes) == 0 ? [] : $pageRes[$startIndex - 1],
                    'pic' => $pic,
                    'startIndex' => $startIndex,
                    'pageCount' => round($pageCount)
                ]);
            } else {
                return redirect('/');
            }
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
            if ($user[0]['userType'] == 3 || $user[0]['userType'] == 2) {
                return redirect('/');
            }

            if ($request->btnUpdateRestore) {
                $affectedRows = DB::table('academic_tracks')
                    ->where(['trackID' => $request->trackID])
                    ->update(['status' => 1]);
                if ($affectedRows > 0) {
                    session()->put('successRestoreSubject', true);
                } else {
                    session()->put('errorRestoreSubject', true);
                }
            }
            return redirect('/archive');
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
            if ($user[0]['userType'] == 3 || $user[0]['userType'] == 2) {
                return redirect('/');
            }


            if ($request->btnRestoreUserAsUser) {
                $affectedRow = DB::table('e_users')->where(['userID' => $id])->update([
                    'userType' => 2,
                ]);
                if ($affectedRow > 0) {
                    session()->put('successRestoreUser', true);
                } else {
                    session()->put('errorRestoreUser', true);
                }
                return redirect('/archive?category=users');
            } else if ($request->btnRestoreUserAsAdmin) {
                $affectedRow = DB::table('e_users')->where(['userID' => $id])->update([
                    'userType' => 1,
                ]);
                if ($affectedRow > 0) {
                    session()->put('successRestoreUser', true);
                } else {
                    session()->put('errorRestoreUser', true);
                }
                return redirect('/archive?category=users');
            }
            return redirect('/');
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
    public function destroy($id)
    {
        //
    }
}
