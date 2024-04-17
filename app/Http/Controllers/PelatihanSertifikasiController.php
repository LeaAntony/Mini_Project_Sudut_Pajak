<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelatihanSertifikasiController extends Controller
{
    public function tampilkan()
    {
        return view('pelatihan_sertifikasi');
    }
}
