<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
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

            $uid = $user[0]['userID'];
            $queryResult = DB::table('user_pic_profiles')->where(['userID' => $uid])->get();
            $pic = "";
            if (count($queryResult) > 0) {
                $profiles = json_decode($queryResult, true);
                $pic = $profiles[0]['filePath'];
            }
            if ($user[0]['userType'] == 2) {
                return view('new.studentabout', [
                    'track' => $user[0]['track'],
                    'user' => $user[0]['username'],
                    'pic' => $pic
                ]);
            }

            if ($user[0]['userType'] == 1) {
                return view('new.adminabout', [
                    'track' => $user[0]['track'],
                    'nem' => $user[0]['username'],
                    'pic' => $pic
                ]);
            }
        } else {
            return view('about');
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
