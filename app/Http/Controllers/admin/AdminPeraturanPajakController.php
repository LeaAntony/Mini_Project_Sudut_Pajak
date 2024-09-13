<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PeraturanPajak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminPeraturanPajakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $peraturanPajak = PeraturanPajak::orderBy('id_peraturan_pajak', 'desc')->get();
        return view('admin.peraturan_pajak.list_peraturan_pajak', compact('user', 'peraturanPajak'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        return view('admin.peraturan_pajak.tambah_peraturan_pajak', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_peraturan_pajak' => 'required|max:255|string',
            'deskripsi_peraturan_pajak' => 'required|max:9999|string',
            'file_peraturan_pajak' => 'required|mimes:pdf',
            'kategori_peraturan_pajak' => 'required|max:255|string',
            'status_peraturan_pajak' => 'required',
        ]);

        $filename = NULL;
        $path = NULL;

        if($request->has('file_peraturan_pajak')) {

            $file = $request->file('file_peraturan_pajak');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/peraturan_pajak/pdf/';
            $file->move($path, $filename);
        }

        PeraturanPajak::create([
            'judul_peraturan_pajak' => $request->judul_peraturan_pajak,
            'deskripsi_peraturan_pajak' => $request->deskripsi_peraturan_pajak,
            'file_peraturan_pajak' => $path.$filename,
            'kategori_peraturan_pajak' => $request->kategori_peraturan_pajak,
            'status_peraturan_pajak' => $request->status_peraturan_pajak
        ]);

        return redirect('/admin/peraturan_pajak')->with('status', 'Peraturan Pajak berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PeraturanPajak $peraturanPajak)
    {
        $user = Auth::user();
        $peraturanPajak = PeraturanPajak::findOrFail($peraturanPajak->id_peraturan_pajak);
        return view('admin.peraturan_pajak.edit_peraturan_pajak', compact('user', 'peraturanPajak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PeraturanPajak $peraturanPajak)
    {
        $request->validate([
            'judul_peraturan_pajak' => 'required|max:255|string',
            'deskripsi_peraturan_pajak' => 'required|max:9999|string',
            'file_peraturan_pajak' => 'nullable|mimes:pdf',
            'kategori_peraturan_pajak' => 'required|max:255|string',
            'status_peraturan_pajak' => 'required',
        ]);

        $peraturanPajak = PeraturanPajak::findOrFail($peraturanPajak->id_peraturan_pajak);

        if($request->has('file_peraturan_pajak')){

            $file = $request->file('file_peraturan_pajak');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/peraturan_pajak/pdf/';
            $file->move($path, $filename);

            if(File::exists($peraturanPajak->file_peraturan_pajak)){
                File::delete($peraturanPajak->file_peraturan_pajak);
            }

            $peraturanPajak->update([
                'judul_peraturan_pajak' => $request->judul_peraturan_pajak,
                'deskripsi_peraturan_pajak' => $request->deskripsi_peraturan_pajak,
                'file_peraturan_pajak' => $path.$filename,
                'kategori_peraturan_pajak' => $request->kategori_peraturan_pajak,
                'status_peraturan_pajak' => $request->status_peraturan_pajak
            ]);
        }

        else $peraturanPajak->update([
            'judul_peraturan_pajak' => $request->judul_peraturan_pajak,
            'deskripsi_peraturan_pajak' => $request->deskripsi_peraturan_pajak,
            'kategori_peraturan_pajak' => $request->kategori_peraturan_pajak,
            'status_peraturan_pajak' => $request->status_peraturan_pajak
        ]);

        return redirect('/admin/peraturan_pajak')->with('status', 'Peraturan Pajak berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PeraturanPajak $peraturanPajak)
    {
        $peraturanPajak = PeraturanPajak::findOrFail($peraturanPajak->id_peraturan_pajak);
        if(file::exists($peraturanPajak->file_peraturan_pajak)){
            file::delete($peraturanPajak->file_peraturan_pajak);
        }

        $peraturanPajak->delete();

        return redirect()->back()->with('status','Peraturan Pajak berhasil dihapus');
    }
}
