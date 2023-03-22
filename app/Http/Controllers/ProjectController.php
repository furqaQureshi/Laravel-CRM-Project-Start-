<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('layouts.Project.create');
    }
    public function organization_create(Request $request)
    {
    }
    public function store()
    {
        return view('layouts.Project.index');
    }
}
