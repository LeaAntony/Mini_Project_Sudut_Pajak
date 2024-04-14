<?php

namespace App\Http\Controllers\admin\pembelajaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TambahPembelajaranController extends Controller
{
    public function tampilkan()
    {
        return view('admin/pembelajaran/tambah_pembelajaran');
    }
}
