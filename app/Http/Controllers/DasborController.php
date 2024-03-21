<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DasborController extends Controller
{
    public function tampilkan()
    {
        return view('dasbor');
    }
}
