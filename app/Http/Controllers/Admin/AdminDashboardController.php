<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Subject;
use App\Models\Classroom;
use App\Models\Guardian;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'students' => Student::count(),
            'teachers' => Teacher::count(),
            'subjects' => Subject::count(),
            'classrooms' => Classroom::count(),
            'guardians' => Guardian::count(),
        ]);
    }
}

