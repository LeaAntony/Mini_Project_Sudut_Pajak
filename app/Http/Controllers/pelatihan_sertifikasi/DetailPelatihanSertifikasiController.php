<?php

namespace App\Http\Controllers\pelatihan_sertifikasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailPelatihanSertifikasiController extends Controller
{
    public function tampilkan()
    {
        return view('pelatihan_sertifikasi/detail_pelatihan_sertifikasi');
    }
}
