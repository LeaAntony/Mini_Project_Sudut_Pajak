<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengaturanAkunController extends Controller
{
    public function tampilkan()
    {
        return view('admin/pengaturan_akun');
    }
}
