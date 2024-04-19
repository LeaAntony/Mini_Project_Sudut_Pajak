<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KuisController extends Controller
{
    public function tampilkan()
    {
        return view('kuis');
    }
}