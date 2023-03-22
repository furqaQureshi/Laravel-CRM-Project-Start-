<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function users_create()
    {
        return view('layouts.User.create');
    }
    public function create(Request $request)
    {
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->user_email;
        $user->password = Hash::make($request->user_password);
        $user->phone = $request->user_phone;
        $user->address = $request->user_address;
        $user->save();
        return redirect('/user/data')->with(['Success' => "User Create is SuccessFully...."]);
    }
    public function store()
    {
        $user = User::all();
        return view('layouts.User.index', ['user' => $user]);
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('layouts.User.edit', ['user' => $user]);
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        dd($user);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->user_email;
        $user->phone = $request->user_phone;
        $user->address = $request->user_address;
        $user->save();
        return redirect('/user/data')->with(['Success' => "User Edit is SuccessFully...."]);
    }
    public function destroy($id)
    {
        return $id . "ok";
    }
}
