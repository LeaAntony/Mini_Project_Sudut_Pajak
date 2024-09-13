<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pelatihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminPelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $pelatihan = Pelatihan::orderBy('id_pelatihan', 'desc')->get();
        return view('admin.pelatihan.list_pelatihan', compact('user', 'pelatihan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        return view('admin.pelatihan.tambah_pelatihan', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_pelatihan' => 'required|max:255|string',
            'deskripsi_pelatihan' => 'required|max:9999|string',
            'gambar_pelatihan' => 'required|mimes:png,jpg,jpeg',
            'pdf_pelatihan' => 'required|mimes:pdf',
            'ppt_pelatihan' => 'required|mimes:ppt',
            'link_pelatihan' => 'required|max:255|string',
            'status_pelatihan' => 'required',
        ]);

        $filenameGambar = NULL;
        $pathGambar = NULL;
        $filenamePdf = NULL;
        $pathPdf = NULL;
        $filenamePpt = NULL;
        $pathPpt = NULL;

        if($request->has('gambar_pelatihan')) {

            $fileGambar = $request->file('gambar_pelatihan');
            $extensionGambar = $fileGambar->getClientOriginalExtension();

            $filenameGambar = time().'.'.$extensionGambar;

            $pathGambar = 'uploads/pelatihan/images/';
            $fileGambar->move($pathGambar, $filenameGambar);
        }

        if($request->has('pdf_pelatihan')) {

            $filePdf = $request->file('pdf_pelatihan');
            $extensionPdf = $filePdf->getClientOriginalExtension();

            $filenamePdf = time().'.'.$extensionPdf;

            $pathPdf = 'uploads/pelatihan/pdf/';
            $filePdf->move($pathPdf, $filenamePdf);
        }

        if($request->has('ppt_pelatihan')) {

            $filePpt = $request->file('ppt_pelatihan');
            $extensionPpt = $filePpt->getClientOriginalExtension();

            $filenamePpt = time().'.'.$extensionPpt;

            $pathPpt = 'uploads/pelatihan/ppt/';
            $filePpt->move($pathPpt, $filenamePpt);
        }

        Pelatihan::create([
            'judul_pelatihan' => $request->judul_pelatihan,
            'deskripsi_pelatihan' => $request->deskripsi_pelatihan,
            'gambar_pelatihan' => $pathGambar.$filenameGambar,
            'pdf_pelatihan' => $pathPdf.$filenamePdf,
            'ppt_pelatihan' => $pathPpt.$filenamePpt,
            'link_pelatihan' => $request->link_pelatihan,
            'status_pelatihan' => $request->status_pelatihan
        ]);

        return redirect('/admin/pelatihan')->with('status', 'Pelatihan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelatihan $pelatihan)
    {
        $user = Auth::user();
        $pelatihan = Pelatihan::findOrFail($pelatihan->id_pelatihan);
        return view('admin.pelatihan.detail_pelatihan', compact('user', 'pelatihan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelatihan $pelatihan)
    {
        $user = Auth::user();
        $pelatihan = Pelatihan::findOrFail($pelatihan->id_pelatihan);
        return view('admin.pelatihan.edit_pelatihan', compact('user', 'pelatihan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelatihan $pelatihan)
    {
        $request->validate([
            'judul_pelatihan' => 'required|max:255|string',
            'deskripsi_pelatihan' => 'required|max:9999|string',
            'gambar_pelatihan' => 'nullable|mimes:png,jpg,jpeg',
            'pdf_pelatihan' => 'nullable|mimes:pdf',
            'ppt_pelatihan' => 'nullable|mimes:ppt',
            'link_pelatihan' => 'required|max:255|string',
            'status_pelatihan' => 'required',
        ]);

        $pelatihan = Pelatihan::findOrFail($pelatihan->id_pelatihan);

        if($request->has('gambar_pelatihan')){

            $fileGambar = $request->file('gambar_pelatihan');
            $extensionGambar = $fileGambar->getClientOriginalExtension();

            $filenameGambar = time().'.'.$extensionGambar;

            $pathGambar = 'uploads/pelatihan/images/';
            $fileGambar->move($pathGambar, $filenameGambar);

            if(File::exists($pelatihan->gambar_pelatihan)){
                File::delete($pelatihan->gambar_pelatihan);
            }

            $pelatihan->update([
                'gambar_pelatihan' => $pathGambar.$filenameGambar,
            ]);
        }

        if($request->has('pdf_pelatihan')){

            $filePdf = $request->file('pdf_pelatihan');
            $extensionPdf = $filePdf->getClientOriginalExtension();

            $filenamePdf = time().'.'.$extensionPdf;

            $pathPdf = 'uploads/pelatihan/pdf/';
            $filePdf->move($pathPdf, $filenamePdf);

            if(File::exists($pelatihan->pdf_pelatihan)){
                File::delete($pelatihan->pdf_pelatihan);
            }

            $pelatihan->update([
                'pdf_pelatihan' => $pathPdf.$filenamePdf,
            ]);
        }

        if($request->has('ppt_pelatihan')){

            $filePpt = $request->file('ppt_pelatihan');
            $extensionPpt = $filePpt->getClientOriginalExtension();

            $filenamePpt = time().'.'.$extensionPpt;

            $pathPpt = 'uploads/pelatihan/ppt/';
            $filePpt->move($pathPpt, $filenamePpt);

            if(File::exists($pelatihan->ppt_pelatihan)){
                File::delete($pelatihan->ppt_pelatihan);
            }

            $pelatihan->update([
                'ppt_pelatihan' => $pathPpt.$filenamePpt,
            ]);
        }

        $pelatihan->update([
            'judul_pelatihan' => $request->judul_pelatihan,
            'deskripsi_pelatihan' => $request->deskripsi_pelatihan,
            'link_pelatihan' => $request->link_pelatihan,
            'status_pelatihan' => $request->status_pelatihan
        ]);

        return redirect('/admin/pelatihan')->with('status', 'Pelatihan berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelatihan $pelatihan)
    {
        $pelatihan = Pelatihan::findOrFail($pelatihan->id_pelatihan);
        if(file::exists($pelatihan->gambar_pelatihan)){
            file::delete($pelatihan->gambar_pelatihan);
        }
        if(file::exists($pelatihan->pdf_pelatihan)){
            file::delete($pelatihan->pdf_pelatihan);
        }
        if(file::exists($pelatihan->ppt_pelatihan)){
            file::delete($pelatihan->ppt_pelatihan);
        }

        $pelatihan->delete();

        return redirect()->back()->with('status','Pelatihan berhasil dihapus');
    }

    public function showPdf(Pelatihan $pelatihan)
    {
        $user = Auth::user();
        $pelatihan = Pelatihan::findOrFail($pelatihan->id_pelatihan);
        return view('admin.pelatihan.viewer.pdf', compact('user', 'pelatihan'));
    }

    public function showPpt(Pelatihan $pelatihan)
    {
        $user = Auth::user();
        $pelatihan = Pelatihan::findOrFail($pelatihan->id_pelatihan);
        return view('admin.pelatihan.viewer.ppt', compact('user', 'pelatihan'));
    }
}
