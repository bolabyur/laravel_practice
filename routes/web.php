<?php

use App\Http\Controllers\Admin\AdminClassroomController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminSubjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuardianController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\Admin\AdminStudentController;
use App\Http\Controllers\Admin\AdminGuardianController;
use App\Http\Controllers\Admin\AdminKontakController;
use App\Http\Controllers\Admin\AdminTeacherController;

// Rute untuk Halaman Utama
Route::get('/beranda', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute untuk Halaman Beranda (jika diperlukan)
Route::get('/info', [InfoController::class, 'info'])->name('info');

// Rute untuk Halaman Profil
Route::get('/profile', [ProfilController::class, 'profile'])->name('profil');

// Rute untuk Halaman Kontak
Route::get('/kontak', [KontakController::class, 'kontak'])->name('kontak');

Route::get('/student', [StudentController::class, 'index'])->name('student');
Route::get('/guardian', [GuardianController::class, 'index'])->name('guardian');
Route::get('/classroom', [ClassroomController::class, 'index'])->name('classroom.index');
Route::get('/teacher', [TeacherController::class, 'index'])->name('teacher');
Route::get('/subject', [SubjectController::class, 'index'])->name('subject');


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::resource('/student', AdminStudentController::class);
    Route::resource('/classroom', AdminClassroomController::class);
    Route::resource('/teacher', AdminTeacherController::class);
    Route::resource('/subject', AdminSubjectController::class);
    Route::resource('/guardian', AdminGuardianController::class);
});