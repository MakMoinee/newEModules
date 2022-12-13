<?php

namespace App\Http\Controllers;

use App\Models\UserPicProfile;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserPicProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        if (session()->exists('users')) {
            $user = session()->pull("users");
            session()->put('users', $user);

            if ($user[0]['userType'] == 0) {
                return redirect('/');
            }



            $uid = $user[0]['userID'];
            $file = $request->file('files');
            $fileName = "";
            if ($file) {
                $mimetype =  $file->getMimeType();
                if ($mimetype == "image/jpg" || $mimetype == "image/png" || $mimetype == "image/jpeg") {
                    $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/storage/profiles';
                    try {
                        $fileName = $request->description . "" .  strtotime(now()) . "." . $file->getClientOriginalExtension();
                        $isFile = $file->move($destinationPath,  $fileName);

                        $queryResult = DB::table('user_pic_profiles')->where(['userID' => $uid])->get();
                        $dUser = json_decode($queryResult, true);
                        if (count($queryResult) > 0) {
                            $affectedRows = DB::table('user_pic_profiles')->where(['userID' => $dUser[0]['userID']])
                                ->update([
                                    'filePath' => $fileName
                                ]);
                            if ($affectedRows > 0) {
                                session()->put('successUploadPic', true);
                            } else {
                                session()->put('errorUploadPic', true);
                            }
                        } else {
                            $newPic = new UserPicProfile();
                            $newPic->userID =  $uid;
                            $newPic->filePath = $fileName;
                            $isSave = $newPic->save();
                            if ($isSave) {
                                session()->put('successUploadPic', true);
                            } else {
                                session()->put('errorUploadPic', true);
                            }
                        }
                    } catch (Exception $e) {
                        session()->put('errorUploadPic', true);
                    }
                } else {
                    session()->put('errorNotValidFilePic', true);
                }
            }
            return redirect('/profile');
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
