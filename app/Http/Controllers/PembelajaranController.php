<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembelajaranController extends Controller
{
    public function tampilkan()
    {
        return view('pembelajaran');
    }
}
