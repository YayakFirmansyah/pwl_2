<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $nama = 'Dhiya Uddin Firmansyah';
        $kelas = 'TI-2B';
        $nim = '2141720247';
        $jurusan = 'Teknik Informatika';
        return view('profile')
                    ->with('nama', $nama)
                    ->with('kelas', $kelas)
                    ->with('nim', $nim)
                    ->with('jurusan', $jurusan);

    }


}
