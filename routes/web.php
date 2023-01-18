<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;





Route::get('/', [TeacherController::class,'index'])->name('home');
Route::get('/teachers/all', [TeacherController::class,'allTeachers'])->name('all.teachers');
Route::get('/test', [TeacherController::class,'test'])->name('test');

Route::post('/add/teacher', [TeacherController::class,'store'])->name('store');
Route::post('/update/teacher', [TeacherController::class,'update'])->name('update.teacher');
Route::post('/delete/teacher', [TeacherController::class,'destroy'])->name('delete.teacher');

Route::get('/pagination/paginate-data', [TeacherController::class,'paginator'])->name('paginator');
Route::get('/search', [TeacherController::class,'search'])->name('search');
