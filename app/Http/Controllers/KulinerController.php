<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KulinerController extends Controller
{
    public function tampilkan()
    {
        return view('usaha/kuliner');
    }
}
