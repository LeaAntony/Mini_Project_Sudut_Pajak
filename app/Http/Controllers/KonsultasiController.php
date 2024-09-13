<?php

namespace App\Http\Controllers;

use App\Models\Konsultan;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $konsultan = Konsultan::orderBy('id_konsultan', 'desc')->where('status_konsultan', 'Aktif')->limit(2)->get();
        return view('konsultasi', compact('konsultan'));
    }

    /**
     * Display the specified resource.
     */
    public function search(Request $request)
    {
        $konsultan = Konsultan::orderBy('id_konsultan', 'desc')->where('nama_konsultan', 'like', '%'.$request->pencarian.'%')->orWhere('kategori_konsultan', 'like', '%'.$request->pencarian.'%')->orWhere('jenjang_karir_konsultan', 'like', '%'.$request->pencarian.'%')->where('status_konsultan', 'aktif')->get();
        return view('konsultasi.pencarian_konsultan', compact('konsultan'));
    }

    /**
     * Display the specified resource.
     */
    public function showKategori(Request $request)
    {
        $konsultan = Konsultan::where('kategori_konsultan', $request->kategori)->where('status_konsultan', 'aktif')->orderBy('id_konsultan', 'desc')->get();
        return view('konsultasi.detail_kategori', compact('konsultan'));
    }

    /**
     * Display the specified resource.
     */
    public function showProfil(Konsultan $konsultan)
    {
        $konsultan = Konsultan::findOrFail($konsultan->id_konsultan);
        return view('konsultasi.profil_konsultan', compact('konsultan'));
    }

}
