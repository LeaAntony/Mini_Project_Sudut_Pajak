@extends('layouts.admin_main')

@section('title', 'Edit Pelatihan | Sudut Pajak')
@section('content')

<x-admin_top_panel>Edit Pelatihan</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-base-100 shadow-xl mx-16 overflow-visible -mt-10">
        <x-back_link_button href="{{ url()->previous() }}" class="h-10 w-24 mx-8 mt-8">Kembali</x-back_link_button>
        <div class="card-body w-full">
            <h2 class="card-title">Form Edit Pelatihan</h2>
            <form action="{{ route('pelatihan.update', $pelatihan->id_pelatihan) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Judul</span>
                    </div>
                    <input required type="text" name="judul_pelatihan" placeholder="Judul Pelatihan" class="input input-accent w-full" value="{{ $pelatihan->judul_pelatihan }}" />
                    <x-input-error :messages="$errors->get('judul_pelatihan')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Deskripsi</span>
                    </div>
                    <textarea required name="deskripsi_pelatihan" placeholder="Deskripsi Pelatihan" class="textarea textarea-accent w-full">{{ $pelatihan->deskripsi_pelatihan }}</textarea>
                    <x-input-error :messages="$errors->get('deskripsi_pelatihan')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Gambar</span>
                    </div>
                    <input type="file" name="gambar_pelatihan" class="file-input file-input-bordered file-input-accent w-full" />
                    <x-input-error :messages="$errors->get('gambar_pelatihan')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">File PDF</span>
                    </div>
                    <input type="file" name="pdf_pelatihan" class="file-input file-input-bordered file-input-accent w-full" />
                    <x-input-error :messages="$errors->get('pdf_pelatihan')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">File PPT</span>
                    </div>
                    <input type="file" name="ppt_pelatihan" class="file-input file-input-bordered file-input-accent w-full" />
                    <x-input-error :messages="$errors->get('ppt_pelatihan')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Link Youtube</span>
                    </div>
                    <input required type="url" name="link_pelatihan" placeholder="Link Youtube Pelatihan" class="input input-accent w-full" value="{{ $pelatihan->link_pelatihan }}" />
                    <x-input-error :messages="$errors->get('link_pelatihan')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Status</span>
                    </div>
                    <div>
                        <input type="radio" name="status_pelatihan" value="Aktif" class="radio radio-info" {{ $pelatihan->status_pelatihan == "Aktif" ? 'checked':'' }} /> Aktif
                        <input type="radio" name="status_pelatihan" value="Non-Aktif" class="radio radio-info" {{ $pelatihan->status_pelatihan == "Non-Aktif" ? 'checked':'' }} /> Non-Aktif
                    </div>
                    <x-input-error :messages="$errors->get('status_pelatihan')" class="mt-2" />
                </label>
                <div class="text-right">
                    <x-button type="submit" class="sm:btn-sm md:btn-md lg:btn-lg mt-5">Edit</x-button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection