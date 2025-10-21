<?php

use App\Http\Controllers\StudentControllers;
use Illuminate\Support\Facades\Route;
Route::get('/students', [StudentControllers::class, 'index']) ->name('students.index');
Route::get('/login', function () {
    return view('login');
});