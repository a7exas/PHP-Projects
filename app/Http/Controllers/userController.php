<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')
            ->select('users.id', 'users.name', 'users.email', 'isadmin.privilegija')
            ->LeftJoin('isadmin', 'isadmin.user_id', '=', 'users.id')
            ->get();
        return view('admin/users', ['users'=>$users]);
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
     * @param  \App\Users  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Users $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Users  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($user_id)
    {
        $user = DB::table('users')
        ->select('users.id', 'users.name', 'users.email', 'isadmin.privilegija')
        ->LeftJoin('isadmin', 'isadmin.user_id', '=', 'users.id')
        ->Where('users.id', '=', $user_id)
        ->first();

        return view('admin/userEdit', ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Users  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user_id)
    {
        $user_update = DB::table('users')
            ->where('id', $user_id)
            ->update(['name' => $request['name'], 'email' => $request['email']]);

        $privilegija = DB::table('isadmin')
            ->select('privilegija')
            ->where('user_id', '=', $user_id)
            ->first();

        if(isset($privilegija)){
            $user_info_update = DB::table('isadmin')
                ->where('user_id', $user_id)
                ->update(['privilegija' => $request['privilege']]);
        }else{
            $user_info_create = DB::table('isadmin')
                ->insert(['user_id' => $user_id, 'privilegija' => $request['privilege']]);
        }
        return redirect('vartotojai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id)
    {
        $user_delete = DB::table('users')
            ->where('id', $user_id)
            ->delete();

        $privilegija = DB::table('isadmin')
            ->select('privilegija')
            ->where('user_id', '=', $user_id)
            ->first();

        if(isset($privilegija)){
            $user_info_delete = DB::table('isadmin')
                ->where('user_id', $user_id)
                ->delete();
        }
        return redirect('vartotojai');
    }
}
