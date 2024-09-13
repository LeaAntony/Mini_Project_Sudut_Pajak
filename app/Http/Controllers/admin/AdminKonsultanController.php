<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Konsultan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminKonsultanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $konsultan = Konsultan::orderBy('id_konsultan', 'desc')->get();
        return view('admin.konsultan.list_konsultan', compact('user', 'konsultan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        return view('admin.konsultan.tambah_konsultan', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_konsultan' => 'required|max:255|string',
            'email_konsultan' => 'required|max:255|string',
            'nomor_konsultan' => 'required|numeric',
            'bio_konsultan' => 'required|max:9999|string',
            'foto_profil_konsultan' => 'required|mimes:png,jpg,jpeg',
            'alumnus_konsultan' => 'required|max:255|string',
            'jenjang_karir_konsultan' => 'required|max:255|string',
            'kategori_konsultan' => 'required|max:255|string',
            'status_konsultan' => 'required',
        ]);

        $filename = NULL;
        $path = NULL;

        if($request->has('foto_profil_konsultan')) {

            $file = $request->file('foto_profil_konsultan');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/konsultan/images/';
            $file->move($path, $filename);
        }

        Konsultan::create([
            'nama_konsultan' => $request->nama_konsultan,
            'email_konsultan' => $request->email_konsultan,
            'nomor_konsultan' => $request->nomor_konsultan,
            'bio_konsultan' => $request->bio_konsultan,
            'foto_profil_konsultan' => $path.$filename,
            'alumnus_konsultan' => $request->alumnus_konsultan,
            'jenjang_karir_konsultan' => $request->jenjang_karir_konsultan,
            'kategori_konsultan' => $request->kategori_konsultan,
            'status_konsultan' => $request->status_konsultan,
        ]);

        return redirect('/admin/konsultan')->with('status', 'Konsultan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Konsultan $konsultan)
    {
        $user = Auth::user();
        $konsultan = Konsultan::findOrFail($konsultan->id_konsultan);
        return view('admin.konsultan.detail_konsultan', compact('user', 'konsultan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Konsultan $konsultan)
    {
        $user = Auth::user();
        $konsultan = Konsultan::findOrFail($konsultan->id_konsultan);
        return view('admin.konsultan.edit_konsultan', compact('user', 'konsultan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Konsultan $konsultan)
    {
        $request->validate([
            'nama_konsultan' => 'required|max:255|string',
            'email_konsultan' => 'required|max:255|string',
            'nomor_konsultan' => 'required|numeric',
            'bio_konsultan' => 'required|max:9999|string',
            'foto_profil_konsultan' => 'nullable|mimes:png,jpg,jpeg',
            'alumnus_konsultan' => 'required|max:255|string',
            'jenjang_karir_konsultan' => 'required|max:255|string',
            'kategori_konsultan' => 'required|max:255|string',
            'status_konsultan' => 'required',
        ]);

        $konsultan = Konsultan::findOrFail($konsultan->id_konsultan);

        if($request->has('foto_profil_konsultan')){

            $file = $request->file('foto_profil_konsultan');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/konsultan/images/';
            $file->move($path, $filename);

            if(file::exists($konsultan->foto_profil_konsultan)){
                file::delete($konsultan->foto_profil_konsultan);
            }

            $konsultan->update([
                'nama_konsultan' => $request->nama_konsultan,
                'email_konsultan' => $request->email_konsultan,
                'nomor_konsultan' => $request->nomor_konsultan,
                'bio_konsultan' => $request->bio_konsultan,
                'foto_profil_konsultan' => $path.$filename,
                'alumnus_konsultan' => $request->alumnus_konsultan,
                'jenjang_karir_konsultan' => $request->jenjang_karir_konsultan,
                'kategori_konsultan' => $request->kategori_konsultan,
                'status_konsultan' => $request->status_konsultan,
            ]);
        }

        else $konsultan->update([
            'nama_konsultan' => $request->nama_konsultan,
            'email_konsultan' => $request->email_konsultan,
            'nomor_konsultan' => $request->nomor_konsultan,
            'bio_konsultan' => $request->bio_konsultan,
            'alumnus_konsultan' => $request->alumnus_konsultan,
            'jenjang_karir_konsultan' => $request->jenjang_karir_konsultan,
            'kategori_konsultan' => $request->kategori_konsultan,
            'status_konsultan' => $request->status_konsultan,
        ]);

        return redirect('/admin/konsultan')->with('status', 'Konsultan berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Konsultan $konsultan)
    {
        $konsultan = Konsultan::findOrFail($konsultan->id_konsultan);
        if(file::exists($konsultan->foto_profil_konsultan)){
            file::delete($konsultan->foto_profil_konsultan);
        }

        $konsultan->delete();

        return redirect()->back()->with('status','Konsultan berhasil dihapus');
    }
}
