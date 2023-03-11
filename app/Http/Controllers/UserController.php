<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_create()
    {
        return view('home');
    }
    public function create(Request $request)
    {
        dd($request->input());
    }
}
