<?php

namespace App\Http\Controllers\kuis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NilaiKuisController extends Controller
{
    public function tampilkan()
    {
        return view('kuis/nilai_kuis');
    }
}