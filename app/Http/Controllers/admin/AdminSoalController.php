<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Kuis;
use App\Models\Soal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminSoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Kuis $kuis)
    {
        $user = Auth::user();
        $kuis = Kuis::findOrFail($kuis->id_kuis);
        $soal = Soal::orderBy('id_soal', 'desc')->get();
        return view('admin.kuis.soal.list_soal', compact('user', 'kuis', 'soal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Kuis $kuis)
    {
        $user = Auth::user();
        $kuis = Kuis::findOrFail($kuis->id_kuis);
        return view('admin.kuis.soal.tambah_soal', compact('user', 'kuis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Kuis $kuis)
    {
        $request->validate([
            'pertanyaan_soal' => 'required|max:9999|string',
            'skor_soal' => 'required|max:255|numeric',
            'tipe_soal' => 'required|max:255|string',
        ]);

        $kuis = Kuis::findOrFail($kuis->id_kuis);

        if($request->tipe_soal === 'pilihan_ganda') {
            $request->validate([
                'opsi_a_soal' => 'required|max:255|string',
            ]);

            Soal::create([
                'pertanyaan_soal' => $request->pertanyaan_soal,
                'skor_soal' => $request->skor_soal,
                'tipe_soal' => $request->tipe_soal,
                'opsi_a_soal' => $request->opsi_a_soal,
                'opsi_b_soal' => $request->opsi_b_soal,
                'opsi_c_soal' => $request->opsi_c_soal,
                'opsi_d_soal' => $request->opsi_d_soal,
                'opsi_e_soal' => $request->opsi_e_soal,
                'jawaban_soal' => $request->jawaban_soal,
                'id_kuis' => $kuis->id_kuis,
            ]);

            $kuis->update([
                'jumlah_soal_kuis' => $kuis->jumlah_soal_kuis + 1
            ]);
        }

        else {
            Soal::create([
                'pertanyaan_soal' => $request->pertanyaan_soal,
                'skor_soal' => $request->skor_soal,
                'tipe_soal' => $request->tipe_soal,
                'id_kuis' => $kuis->id_kuis,
            ]);

            $kuis->update([
                'jumlah_soal_kuis' => $kuis->jumlah_soal_kuis + 1
            ]);
        }

        return redirect()->route('kuis.soal.index', $kuis->id_kuis)->with('status', 'Soal berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kuis $kuis, Soal $soal)
    {
        $user = Auth::user();
        $kuis = Kuis::findOrFail($kuis->id_kuis);
        $soal = Soal::findOrFail($soal->id_soal);
        return view('admin.kuis.soal.detail_soal', compact('user', 'kuis', 'soal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kuis $kuis, Soal $soal)
    {
        $user = Auth::user();
        $kuis = Kuis::findOrFail($kuis->id_kuis);
        $soal = Soal::findOrFail($soal->id_soal);
        return view('admin.kuis.soal.edit_soal', compact('user', 'kuis', 'soal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Kuis $kuis, Soal $soal)
    {
        $request->validate([
            'pertanyaan_soal' => 'required|max:9999|string',
            'skor_soal' => 'required|max:255|numeric',
            'tipe_soal' => 'required|max:255|string',
        ]);

        $kuis = Kuis::findOrFail($kuis->id_kuis);
        $soal = Soal::findOrFail($soal->id_soal);

        if($request->tipe_soal === 'pilihan_ganda') {
            $request->validate([
                'opsi_a_soal' => 'required|max:255|string',
            ]);

            $soal->update([
                'pertanyaan_soal' => $request->pertanyaan_soal,
                'skor_soal' => $request->skor_soal,
                'tipe_soal' => $request->tipe_soal,
                'opsi_a_soal' => $request->opsi_a_soal,
                'opsi_b_soal' => $request->opsi_b_soal,
                'opsi_c_soal' => $request->opsi_c_soal,
                'opsi_d_soal' => $request->opsi_d_soal,
                'opsi_e_soal' => $request->opsi_e_soal,
                'jawaban_soal' => $request->jawaban_soal,
                'id_kuis' => $kuis->id_kuis,
            ]);
        }

        else {
            $soal->update([
                'pertanyaan_soal' => $request->pertanyaan_soal,
                'skor_soal' => $request->skor_soal,
                'tipe_soal' => $request->tipe_soal,
                'id_kuis' => $kuis->id_kuis,
            ]);
        }

        return redirect('/admin/kuis')->with('status', 'Soal berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kuis $kuis, Soal $soal)
    {
        $soal = Soal::findOrFail($soal->id_soal);
        $soal->delete();

        $kuis = Kuis::findOrFail($kuis->id_kuis);
        $kuis->update([
            'jumlah_soal_kuis' => $kuis->jumlah_soal_kuis - 1
        ]);

        return redirect()->back()->with('status','Soal berhasil dihapus');
    }
}
