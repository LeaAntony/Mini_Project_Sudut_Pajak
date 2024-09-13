<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\BidangUsaha;
use App\Models\Konsultan;
use App\Models\Kuis;
use App\Models\Pelatihan;
use App\Models\Pembelajaran;
use App\Models\PeraturanPajak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DasborAdminController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $jumlahBerita = Berita::get()->count();
        $jumlahBidangUsaha = BidangUsaha::get()->count();
        $jumlahKonsultan = Konsultan::get()->count();
        $jumlahKuis = Kuis::get()->count();
        $jumlahPeraturanPajak = PeraturanPajak::get()->count();
        $jumlahPelatihan = Pelatihan::get()->count();
        $jumlahPembelajaran = Pembelajaran::get()->count();
        return view('admin.dasbor', compact('user', 'jumlahBerita', 'jumlahBidangUsaha', 'jumlahKonsultan', 'jumlahKuis', 'jumlahPeraturanPajak', 'jumlahPelatihan', 'jumlahPembelajaran'));
    }

}
