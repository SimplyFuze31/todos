<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Response;

class TaskController
{

    public function index(): Response
    {
        $tasks = Task::all();

        return inertia('Home', ['tasks' => $tasks]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required | max:255 | string',
            'type' => 'required | max:255 | string',
        ]);

        Task::create($validated);

        return redirect('/');

    }

    public function destroy(int $id){

        Task::destroy($id);

        return redirect('/');

    }

}
