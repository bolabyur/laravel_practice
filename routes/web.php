<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

// Halaman utama (beranda) pakai HomeController
Route::get('/', [HomeController::class, 'index'])->name('beranda');
Route::get('/beranda', [HomeController::class, 'index'])->name('beranda');
// Halaman lainnya
Route::get('/profile', [ProfilController::class, 'profile'])->name('profile');
Route::get('/kontak', [KontakController::class, 'kontak'])->name('kontak');
Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::get('/guardian', [GuardianController::class, 'index'])->name('guardian.index');
Route::get('/classroom', [ClassroomController::class, 'index'])->name('classroom.index');
Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher.index');
Route::get('/subject', [SubjectController::class, 'index'])->name('subject.index');
