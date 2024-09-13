<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::orderBy('id_berita', 'desc')->where('status_berita', 'aktif')->paginate(6);
        return view('berita', compact('berita'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        $berita = Berita::findOrFail($berita->id_berita);
        return view('berita.detail_berita', compact('berita'));
    }

}
