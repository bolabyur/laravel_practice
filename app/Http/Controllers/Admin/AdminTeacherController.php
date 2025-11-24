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
        $teachers = Teacher::with('subject')->get();
        $subjects = Subject::orderBy('name')->get();
        $title = "Teacher List";
        return view('components.admin.teacher', compact('teachers', 'subjects', 'title'));
        
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
            'subject_id.unique' => 'Mata pelajaran ini sudah diambil oleh guru lain. Setiap guru harus memiliki mata pelajaran yang unik.',
        ]);

        Teacher::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'subject_id' => $request->subject_id,
        ]);

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
            'subject_id.unique' => 'Mata pelajaran ini sudah diambil oleh guru lain. Setiap guru harus memiliki mata pelajaran yang unik.',
        ]);

        $teacher->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'subject_id' => $request->subject_id,
        ]);

        return redirect()->route('admin.teacher.index')->with('success', 'Data guru berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect()->route('admin.teacher.index')->with('success', 'Guru berhasil dihapus!');
    }
}