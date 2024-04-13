<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function tampilkan()
    {
        return view('kalkulator');
    }
}
