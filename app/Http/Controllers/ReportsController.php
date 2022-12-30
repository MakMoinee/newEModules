<?php

namespace App\Http\Controllers;

use App\Models\EUsers;
use App\Models\Modules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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

            $nUsers = EUsers::all();
            $total = count($nUsers);
            $newUsers = DB::table('vwtotalnewusers')->first();
            if ($uType == 0) {
                $queryResultsss = DB::table('vwnewsuperadminusers')->get();
            } else {
                $queryResultsss = DB::table('vwnewusers')->get();
            }

            $listUsers = json_decode($queryResultsss, true);
            $totalNewUsers = $newUsers->TotalNewUsers;
            $monthArr = array();

            foreach ($nUsers as $u) {
                if ($u['userType'] == 0) {
                    continue;
                }
                if ($uType == 1) {
                    if ($u['userType'] != 2) {
                        continue;
                    }
                }
                $year = date('Y', strtotime($u['created_at']));
                $currentYear = date('Y', strtotime(now()));
                if ($year != $currentYear) {
                    continue;
                }
                $month = date('m', strtotime($u['created_at']));
                if (array_key_exists($month, $monthArr)) {
                    $monthArr[(int)$month] += 1;
                } else {
                    $monthArr[(int)$month] = 1;
                }
            }

            $allMods = Modules::all();
            $query = DB::table('vwtotalnewmodules')->first();
            $nModules = $query->TotalCount;
            $nMonth = array();
            foreach ($allMods as $n) {
                $year = date('Y', strtotime($n['created_at']));
                $currentYear = date('Y', strtotime(now()));
                if ($year != $currentYear) {
                    continue;
                }

                $month = date('m', strtotime($n['created_at']));
                if (array_key_exists($month, $nMonth)) {
                    $nMonth[(int)$month] += 1;
                } else {
                    $nMonth[(int)$month] = 1;
                }
            }

            for ($ii = 0; $ii < 12; $ii++) {
                if (array_key_exists($ii + 1, $nMonth)) {
                    continue;
                } else {
                    $nMonth[$ii + 1] = 0;
                }
            }



            $query = DB::table('vwlistmodules')->get();
            $listModules = json_decode($query, true);

            // dd([
            //     'pic' => $pic,
            //     'totalNewUsers' => $totalNewUsers,
            //     'percentage' => $totalNewUsers == 0 ? 0 : $totalNewUsers / $total * 100,
            //     'totalModules' => $nModules,
            //     'modulePercentage' => $nModules == 0 ? 0 : $nModules / count($allMods) * 100,
            //     'totalUsers' => $total,
            //     'monthArr' => count($monthArr) == 0 ? [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0] : $monthArr,
            //     'modulesArr' => count($nMonth) == 0 ? [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0] : $nMonth,
            //     'listUsers' => $listUsers,
            //     'listModules' => count($listModules) == 0 ? [] : $listModules
            // ]);

            return view('new.adminreport', [
                'pic' => $pic,
                'totalNewUsers' => $totalNewUsers,
                'percentage' => $totalNewUsers == 0 ? 0 : $totalNewUsers / $total * 100,
                'totalModules' => $nModules,
                'modulePercentage' => $nModules == 0 ? 0 : $nModules / count($allMods) * 100,
                'totalUsers' => $total,
                'monthArr' => count($monthArr) == 0 ? [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0] : $monthArr,
                'modulesArr' => count($nMonth) == 0 ? [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0] : $nMonth,
                'listUsers' => $listUsers,
                'listModules' => count($listModules) == 0 ? [] : $listModules,
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
