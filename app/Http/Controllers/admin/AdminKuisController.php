<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kuis;
use App\Models\Soal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminKuisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $kuis = Kuis::orderBy('id_kuis', 'desc')->get();
        return view('admin.kuis.list_kuis', compact('user', 'kuis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        return view('admin.kuis.tambah_kuis', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_kuis' => 'required|max:255|string',
            'waktu_kuis' => 'required|max:255|numeric',
            'jumlah_soal_kuis' => 'required|max:255|numeric',
            'status_kuis' => 'required',
        ]);


        $kuis = Kuis::create([
            'judul_kuis' => $request->judul_kuis,
            'waktu_kuis' => $request->waktu_kuis,
            'jumlah_soal_kuis' => $request->jumlah_soal_kuis,
            'status_kuis' => $request->status_kuis,
        ]);

        return redirect()->route('kuis.soal.create', $kuis->id_kuis)->with('status', 'Kuis berhasil ditambahkan, silahkan tambahkan soal.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kuis $kuis)
    {
        $user = Auth::user();
        $kuis = Kuis::findOrFail($kuis->id_kuis);
        return view('admin.kuis.edit_kuis', compact('user', 'kuis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kuis $kuis)
    {
        $request->validate([
            'judul_kuis' => 'required|max:255|string',
            'waktu_kuis' => 'required|max:255|numeric',
            'jumlah_soal_kuis' => 'required|max:255|numeric',
            'status_kuis' => 'required',
        ]);

        $kuis = Kuis::findOrFail($kuis->id_kuis);

        $kuis->update([
            'judul_kuis' => $request->judul_kuis,
            'waktu_kuis' => $request->waktu_kuis,
            'jumlah_soal_kuis' => $request->jumlah_soal_kuis,
            'status_kuis' => $request->status_kuis,
        ]);

        return redirect('admin.kuis')->with('status', 'Kuis berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kuis $kuis)
    {
        $kuis = Kuis::findOrFail($kuis->id_kuis);
        $kuis->delete();

        return redirect()->back()->with('status','kuis berhasil dihapus');
    }
}
