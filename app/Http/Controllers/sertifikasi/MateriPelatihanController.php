<?php

namespace App\Http\Controllers\sertifikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MateriPelatihanController extends Controller
{
    public function tampilkan()
    {
        return view('sertifikasi/Materi_Pelatihan');
    }
}