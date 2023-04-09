<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('layouts.Task.create');
    }
    public function task_create(Request $request)
    {
    }
    public function store()
    {
        return view('layouts.Task.index');
    }
}
