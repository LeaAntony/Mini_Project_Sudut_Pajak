<?php

namespace App\Http\Controllers\pembelajaran\artikel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailArtikelController extends Controller
{
    public function tampilkan()
    {
        return view('pembelajaran/artikel/detail_artikel');
    }
}
