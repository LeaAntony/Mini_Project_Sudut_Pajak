<?php

namespace App\Http\Controllers\admin\kuis\soal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TambahSoalController extends Controller
{
    public function tampilkan()
    {
        return view('admin/kuis/soal/tambah_soal');
    }
}
