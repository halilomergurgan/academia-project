<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('admin.tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('admin.tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'task_date' => 'required'
        ]);

        $task = new Task();
        $task->name = request('name');
        $task->description = request('description');
        $task->task_date = request('task_date');
        $task->save();

        if ($task){
            return redirect()->route('tasks.index');
        }else{
            return redirect()->back();
        }
    }
}
