<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function tampilkan()
    {
        return view('auth/daftar');
    }
}
