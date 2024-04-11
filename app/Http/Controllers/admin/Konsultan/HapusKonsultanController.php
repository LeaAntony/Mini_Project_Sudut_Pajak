<?php

namespace App\Http\Controllers\admin\Konsultan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HapusKonsultanController extends Controller
{
    public function tampilkan()
    {
        return view('admin/konsultan/hapus_konsultan');
    }
}
