<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Nette\NotImplementedException;


Route::get('/', [TaskController::class, 'index']);

Route::post('/', [TaskController::class, 'store'])->name('task.store');
