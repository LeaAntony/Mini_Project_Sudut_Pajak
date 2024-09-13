<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BidangUsaha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminBidangUsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $bidangUsaha = BidangUsaha::orderBy('id_bidang_usaha', 'desc')->get();
        return view('admin.bidang_usaha.list_bidang_usaha', compact('user', 'bidangUsaha'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        return view('admin.bidang_usaha.tambah_bidang_usaha', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_bidang_usaha' => 'required|max:255|string',
            'deskripsi_bidang_usaha' => 'required|max:9999|string',
            'gambar_bidang_usaha' => 'required|mimes:png,jpg,jpeg',
            'status_bidang_usaha' => 'required',
        ]);

        $filename = NULL;
        $path = NULL;

        if($request->has('gambar_bidang_usaha')) {

            $file = $request->file('gambar_bidang_usaha');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/bidang_usaha/images/';
            $file->move($path, $filename);
        }

        BidangUsaha::create([
            'judul_bidang_usaha' => $request->judul_bidang_usaha,
            'deskripsi_bidang_usaha' => $request->deskripsi_bidang_usaha,
            'gambar_bidang_usaha' => $path.$filename,
            'status_bidang_usaha' => $request->status_bidang_usaha
        ]);

        return redirect('admin.bidang_usaha')->with('status', 'Bidang Usaha berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BidangUsaha $bidangUsaha)
    {
        $user = Auth::user();
        $bidangUsaha = BidangUsaha::findOrFail($bidangUsaha->id_bidang_usaha);
        return view('admin.bidang_usaha.edit_bidang_usaha', compact('user', 'bidangUsaha'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BidangUsaha $bidangUsaha)
    {
        $request->validate([
            'judul_bidang_usaha' => 'required|max:255|string',
            'deskripsi_bidang_usaha' => 'required|max:9999|string',
            'gambar_bidang_usaha' => 'nullable|mimes:png,jpg,jpeg',
            'status_bidang_usaha' => 'required',
        ]);

        $bidangUsaha = BidangUsaha::findOrFail($bidangUsaha->id_bidang_usaha);

        if($request->has('gambar_bidang_usaha')){

            $file = $request->file('gambar_bidang_usaha');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/bidang_usaha/images/';
            $file->move($path, $filename);

            if(file::exists($bidangUsaha->gambar_bidang_usaha)){
                file::delete($bidangUsaha->gambar_bidang_usaha);
            }

            $bidangUsaha->update([
                'judul_bidang_usaha' => $request->judul_bidang_usaha,
                'deskripsi_bidang_usaha' => $request->deskripsi_bidang_usaha,
                'gambar_bidang_usaha' => $path.$filename,
                'status_bidang_usaha' => $request->status_bidang_usaha
            ]);
        }

        else $bidangUsaha->update([
            'judul_bidang_usaha' => $request->judul_bidang_usaha,
            'deskripsi_bidang_usaha' => $request->deskripsi_bidang_usaha,
            'status_bidang_usaha' => $request->status_bidang_usaha
        ]);

        return redirect('/admin/bidang_usaha')->with('status', 'Bidang Usaha berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BidangUsaha $bidangUsaha)
    {
        $bidangUsaha = BidangUsaha::findOrFail($bidangUsaha->id_bidang_usaha);
        if(file::exists($bidangUsaha->gambar_bidang_usaha)){
            file::delete($bidangUsaha->gambar_bidang_usaha);
        }

        $bidangUsaha->delete();

        return redirect()->back()->with('status','Bidang Usaha berhasil dihapus');
    }
}
