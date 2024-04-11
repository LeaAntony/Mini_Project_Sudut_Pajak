<?php

namespace App\Http\Controllers\admin\pelatihan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TambahPelatihanController extends Controller
{
    public function tampilkan()
    {
        return view('admin/pelatihan/tambah_pelatihan');
    }
}
