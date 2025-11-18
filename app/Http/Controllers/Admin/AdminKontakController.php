<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminKontakController extends Controller
{
    public function index()
    {
        // Data kontak statis (bisa diganti dengan data dari database)
        $email = 'admin@sekolah.com';
        $instagram = '@sekolah_official';
        $whatsapp = '+6281234567890';

        return view('components.admin.kontak', compact('email', 'instagram', 'whatsapp'));
    }
}