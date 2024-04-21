<?php

namespace App\Http\Controllers\kuis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailKuisController extends Controller
{
    public function tampilkan()
    {
        return view('kuis/detail_kuis');
    }
}