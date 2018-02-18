<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $task=Task::get();
        return view('tasks',['tasks'=>$task]);
    }

    public function create()
    {
        return view('tasks');
    }

    public function store(TaskRequest $request)
    {
        Task::create($request->all());
        return back();
    }
}
