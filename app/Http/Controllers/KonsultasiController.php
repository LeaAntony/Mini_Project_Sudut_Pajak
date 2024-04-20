<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    public function tampilkan()
    {
        return view('konsultasi');
    }
}
