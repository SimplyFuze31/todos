<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Nette\NotImplementedException;


Route::get('/', [TaskController::class, 'index'])->name('task.index');

Route::post('/store', [TaskController::class, 'store'])->name('task.store');

Route::delete('/destroy/{id}', [TaskController::class, 'destroy'])->name('task.destroy');
