<?php

namespace App\Http\Controllers\admin\Konsultan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TambahKonsultanController extends Controller
{
    public function tampilkan()
    {
        return view('admin/konsultan/tambah_konsultan');
    }
}
