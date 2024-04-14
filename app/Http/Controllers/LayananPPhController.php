<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananPPhController extends Controller
{
    public function tampilkan()
    {
        return view('layanan_pph');
    }
}
