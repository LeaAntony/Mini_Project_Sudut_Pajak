<?php

namespace App\Http\Controllers\konsultasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilKonsultanController extends Controller
{
    public function tampilkan()
    {
        return view('konsultasi/profil_konsultan');
    }
}
