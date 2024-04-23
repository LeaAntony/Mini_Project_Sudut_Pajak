<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function tampilkan()
    {
        return view('tamu');
    }
}
