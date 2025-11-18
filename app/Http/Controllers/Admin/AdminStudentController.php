<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Classroom;

class AdminStudentController extends Controller
{
    // Menampilkan daftar student + modal tambah
    public function index()
    {
        $students = Student::with('classroom')->get();
        $classrooms = Classroom::all();

        return view('components.admin.student', [
            'title' => 'Data Students',
            'students' => $students,
            'classrooms' => $classrooms
        ]);
    }

    // Simpan data student baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
            'address' => 'required|string',
            'classroom_id' => 'required|exists:classrooms,id',
        ]);

        Student::create($validated);

        return redirect()->route('admin.student.index')->with('success', 'Student berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $id,
            'address' => 'required|string',
            'classroom_id' => 'required|exists:classrooms,id'
        ]);

        $student->update($validated);

        return redirect()->route('admin.student.index')
            ->with('success', 'Student updated successfully');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('admin.student.index')
            ->with('success', 'Student deleted successfully');
    }
}
