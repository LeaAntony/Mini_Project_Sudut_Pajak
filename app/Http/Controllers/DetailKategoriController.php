<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailKategoriController extends Controller
{
    public function tampilkan()
    {
        return view('detail_kategori');
    }
}
