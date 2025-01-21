<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Taskcontroller;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('tasks', Taskcontroller::class);
