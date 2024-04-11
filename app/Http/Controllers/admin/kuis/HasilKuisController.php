<?php

namespace App\Http\Controllers\admin\kuis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HasilKuisController extends Controller
{
    public function tampilkan()
    {
        return view('admin/kuis/hasil_kuis');
    }
}
