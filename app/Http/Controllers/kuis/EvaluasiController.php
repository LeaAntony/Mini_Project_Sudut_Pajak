<?php

namespace App\Http\Controllers\kuis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EvaluasiController extends Controller
{
    public function tampilkan()
    {
        return view('kuis.evaluasi');
    }
}