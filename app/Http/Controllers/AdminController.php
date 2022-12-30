<?php

namespace App\Http\Controllers;

use App\Models\EUsers;
use App\Models\Modules;
use App\Models\UserPicProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
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
            $uType = $user[0]['userType'];
            $nem = $user[0]['username'];
            $nUsers = EUsers::where([['userID', '<>', 0]])->get();
            $total = count($nUsers);
            if ($uType == 0) {
                $newUsers = DB::table('vwtotalnewuserssuperadmin')->first();
            } else {
                $newUsers = DB::table('vwtotalnewusers')->first();
            }

            $totalNewUsers = $newUsers->TotalNewUsers;

            $uid = $user[0]['userID'];
            $queryResult = DB::table('user_pic_profiles')->where(['userID' => $uid])->get();
            $pic = "";
            if (count($queryResult) > 0) {
                $profiles = json_decode($queryResult, true);
                $pic = $profiles[0]['filePath'];
            }
            $allPics = UserPicProfile::all();
            $allPics = json_decode($allPics, true);
            if ($user[0]['userType'] == 0) {

                $allUsers = DB::table('e_users')->where([['userType', '<>', 0]])->orderByDesc('created_at')->get();
            } else {

                $allUsers = DB::table('e_users')->where([['userType', '<>', 0], ['userType', '<>', 1]])->orderByDesc('created_at')->get();
            }
            $allUsers = json_decode($allUsers, true);

            $startIndex = $request->query('page') == null ? 1 : $request->query('page');
            $pageCount = count($allUsers) / 5;
            $pageRes = array();
            $eachRes = array();
            $loopCount = 0;

            $allModules = Modules::all();

            $tCount = 0;
            foreach ($allUsers as $ur) {
                $tCount++;
                if ($tCount == 5) {
                    array_push($eachRes, $ur);
                    array_push($pageRes, $eachRes);
                    $eachRes = [];
                    $tCount = 0;
                } else if ($loopCount + 1 == count($allUsers)) {
                    if ($tCount < 5) {
                        array_push($eachRes, $ur);
                        array_push($pageRes, $eachRes);
                    }
                } else {
                    array_push($eachRes, $ur);
                }
                $loopCount++;
            }
            // dd([
            //     'nem' => $nem,
            //     'totalNewUsers' => $totalNewUsers,
            //     'totalUsers' => $total,
            //     'allUsers' => $allUsers,
            //     'allPics' => $allPics,
            //     'pic' => $pic
            // ]);
            return view('new.admin', [
                'nem' => $nem,
                'totalNewUsers' => $totalNewUsers,
                'totalUsers' => $total,
                'allUsers' => $allUsers,
                'pageRes' => count($pageRes) == 0 ? [] : $pageRes[$startIndex - 1],
                'allPics' => $allPics,
                'pic' => $pic,
                'startIndex' => $startIndex,
                'pageCount' => $pageCount,
                'allModules' => $allModules,
                'uType' => $uType
            ]);
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
