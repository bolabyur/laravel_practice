<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class AdminSubjectController extends Controller
{
    public function index()
    {
        // Ganti 'teachers' jadi 'teacher'
        $subjects = Subject::with('teacher')->get();
        $title = "Subject List";

        return view('admin.subject.subject', compact('subjects', 'title'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Subject::create($request->only(['name', 'description']));

        return redirect()->route('admin.subject.index')->with('success', 'Subject berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $subject = Subject::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $subject->update($request->only(['name', 'description']));

        return redirect()->route('admin.subject.index')->with('success', 'Subject berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();

        return redirect()->route('admin.subject.index')->with('success', 'Subject berhasil dihapus!');
    }
}
