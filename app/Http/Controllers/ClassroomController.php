<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        $classrooms = Classroom::all(); 
        return view('classroom', [
            'title' => 'Classroom', 
            'classrooms' => $classrooms  
        ]);
    }

    public function adminIndex()
    {
        $classrooms = Classroom::all();

        // Mengarah ke resources/views/admin/classroom.blade.php
        return view('components.admin.classroom', [ 
            'title' => 'Data Classroom (Admin)',
            'classrooms' => $classrooms
        ]);
    }
}