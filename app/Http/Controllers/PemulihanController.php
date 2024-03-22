<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemulihanController extends Controller
{
    public function tampilkan()
    {
        return view('pemulihan');
    }
}
