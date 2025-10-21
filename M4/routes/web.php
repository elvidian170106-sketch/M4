<?php

use App\Http\Controllers\StudentControllers;
use Illuminate\Support\Facades\Route;

Route::get('/students', [StudentControllers::class, 'index']) ->name('students.index');