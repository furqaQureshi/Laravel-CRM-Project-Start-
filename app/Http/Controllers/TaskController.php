<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Status;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $status = Status::select('id', 'name')->orderBy('id','asc')->get();
        $project = Project::select('id', 'title')->orderBy('id','asc')->get();
        $user = User::select('id', 'name')->orderBy('id','asc')->get();
        return view('layouts.Task.create',
        [
            'status' => $status,
             'project' => $project,
             'user' => $user
            ]
    );
    }
    public function task_create(Request $request)
    {
        $task = new Task();
        $task->title = $request->title;
        $task->project_id =  $request->project;
        $task->user_id =  $request->user;
        $task->status_id =  $request->status;
        $task->deadline = $request->date;
        $task->description = $request->description;
        $task->save();
        return redirect('task.data');  
    }
    public function store()
    {
        $task = Task::all();
        return view('layouts.Task.index', ['task' => $task]);
    }
}
