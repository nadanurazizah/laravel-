<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
        {
            $mahasiswa = [
                'Qinan',
                'Hermawan'
            ];

            return view('pages.Mahasiswa', compact('mahasiswa'));
        }
}
