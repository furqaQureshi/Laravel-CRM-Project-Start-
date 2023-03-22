<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermisionController extends Controller
{
    public function create_permision()
    {
        return view('layouts.Permision.create');
    }
    public function create(Request $request)
    {
        dd($request->input());
    }
    public function store(){
        return view('layouts.Permision.index');
    }
}
