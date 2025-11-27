<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use Illuminate\Http\Request;

class AdminClassroomController extends Controller
{
    public function index()
    {
        // Muat relasi students agar bisa dihitung di Blade
        $classrooms = Classroom::with('students')->get();

        return view('admin.classroom.classroom', [
            'title' => 'Classroom List',
            'classrooms' => $classrooms
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'class' => 'required|string|max:255',
        ]);

        Classroom::create($request->all());

        return redirect()->route('admin.classroom.index')->with('success', 'Classroom added successfully!');
    }

    public function update(Request $request, $id)
    {
        $classroom = Classroom::findOrFail($id);

        $validated = $request->validate([
            'class' => 'required|string|max:255',
        ]);

        $classroom->update($validated);

        return redirect()->route('admin.classroom.index')->with('success', 'Classroom updated successfully!');
    }
}
