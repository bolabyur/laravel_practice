<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return "Selamat Datang di Website Saya";
// });

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('beranda');
// });



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
use App\Http\Controllers\Admin\AdminTeacherController;

// Rute untuk Halaman Utama
Route::get('/beranda', [HomeController::class, 'index'])->name('home');


// Rute untuk Halaman Beranda (jika diperlukan)
Route::get('/info', [InfoController::class, 'info'])->name('info');

// Rute untuk Halaman Profil
Route::get('/profil', [ProfilController::class, 'profil'])->name('profil');

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

    Route::get('/subject', [SubjectController::class, 'adminIndex'])->name('subject.index');
    Route::get('/classroom', [ClassroomController::class, 'adminIndex'])->name('classroom.index');

    Route::get('/info', [InfoController::class, 'index'])->name('info');

    Route::get('/guardian', [AdminGuardianController::class, 'index'])->name('guardian.index');
    Route::post('/guardian', [AdminGuardianController::class, 'store'])->name('guardian.store');

    Route::get('/teacher', [AdminTeacherController::class, 'index'])->name('teacher.index');
    Route::post('/teacher', [AdminTeacherController::class, 'store'])->name('teacher.store');
    Route::get('/teacher/component', [AdminTeacherController::class, 'adminIndex'])->name('teacher.component');
});