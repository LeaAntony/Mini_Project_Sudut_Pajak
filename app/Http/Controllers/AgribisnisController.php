<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgribisnisController extends Controller
{
    public function tampilkan()
    {
        return view('usaha/agribisnis');
    }
}
