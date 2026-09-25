<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\SubjectsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', [StudentsController::class, 'index']);

Route::get('/subjects', [SubjectsController::class, 'index']);