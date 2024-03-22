<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdentifikasiController extends Controller
{
    public function tampilkan()
    {
        return view('identifikasi');
    }
}
