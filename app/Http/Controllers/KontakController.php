<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function kontak()
    {
        $data = [
            'email' => 'Bayu@gmail.com',
            'instagram' => '@Bolabyur'
        ];
        return view('components.kontak', [
            'kontak' => $data,
            'title' => 'Kontak'
        ]);
    }
}
