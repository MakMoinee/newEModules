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
            if ($user[0]['userType'] == 2) {
                return redirect('/');
            }
            $uType = $user[0]['userType'];
            $uid = $user[0]['userID'];
            $queryResult = DB::table('user_pic_profiles')->where(['userID' => $uid])->get();
            $pic = "";
            if (count($queryResult) > 0) {
                $profiles = json_decode($queryResult, true);
                $pic = $profiles[0]['filePath'];
            }

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
            if ($user[0]['userType'] == 2) {
                return redirect('/');
            }

            if ($request->btnUpdateRestore) {
                $affectedRows = DB::table('academic_tracks')
                    ->where(['trackID' => $request->trackID])
                    ->update(['status' => 1]);
                if ($affectedRows > 0) {
                    session()->put('successRestoreSubject', true);
                }else{
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
        //
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
