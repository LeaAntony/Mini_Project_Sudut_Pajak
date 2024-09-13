@extends('layouts.admin_main')

@section('title', 'Edit Pajak | Sudut Pajak')
@section('content')

<x-admin_top_panel>Edit Pajak</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-base-100 shadow-xl mx-16 overflow-visible -mt-10">
        <x-back_link_button href="{{ url()->previous() }}" class="h-10 w-24 mx-8 mt-8">Kembali</x-back_link_button>
        <div class="card-body w-full">
            <h2 class="card-title">Form Edit Pajak</h2>
            <form action="{{ route('peraturan_pajak.update', $peraturanPajak->id_peraturan_pajak) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Judul</span>
                    </div>
                    <input required type="text" name="judul_peraturan_pajak" placeholder="Judul Peraturan Pajak" class="input input-accent w-full" value="{{ $peraturanPajak->judul_peraturan_pajak }}" />
                    <x-input-error :messages="$errors->get('judul_peraturan_pajak')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Deskripsi</span>
                    </div>
                    <textarea required name="deskripsi_peraturan_pajak" placeholder="Deskripsi Peraturan Pajak" class="textarea textarea-accent w-full">{{ $peraturanPajak->deskripsi_peraturan_pajak }}</textarea>
                    <x-input-error :messages="$errors->get('deskripsi_peraturan_pajak')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">File PDF</span>
                    </div>
                    <input type="file" name="file_peraturan_pajak" class="file-input file-input-bordered file-input-accent w-full" />
                    <x-input-error :messages="$errors->get('file_peraturan_pajak')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Kategori</span>
                    </div>
                    <select name="kategori_peraturan_pajak" class="select select-accent w-full">
                        <option value="Pusat" {{ $peraturanPajak->kategori_peraturan_pajak == "Pusat" ? 'selected':'' }}>Peraturan Pajak Pusat</option>
                        <option value="Daerah" {{ $peraturanPajak->kategori_peraturan_pajak == "Daerah" ? 'selected':'' }}>Peraturan Pajak Daerah</option>
                    </select>
                    <x-input-error :messages="$errors->get('kategori_peraturan_pajak')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Status</span>
                    </div>
                    <div>
                        <input type="radio" name="status_peraturan_pajak" value="Aktif" class="radio radio-info" {{ $peraturanPajak->status_peraturan_pajak == "Aktif" ? 'checked':'' }} /> Aktif
                        <input type="radio" name="status_peraturan_pajak" value="Non-Aktif" class="radio radio-info" {{ $peraturanPajak->status_peraturan_pajak == "Non-Aktif" ? 'checked':'' }} /> Non-Aktif
                    </div>
                    <x-input-error :messages="$errors->get('status_peraturan_pajak')" class="mt-2" />
                </label>
                <div class="text-right">
                    <x-button type="submit" class="sm:btn-sm md:btn-md lg:btn-lg mt-5">Edit</x-button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection