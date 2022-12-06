<?php

namespace App\Http\Controllers;

use App\Models\EUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $has = $request->session()->has('users');
        if ($has) {
            $user = session()->pull("users");
            session()->put('users', $user);
            if ($user[0]['userType'] == 1) {
                return redirect('/admin');
            }

            if ($user[0]['userType'] == 0) {
                return redirect("/superadmin");
            }
            return redirect('/strands');
        } else {
            $queryResult = DB::table('e_users')->where(['userType' => 0])->get();
            $userCount = count($queryResult);
            if ($userCount == 0) {
                $newUser = new EUsers();
                $newUser->username = env('SUPER_USER', 'superadmin');
                $newUser->password = Hash::make(env('SUPER_PASS', 'superadmin'));
                $newUser->userType = 0;
                $newUser->save();
            }
            return view('welcome');
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
