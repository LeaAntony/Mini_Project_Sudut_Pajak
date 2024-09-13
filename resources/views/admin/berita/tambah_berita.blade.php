@extends('layouts.admin_main')

@section('title', 'Tambah Berita | Sudut Pajak')
@section('content')

<x-admin_top_panel>Tambah Berita</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-base-100 shadow-xl mx-16 overflow-visible -mt-10">
        <x-back_link_button href="{{ url()->previous() }}" class="h-10 w-24 mx-8 mt-8">Kembali</x-back_link_button>
        <div class="card-body w-full">
            <h2 class="card-title">Form Input Berita</h2>
            <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Judul</span>
                    </div>
                    <x-text-input required type="text" name="judul_berita" :value="old('judul_berita')" placeholder="Judul Berita" class="input input-accent w-full" />
                    <x-input-error :messages="$errors->get('judul_berita')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Deskripsi</span>
                    </div>
                    <textarea name="deskripsi_berita" placeholder="Deskripsi Berita" :value="old('deskripsi_berita')" class="textarea textarea-accent w-full"></textarea>
                    <x-input-error :messages="$errors->get('deskripsi_berita')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Gambar</span>
                    </div>
                    <input required type="file" name="gambar_berita" class="file-input file-input-bordered file-input-accent w-full" />
                    <x-input-error :messages="$errors->get('gambar_berita')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Kategori</span>
                    </div>
                    <select name="kategori_berita" class="select select-accent w-full">
                        <option value="Artikel" selected>Artikel</option>
                        <option value="Blog">Blog</option>
                    </select>
                    <x-input-error :messages="$errors->get('kategori_berita')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Status</span>
                    </div>
                    <div>
                        <input type="radio" name="status_berita" value="Aktif" class="radio radio-info" checked /> Aktif
                        <input type="radio" name="status_berita" value="Non-Aktif" class="radio radio-info" /> Non-Aktif
                    </div>
                    <x-input-error :messages="$errors->get('status_berita')" class="mt-2" />
                </label>
                <div class="text-right">
                    <x-button type="submit" class="sm:btn-sm md:btn-md lg:btn-lg mt-5">Tambah</x-button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection