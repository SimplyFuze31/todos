<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Nette\NotImplementedException;


Route::get('/', function () {
    return Inertia::render('Home');
});
