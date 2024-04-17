<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function tampilkan()
    {
        return view('berita');
    }
}
