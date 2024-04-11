<?php

namespace App\Http\Controllers\admin\berita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TambahBeritaController extends Controller
{
    public function tampilkan()
    {
        return view('admin/berita/tambah_berita');
    }
}
