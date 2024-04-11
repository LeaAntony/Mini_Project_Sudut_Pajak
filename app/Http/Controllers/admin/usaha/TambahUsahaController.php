<?php

namespace App\Http\Controllers\admin\usaha;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TambahUsahaController extends Controller
{
    public function tampilkan()
    {
        return view('admin/usaha/tambah_usaha');
    }
}
