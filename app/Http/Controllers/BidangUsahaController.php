<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BidangUsahaController extends Controller
{
    public function tampilkan()
    {
        return view('bidang_usaha');
    }
}
