<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $berita = Berita::orderBy('id_berita', 'desc')->get();
        return view('admin.berita.list_berita', compact('user', 'berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        return view('admin.berita.tambah_berita', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_berita' => 'required|max:255|string',
            'deskripsi_berita' => 'required|max:9999|string',
            'gambar_berita' => 'required|mimes:png,jpg,jpeg',
            'kategori_berita' => 'required',
            'status_berita' => 'required',
        ]);

        $filename = NULL;
        $path = NULL;

        if($request->has('gambar_berita')) {

            $file = $request->file('gambar_berita');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/berita/images/';
            $file->move($path, $filename);
        }

        Berita::create([
            'judul_berita' => $request->judul_berita,
            'deskripsi_berita' => $request->deskripsi_berita,
            'gambar_berita' => $path.$filename,
            'kategori_berita' => $request->kategori_berita,
            'status_berita' => $request->status_berita,
        ]);

        return redirect('/admin/berita')->with('status', 'Berita berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        $user = Auth::user();
        $berita = Berita::findOrFail($berita->id_berita);
        return view('admin.berita.edit_berita', compact('user', 'berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'judul_berita' => 'required|max:255|string',
            'deskripsi_berita' => 'required|max:9999|string',
            'gambar_berita' => 'nullable|mimes:png,jpg,jpeg',
            'kategori_berita' => 'required',
            'status_berita' => 'required',
        ]);

        $berita = Berita::findOrFail($berita->id_berita);

        if($request->has('gambar_berita')){

            $file = $request->file('gambar_berita');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/berita/images/';
            $file->move($path, $filename);

            if(File::exists($berita->gambar_berita)){
                File::delete($berita->gambar_berita);
            }

            $berita->update([
                'judul_berita' => $request->judul_berita,
                'deskripsi_berita' => $request->deskripsi_berita,
                'gambar_berita' => $path.$filename,
                'kategori_berita' => $request->kategori_berita,
                'status_berita' => $request->status_berita,
            ]);
        }

        else $berita->update([
            'judul_berita' => $request->judul_berita,
            'deskripsi_berita' => $request->deskripsi_berita,
            'kategori_berita' => $request->kategori_berita,
            'status_berita' => $request->status_berita,
        ]);

        return redirect('/admin/berita')->with('status', 'Berita berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        $berita = Berita::findOrFail($berita->id_berita);
        if(File::exists($berita->gambar_berita)){
            File::delete($berita->gambar_berita);
        }

        $berita->delete();

        return redirect()->back()->with('status','Berita berhasil dihapus');
    }
}
