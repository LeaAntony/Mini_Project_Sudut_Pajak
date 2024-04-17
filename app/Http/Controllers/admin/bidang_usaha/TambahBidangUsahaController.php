<?php

namespace App\Http\Controllers\admin\bidang_usaha;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TambahBidangUsahaController extends Controller
{
    public function tampilkan()
    {
        return view('admin/bidang_usaha/tambah_bidang_usaha');
    }
}
