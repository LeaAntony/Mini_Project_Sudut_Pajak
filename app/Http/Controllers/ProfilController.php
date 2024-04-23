<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function tampilkan()
    {
        return view('profil');
    }
}
