@extends('layouts.admin_main')

@section('title', 'Tambah Pelatihan | Sudut Pajak')
@section('content')

<x-admin_top_panel>Tambah Pelatihan</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-base-100 shadow-xl mx-16 overflow-visible -mt-10">
        <x-back_link_button href="{{ url()->previous() }}" class="h-10 w-24 mx-8 mt-8">Kembali</x-back_link_button>
        <div class="card-body w-full">
            <h2 class="card-title">Form Input Pelatihan</h2>
            <form action="{{ route('pelatihan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Judul</span>
                    </div>
                    <input required type="text" name="judul_pelatihan" placeholder="Judul Pelatihan" class="input input-accent w-full" />
                    <x-input-error :messages="$errors->get('judul_pelatihan')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Deskripsi</span>
                    </div>
                    <textarea required name="deskripsi_pelatihan" placeholder="Deskripsi Pelatihan" class="textarea textarea-accent w-full"></textarea>
                    <x-input-error :messages="$errors->get('deskripsi_pelatihan')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Gambar</span>
                    </div>
                    <input required type="file" name="gambar_pelatihan" class="file-input file-input-bordered file-input-accent w-full" />
                    <x-input-error :messages="$errors->get('gambar_pelatihan')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">File PDF</span>
                    </div>
                    <input required type="file" name="pdf_pelatihan" class="file-input file-input-bordered file-input-accent w-full" />
                    <x-input-error :messages="$errors->get('pdf_pelatihan')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">File PPT</span>
                    </div>
                    <input required type="file" name="ppt_pelatihan" class="file-input file-input-bordered file-input-accent w-full" />
                    <x-input-error :messages="$errors->get('ppt_pelatihan')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Link Youtube</span>
                    </div>
                    <input required type="url" name="link_pelatihan" placeholder="Link Youtube Pelatihan" class="input input-accent w-full" />
                    <x-input-error :messages="$errors->get('link_pelatihan')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Status</span>
                    </div>
                    <div>
                        <input type="radio" name="status_pelatihan" value="Aktif" class="radio radio-info" checked /> Aktif
                        <input type="radio" name="status_pelatihan" value="Non-Aktif" class="radio radio-info" /> Non-Aktif
                    </div>
                    <x-input-error :messages="$errors->get('status_pelatihan')" class="mt-2" />
                </label>
                <div class="text-right">
                    <x-button type="submit" class="sm:btn-sm md:btn-md lg:btn-lg mt-5">Tambah</x-button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection