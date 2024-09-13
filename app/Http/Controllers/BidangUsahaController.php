<?php

namespace App\Http\Controllers;

use App\Models\BidangUsaha;
use Illuminate\Http\Request;

class BidangUsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bidangUsaha = BidangUsaha::orderBy('id_bidang_usaha', 'desc')->where('status_bidang_usaha', 'aktif')->paginate(6);
        return view('bidang_usaha', compact('bidangUsaha'));
    }

    /**
     * Display the specified resource.
     */
    public function show(BidangUsaha $bidangUsaha)
    {
        $bidangUsaha = BidangUsaha::findOrFail($bidangUsaha->id_bidang_usaha);
        return view('bidang_usaha.detail_bidang_usaha', compact('bidangUsaha'));
    }

}
