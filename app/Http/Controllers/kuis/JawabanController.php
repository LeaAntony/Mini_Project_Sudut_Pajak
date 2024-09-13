<?php

namespace App\Http\Controllers\kuis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function tampilkan()
    {
        return view('kuis.jawaban');
    }
}