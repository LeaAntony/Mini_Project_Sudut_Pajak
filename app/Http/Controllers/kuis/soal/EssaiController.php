<?php

namespace App\Http\Controllers\kuis\soal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EssaiController extends Controller
{
    public function tampilkan()
    {
        return view('kuis/soal/essai');
    }
}