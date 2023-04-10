<?php

namespace App\Http\Controllers;


use App\Models\Project;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
        $status = DB::table('statues')->select('id', 'name')->get();
        $client = DB::table('client')->select('id', 'name')->get();
        $user = DB::table('users')->select('id', 'name')->get();
        return view('layouts.Project.create', [
            'status' => $status,
            'client' => $client,
            'user' => $user
        ]);
    }
    public function organization_create(Request $request)
    {
        $project = new Project();
        $project->title = $request->title;
        $project->status_id = $request->status;
        $project->client_id = $request->client_name;
        $project->manager_id = $request->user_name;
        $project->deadline = $request->DeadLine;
        $project->description = $request->description;
        $project->save();
        return redirect()->route('project.data');
    }
    public function store()
    {
        $project = Project::all();
        return view('layouts.Project.index', ['project' => $project]);
    }
}
