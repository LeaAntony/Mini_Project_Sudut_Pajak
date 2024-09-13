@extends('layouts.admin_main')

@section('title', 'Tambah Bidang Bidang Usaha | Sudut Pajak')
@section('content')

<x-admin_top_panel>Tambah Bidang Usaha</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-base-100 shadow-xl mx-16 overflow-visible -mt-10">
        <x-back_link_button href="{{ url()->previous() }}" class="h-10 w-24 mx-8 mt-8">Kembali</x-back_link_button>
        <div class="card-body w-full">
            <h2 class="card-title">Form Input Bidang Usaha</h2>
            <form action="{{ route('bidang_usaha.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Judul</span>
                    </div>
                    <input required type="text" name="judul_bidang_usaha" :value="old('judul_bidang_usaha')" placeholder="Judul Bidang Usaha" class="input input-accent w-full" />
                    <x-input-error :messages="$errors->get('judul_bidang_usaha')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Deskripsi</span>
                    </div>
                    <textarea required name="deskripsi_bidang_usaha" :value="old('deskripsi_bidang_usaha')" placeholder="Deskripsi Bidang Usaha" class="textarea textarea-accent w-full"></textarea>
                    <x-input-error :messages="$errors->get('deskripsi_bidang_usaha')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Gambar</span>
                    </div>
                    <input required type="file" name="gambar_bidang_usaha" class="file-input file-input-bordered file-input-accent w-full" />
                    <x-input-error :messages="$errors->get('gambar_bidang_usaha')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Status</span>
                    </div>
                    <div>
                        <input type="radio" name="status_bidang_usaha" value="Aktif" class="radio radio-info" checked /> Aktif
                        <input type="radio" name="status_bidang_usaha" value="Non-Aktif" class="radio radio-info" /> Non-Aktif
                    </div>
                    <x-input-error :messages="$errors->get('status_bidang_usaha')" class="mt-2" />
                </label>
                <div class="text-right">
                    <x-button type="submit" class="sm:btn-sm md:btn-md lg:btn-lg mt-5">Tambah</x-button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection