<?php

namespace App\Http\Controllers;

use App\Models\permision;
use Illuminate\Http\Request;

class PermisionController extends Controller
{
    public function create_permision()
    {
        return view('layouts.Permision.create');
    }
    public function create(Request $request)
    {
        // $permision = new permision();

    }
    public function store(){
        return view('layouts.Permision.index');
    }
}
