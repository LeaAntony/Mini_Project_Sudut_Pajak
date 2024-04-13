<?php

namespace App\Http\Controllers\admin\kuis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailHasilKuisController extends Controller
{
    public function tampilkan()
    {
        return view('admin/kuis/detail_hasil_kuis');
    }
}
