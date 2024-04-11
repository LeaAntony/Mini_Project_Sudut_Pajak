<?php

namespace App\Http\Controllers\admin\pelatihan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HapusPelatihanController extends Controller
{
    public function tampilkan()
    {
        return view('admin/pelatihan/hapus_pelatihan');
    }
}
