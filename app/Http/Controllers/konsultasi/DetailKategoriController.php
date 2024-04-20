<?php

namespace App\Http\Controllers\konsultasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailKategoriController extends Controller
{
    public function tampilkan()
    {
        return view('konsultasi/detail_kategori');
    }
}
