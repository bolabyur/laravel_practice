<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Http\Request;

class AdminTeacherController extends Controller
{
    public function index()
    {
        // Ambil semua teacher beserta subjectnya
        $teachers = Teacher::with('subject')->get();

        // Ambil subject yang belum punya teacher
        $availableSubjects = Subject::doesntHave('teacher')->orderBy('name')->get();

        $title = "Teacher List";

        return view('admin.teacher.teacher', compact('teachers', 'availableSubjects', 'title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'subject_id' => 'required|exists:subjects,id|unique:teachers,subject_id',
            'email' => 'required|email|unique:teachers,email',
            'phone' => 'required|string|max:15',
            'address' => 'required|string',
        ], [
            'subject_id.unique' => 'Mata pelajaran ini sudah diambil guru lain.',
        ]);

        Teacher::create($request->only(['name', 'email', 'phone', 'address', 'subject_id']));

        return redirect()->route('admin.teacher.index')->with('success', 'Guru berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'subject_id' => 'required|exists:subjects,id|unique:teachers,subject_id,' . $id,
            'email' => 'required|email|unique:teachers,email,' . $id,
            'phone' => 'required|string|max:15',
            'address' => 'required|string',
        ], [
            'subject_id.unique' => 'Mata pelajaran ini sudah diambil guru lain.',
        ]);

        $teacher->update($request->only(['name', 'email', 'phone', 'address', 'subject_id']));

        return redirect()->route('admin.teacher.index')->with('success', 'Guru berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect()->route('admin.teacher.index')->with('success', 'Guru berhasil dihapus!');
    }
}
