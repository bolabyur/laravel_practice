<?php

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
use App\Http\Controllers\Admin\AdminKontakController as AdminAdminKontakController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\AdminTeacherController;
use App\Http\Controllers\AdminKontakController;
use App\Http\Controllers\AdminKontakController as ControllersAdminKontakController;

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
    Route::get('/dashboard', function () {
        return view('components.admin.dashboard');
    });

    

    Route::get('/student', [AdminStudentController::class, 'index'])->name('student.index');
    Route::post('/student', [AdminStudentController::class, 'store'])->name('student.store');
    Route::put('/student/{id}', [AdminStudentController::class, 'update'])->name('student.update'); // 
    Route::delete('/student/{id}', [AdminStudentController::class, 'destroy'])->name('student.destroy'); 

    Route::get('/subject', [SubjectController::class, 'adminIndex'])->name('subject.index');
    Route::get('/classroom', [ClassroomController::class, 'adminIndex'])->name('classroom.index');

    Route::get('/kontak', [AdminAdminKontakController::class, 'index'])->name('kontak.index');

    Route::get('/profil', [AdminProfileController::class, 'index'])->name('profil.index');
    Route::get('/profil/edit', [AdminProfileController::class, 'edit'])->name('profil.edit');
    Route::put('/profil/update', [AdminProfileController::class, 'update'])->name('profil.update');
    Route::post('/profil/update-photo', [AdminProfileController::class, 'updatePhoto'])->name('profil.update-photo');

    Route::get('/guardian', [AdminGuardianController::class, 'index'])->name('guardian.index');
    Route::post('/guardian', [AdminGuardianController::class, 'store'])->name('guardian.store');
    Route::put('/guardian/{id}', [AdminGuardianController::class, 'update'])->name('guardian.update');
    Route::delete('/guardian/{id}', [AdminGuardianController::class, 'destroy'])->name('guardian.destroy');

    Route::get('/teacher', [AdminTeacherController::class, 'index'])->name('teacher.index');
    Route::post('/teacher', [AdminTeacherController::class, 'store'])->name('teacher.store');
    Route::get('/teacher/component', [AdminTeacherController::class, 'adminIndex'])->name('teacher.component');
    Route::put('/teacher/{id}', [AdminTeacherController::class, 'update'])->name('teacher.update');
    Route::delete('/teacher/{id}', [AdminTeacherController::class, 'destroy'])->name('teacher.destroy');
});
