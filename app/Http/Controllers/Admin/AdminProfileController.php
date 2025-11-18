<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User; // Jika menggunakan model User
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    public function index()
    {
        // Data profil statis (bisa diganti dengan data dari database)
        $profileData = [
            'nama' => 'Bayu Pratama',
            'email' => 'bayu@smkradenumarsaid.com',
            'telepon' => '+62 812-3456-7890',
            'alamat' => 'Jl. Pendidikan No. 123',
            'sekolah' => 'SMK Raden Umar Said',
            'kelas' => 'XI PPLG 1',
            'jurusan' => 'PPLG',
            'foto_profil' => 'https://ui-avatars.com/api/?name=Bayu+Pratama&background=0D8ABC&color=fff'
        ];

        $title = 'Profil Siswa';

        return view('components.admin.profil', compact('profileData', 'title'));
    }

    public function edit()
    {
        // Data untuk form edit (bisa dari database)
        $profileData = [
            'nama' => 'Bayu Pratama',
            'email' => 'bayu@smkradenumarsaid.com',
            'telepon' => '+62 812-3456-7890',
            'alamat' => 'Jl. Pendidikan No. 123',
            'kelas' => 'XI PPLG 1'
        ];

        return response()->json($profileData);
    }

    public function update(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telepon' => 'required|string|max:20',
            'alamat' => 'required|string|max:500',
            'kelas' => 'required|string|max:50'
        ]);

        // Simpan ke database (contoh dengan model User)
        // $user = Auth::user();
        // $user->update($validated);

        // Untuk sementara, kita return success message
        return redirect()->route('admin.profil.index')
            ->with('success', 'Profil berhasil diperbarui!');
    }

    // Method untuk update foto profil
    public function updatePhoto(Request $request)
    {
        $request->validate([
            'foto_profil' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Simpan foto profil
        if ($request->hasFile('foto_profil')) {
            $path = $request->file('foto_profil')->store('profiles', 'public');
            
            // Update path foto di database
            // $user = Auth::user();
            // $user->update(['foto_profil' => $path]);
        }

        return redirect()->route('admin.profil.index')
            ->with('success', 'Foto profil berhasil diperbarui!');
    }
}   