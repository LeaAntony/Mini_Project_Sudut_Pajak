<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemulihanSandiController extends Controller
{
    public function tampilkan()
    {
        return view('pemulihan_sandi');
    }
}
