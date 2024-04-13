<?php

namespace App\Http\Controllers\admin\kuis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HapusKuisController extends Controller
{
    public function tampilkan()
    {
        return view('admin/kuis/hapus_kuis');
    }
}
