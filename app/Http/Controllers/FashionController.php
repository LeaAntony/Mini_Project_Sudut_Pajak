<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FashionController extends Controller
{
    public function tampilkan()
    {
        return view('usaha/fashion');
    }
}
