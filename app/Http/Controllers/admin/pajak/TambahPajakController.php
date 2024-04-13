<?php

namespace App\Http\Controllers\admin\pajak;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TambahPajakController extends Controller
{
    public function tampilkan()
    {
        return view('admin/pajak/tambah_pajak');
    }
}
