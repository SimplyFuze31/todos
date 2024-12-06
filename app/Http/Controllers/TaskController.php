<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController
{

    public function index()
    {
        $tasks = Task::all();

        return inertia('Home', ['tasks' => $tasks]);
    }

    public function store(Request $request){

        $validated = $request->validate([
            'title' => 'required',
        ]);
        Task::create($validated);

        return redirect('/');

    }

}
