<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        $berita = Berita::orderBy('id_berita', 'desc')->limit(3)->get();
        return view('beranda', compact('berita'));
    }
}
