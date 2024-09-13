<?php

namespace App\Http\Controllers;

use App\Models\Pelatihan;
use Illuminate\Http\Request;

class PelatihanSertifikasiController extends Controller
{

        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelatihan = Pelatihan::orderBy('id_pelatihan', 'desc')->where('status_pelatihan', 'aktif')->paginate(6);
        return view('pelatihan_sertifikasi', compact('pelatihan'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelatihan $pelatihan)
    {
        $pelatihan = Pelatihan::findOrFail($pelatihan->id_pelatihan);
        return view('pelatihan_sertifikasi.detail_pelatihan_sertifikasi', compact('pelatihan'));
    }

}
