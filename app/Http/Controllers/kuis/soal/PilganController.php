<?php

namespace App\Http\Controllers\kuis\soal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PilganController extends Controller
{
    public function tampilkan()
    {
        return view('kuis/soal/pilgan');
    }
}