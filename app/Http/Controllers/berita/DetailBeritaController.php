<?php

namespace App\Http\Controllers\berita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailBeritaController extends Controller
{
    public function tampilkan()
    {
        return view('berita/detail_berita');
    }
}
