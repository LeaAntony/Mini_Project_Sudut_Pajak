<?php

namespace App\Http\Controllers\pembelajaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembelajaranController extends Controller
{
    public function tampilkan()
    {
        return view('pembelajaran/pembelajaran');
    }
}
