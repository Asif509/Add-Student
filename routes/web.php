<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AddStudent;


Route::get('/',[HomeController::class, 'home'])->name('home');
Route::get('/add-student',[AddStudent::class, 'addStudent'])->name('add-student');
Route::get('/manage-student',[AddStudent::class, 'manageStudent'])->name('manage-student');
Route::post('/new-student',[AddStudent::class,'store'])->name('student-store');
Route::get('/delete-student/{id}', [AddStudent::class, 'destroy'])->name('student.destroy');
