<?php

namespace App\Http\Controllers;

use App\Models\EUsers;
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
            if ($user[0]['userType'] != 1) {
                return redirect('/');
            }

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
            $totalNewUsers = $newUsers->TotalNewUsers;
            $monthArr = array();

            foreach ($nUsers as $u) {
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


            return view('new.adminreport', [
                'pic' => $pic,
                'totalNewUsers' => $totalNewUsers,
                'percentage' => $totalNewUsers / $total * 100,
                'totalUsers' => $total,
                'monthArr' => $monthArr
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
