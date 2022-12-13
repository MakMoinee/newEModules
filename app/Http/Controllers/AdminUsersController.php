<?php

namespace App\Http\Controllers;

use App\Models\EUsers;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUsersController extends Controller
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
            $allUsers = DB::table('e_users')->where(['userType' => 2])->get();
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
                    if (!str_contains($u['firstname'], $searchKey) || !str_contains($u['middlename'], $searchKey) || !str_contains($u['lastname'], $searchKey)) {
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


            $uid = $user[0]['userID'];
            $queryResult = DB::table('user_pic_profiles')->where(['userID' => $uid])->get();
            $pic = "";

            if (count($queryResult) > 0) {
                $profiles = json_decode($queryResult, true);
                $pic = $profiles[0]['filePath'];
            }

            return view('new.adminusers', [
                'eusers' => $newUsers,
                'pageRes' => count($pageRes) == 0 ? [] : $pageRes[$startIndex - 1],
                'nem' => $nem,
                'pic' => $pic,
                'startIndex' => $startIndex,
                'pageCount' => round($pageCount)
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

            if ($user[0]['userType'] != 1) {
                return redirect('/');
            }


            $file = $request->file('files');
            $fileName = "";
            if ($file) {
                $mimetype =  $file->getMimeType();
                if ($mimetype == "text/csv" || $mimetype == "text/plain" && $file->getClientOriginalExtension() == "csv") {

                    $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/storage/userfiles';
                    try {
                        $fileName = strtotime(now()) . "." . $file->getClientOriginalExtension();
                        $isFile = $file->move($destinationPath,  $fileName);
                        if ($isFile) {
                            $usersss = [];
                            $sIndex = 0;

                            if (($open = fopen(public_path('storage\userfiles') . "/" . $fileName, "r")) !== FALSE) {

                                while (($data = fgetcsv($open, 1000, ",")) !== FALSE) {
                                    $sIndex++;
                                    if ($sIndex == 1) {
                                        continue;
                                    }
                                    $usersss[] = $data;
                                }

                                fclose($open);
                            }

                            // dd($usersss);
                            foreach ($usersss as $u) {

                                if (count($u) >= 7) {
                                    $queryResult = DB::table('e_users')->where([
                                        'firstname' => $u[2],
                                        'middlename' => $u[3],
                                        'lastname' => $u[4],
                                    ])->get();

                                    if (count($queryResult) > 0) {
                                        //existing user
                                        continue;
                                    } else {
                                        $newProccessUser = new EUsers();
                                        $newProccessUser->username = $u[0];
                                        $newProccessUser->password = Hash::make($u[1]);
                                        $newProccessUser->firstname = $u[2];
                                        $newProccessUser->middlename = $u[3];
                                        $newProccessUser->lastname = $u[4];
                                        $newProccessUser->lrn = $u[5];
                                        $newProccessUser->track = $u[6];
                                        $newProccessUser->email = $u[7];
                                        $newProccessUser->userType = 2;
                                        $isSave = $newProccessUser->save();
                                        if ($isSave) {
                                            session()->put('successCreateUsersFromFile', true);
                                        } else {
                                            session()->put('errorCreateUsersFromFile', true);
                                            break;
                                        }
                                    }
                                } else {
                                    continue;
                                }
                            }

                            return redirect('/adminusers');
                        } else {
                            session()->put('errorUploadFile', true);
                        }
                    } catch (Exception $e) {

                        session()->put('errorUploadFile', true);
                    }
                } else {
                    session()->put('errorNotValidFile', true);
                }
            }

            return redirect('/adminusers');
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
            if ($request->btnUpdateUser) {
                $nuser = EUsers::where(['userID' => $id])->get();
                $pass = $nuser[0]['password'];

                if ($request->vpassword == "") {
                    $pass = Hash::make($request->password);
                }


                $affectedRow = DB::table('e_users')
                    ->where('userID', $id)
                    ->update([
                        'username' => $request->username,
                        'firstname' => $request->firstname,
                        'middlename' => $request->middlename,
                        'lastname' => $request->lastname,
                        'email' => $request->email,
                        'lrn' => $request->lrn,
                        'track' => $request->track,
                        'userType' => 2,
                        'password' => $pass,
                        'updated_at' => date('Y-m-d H:i:s', strtotime(now()))
                    ]);
                if ($affectedRow > 0) {
                    session()->put('successUpdateUser', true);
                } else {
                    session()->put('errorUpdateUser', true);
                }
            }

            return redirect('/adminusers');
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
        if (session()->exists("users")) {
            $user = session()->pull("users");
            session()->put('users', $user);

            if ($user[0]['userType'] != 1) {
                return redirect('/');
            }

            $isDeleted = DB::table('e_users')->where(['userID' => $id])->delete();
            if ($isDeleted > 0) {
                session()->put('successDeleteUser', true);
            } else {
                session()->put('errorDeleteUser', true);
            }
            return redirect('/adminusers');
        } else {
            return redirect('/');
        }
    }
}
