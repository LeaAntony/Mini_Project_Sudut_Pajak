<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pembelajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminPembelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $pembelajaran = Pembelajaran::orderBy('id_pembelajaran', 'desc')->get();
        return view('admin.pembelajaran.list_pembelajaran', compact('user', 'pembelajaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        return view('admin.pembelajaran.tambah_pembelajaran', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_pembelajaran' => 'required|max:255|string',
            'tipe_pembelajaran' => 'required|max:255|string',
            'gambar_pembelajaran' => 'required|mimes:png,jpg,jpeg',
            'isi_artikel_pembelajaran' => 'nullable|max:9999|string',
            'link_video_pembelajaran' => 'nullable|max:255|string',
            'status_pembelajaran' => 'required',
        ]);

        $filename = NULL;
        $path = NULL;

        if($request->has('gambar_pembelajaran')) {

            $file = $request->file('gambar_pembelajaran');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/pembelajaran/images/';
            $file->move($path, $filename);
        }

        Pembelajaran::create([
            'judul_pembelajaran' => $request->judul_pembelajaran,
            'tipe_pembelajaran' => $request->tipe_pembelajaran,
            'gambar_pembelajaran' => $path.$filename,
            'isi_artikel_pembelajaran' => $request->isi_artikel_pembelajaran,
            'link_video_pembelajaran' => $request->link_video_pembelajaran,
            'status_pembelajaran' => $request->status_pembelajaran
        ]);

        return redirect('/admin/pembelajaran')->with('status', 'Pembelajaran berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pembelajaran $pembelajaran)
    {
        $user = Auth::user();
        $pembelajaran = Pembelajaran::findOrFail($pembelajaran->id_pembelajaran);
        return view('admin.pembelajaran.detail_pembelajaran', compact('user', 'pembelajaran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembelajaran $pembelajaran)
    {
        $user = Auth::user();
        $pembelajaran = Pembelajaran::findOrFail($pembelajaran->id_pembelajaran);
        return view('admin.pembelajaran.edit_pembelajaran', compact('user', 'pembelajaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pembelajaran $pembelajaran)
    {
        $request->validate([
            'judul_pembelajaran' => 'required|max:255|string',
            'tipe_pembelajaran' => 'required|max:255|string',
            'gambar_pembelajaran' => 'nullable|mimes:png,jpg,jpeg',
            'isi_artikel_pembelajaran' => 'nullable|max:9999|string',
            'link_video_pembelajaran' => 'nullable|max:255|string',
            'status_pembelajaran' => 'required',
        ]);

        $pembelajaran = Pembelajaran::findOrFail($pembelajaran->id_pembelajaran);

        if($request->has('gambar_pembelajaran')){

            $file = $request->file('gambar_pembelajaran');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/pembelajaran/images/';
            $file->move($path, $filename);

            if(File::exists($pembelajaran->gambar_pembelajaran)){
                File::delete($pembelajaran->gambar_pembelajaran);
            }

            $pembelajaran->update([
                'gambar_pembelajaran' => $path.$filename,
            ]);
        }

        $pembelajaran->update([
            'judul_pembelajaran' => $request->judul_pembelajaran,
            'tipe_pembelajaran' => $request->tipe_pembelajaran,
            'isi_artikel_pembelajaran' => $request->isi_artikel_pembelajaran,
            'link_video_pembelajaran' => $request->link_video_pembelajaran,
            'status_pembelajaran' => $request->status_pembelajaran
        ]);

        return redirect('/admin/pembelajaran')->with('status', 'Pembelajaran berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembelajaran $pembelajaran)
    {
        $pembelajaran = Pembelajaran::findOrFail($pembelajaran->id_pembelajaran);
        if(file::exists($pembelajaran->gambar_pembelajaran)){
            file::delete($pembelajaran->gambar_pembelajaran);
        }

        $pembelajaran->delete();

        return redirect()->back()->with('status','Pembelajaran berhasil dihapus');
    }
}
