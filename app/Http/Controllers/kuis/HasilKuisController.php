<?php

namespace App\Http\Controllers\kuis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HasilKuisController extends Controller
{
    public function tampilkan()
    {
        return view('kuis/hasil_kuis');
    }
}
