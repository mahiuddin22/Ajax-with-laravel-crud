<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;





Route::get('/', [TeacherController::class,'index'])->name('home');
Route::get('/teachers/all', [TeacherController::class,'allTeachers'])->name('all.teachers');
