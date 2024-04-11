<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IdentifikasiController extends Controller
{
    public function tampilkan()
    {
        return view('auth/identifikasi');
    }
}
