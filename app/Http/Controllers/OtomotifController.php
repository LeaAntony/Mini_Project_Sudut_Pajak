<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtomotifController extends Controller
{
    public function tampilkan()
    {
        return view('usaha/otomotif');
    }
}
