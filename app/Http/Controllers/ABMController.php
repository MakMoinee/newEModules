<?php

namespace App\Http\Controllers;

use App\Models\ModuleHelper;
use App\Models\Modules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Collection\Set;

class ABMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if (session()->exists("users") && $request['category']) {
            $user = session()->pull("users");
            session()->put('users', $user);

            if ($user[0]['userType'] != 2) {
                return redirect('/');
            }

            $data = DB::table('academic_strands')->where(['description' => $user[0]['track']])->get();
            $strandID  = $data[0]->strandID;


            $queryResult = DB::table('academic_tracks')
                ->where(['strandID' => $strandID, 'category' => $request['category']])
                ->orderBy('sequence')
                ->get();

            $trackRes = json_decode($queryResult, true);
            $availableEMod = array();
            $moduleHelper = array();
            $startIndex = $request->query('page') == null ? 1 : $request->query('page');
            $pageCount = 0;
            $pageRes = array();
            $eachRes = array();
            $loopCount = 0;

            $searchKey = $request->query('search');
            $searchArr = array();
            $newTracks = array();

            $tCount = 0;

            foreach ($trackRes as $tr) {
                $queryResult2 = DB::table('modules')
                    ->where(['trackID' => $tr['trackID']])
                    ->orderBy('sequence')
                    ->get();
                $tmpMod = new ModuleHelper();
                $tmpMod->trackID = $tr['trackID'];
                if (count($queryResult2) == 0) {
                    $tmpMod->isAvailable = false;
                } else {
                    $tmpMod->isAvailable = true;
                    $tmpEmod = json_decode($queryResult2, true);
                    foreach ($tmpEmod as $emod) {
                        array_push($availableEMod, $emod);
                    }
                }
                array_push($moduleHelper, $tmpMod);
            }

            foreach ($trackRes as $tr) {
                if ($searchKey) {
                    if (!str_contains(strtolower($tr['description']), $searchKey)) {
                        continue;
                    } else {
                        array_push($searchArr, $tr);
                    }
                } else {
                    $tCount++;
                    array_push($newTracks, $tr);
                    if ($tCount == 5) {
                        array_push($eachRes, $tr);
                        array_push($pageRes, $eachRes);
                        $eachRes = [];
                        $tCount = 0;
                        $pageCount++;
                    } else if ($loopCount + 1 == count($trackRes)) {
                        if ($tCount < 5) {
                            array_push($eachRes, $tr);
                            array_push($pageRes, $eachRes);
                            $pageCount++;
                        }
                    } else {
                        array_push($eachRes, $tr);
                    }
                    $loopCount++;
                }
            }

            if ($searchKey) {

                foreach ($searchArr as $r2) {
                    $tCount++;
                    array_push($newTracks, $r2);
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
            //     'track' => $user[0]['track'],
            //     'user' => $user[0]['username'],
            //     'trackRes' => $newTracks,
            //     'pageRes' => count($pageRes) == 0 ? [] : $pageRes[$startIndex - 1],
            //     'category' => $request['category'],
            //     'moduleHelper' => $moduleHelper,
            //     'emodules' => $availableEMod,
            //     'baseURL' => $_SERVER['DOCUMENT_ROOT'] . '/storage/emodules/',
            //     'pic' => $pic,
            //     'startIndex' => $startIndex,
            //     'pageCount' => round($pageCount)
            // ]);





            return view('new.strand2', [
                'track' => $user[0]['track'],
                'user' => $user[0]['username'],
                'trackRes' => $newTracks,
                'pageRes' => count($pageRes) == 0 ? [] : $pageRes[$startIndex - 1],
                'category' => $request['category'],
                'moduleHelper' => $moduleHelper,
                'emodules' => $availableEMod,
                'baseURL' => $_SERVER['DOCUMENT_ROOT'] . '/storage/emodules/',
                'pic' => $pic,
                'startIndex' => $startIndex,
                'pageCount' => round($pageCount)
            ]);
        } else {
            if ($request['category'] && $request['strand']) {
                $data = DB::table('academic_strands')->where(['description' => $request['strand']])->get();
                $strandID  = $data[0]->strandID;
                $queryResult = DB::table('academic_tracks')
                    ->where(['strandID' => $strandID, 'category' => $request['category']])
                    ->get();

                $trackRes = json_decode($queryResult, true);
                return view('strandcat', [
                    'track' => $request['strand'],
                    'category' => $request['category'],
                    'trackRes' => $trackRes
                ]);
            }
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
        //
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
