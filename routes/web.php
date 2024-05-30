<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
Route::get('/', function () {
    return view('mainpage');
});


Route::get('/add-student', function () {
    return view('add-student');
});

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::resource('/addstudent', StudentController::class);

