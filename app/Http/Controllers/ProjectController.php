<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
        $status = Project::join('statues', 'projects.id', '=', 'statues.id')
        ->select('statues.name', 'statues.id')
        ->get();
        $client = Project::join('client', 'projects.id','=','client.id')
        ->select('client.name','client.id')
        ->get();
        return view('layouts.Project.create', ['status' => $status,'client' => $client]);
     }
    public function organization_create(Request $request)
    {
        $project = new Project();
        $project->title = $request->title;
        $project->status_id = $request->status;
        $project->deadline = $request->deadline;
        $project->description = $request->description;
        $project->save();
    }
    public function store()
    {
        return view('layouts.Project.index');
    }
}
