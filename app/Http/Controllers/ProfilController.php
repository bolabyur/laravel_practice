<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function profile()
    {
        $data = [
            'nama' => 'Bayu',
            'kelas' => 'XI PPLG 1',
            'sekolah' => 'SMK Raden Umar Said'
        ];
        return view('components.profile',[
            'profile' => $data,
            'title' => 'Profile'
        ]);
    }


}
