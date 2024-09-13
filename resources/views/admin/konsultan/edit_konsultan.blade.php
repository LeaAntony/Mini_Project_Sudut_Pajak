@extends('layouts.admin_main')

@section('title', 'Edit Konsultan | Sudut Konsultan')
@section('content')

<x-admin_top_panel>Edit Konsultan</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-base-100 shadow-xl mx-16 overflow-visible -mt-10">
        <x-back_link_button href="{{ url()->previous() }}" class="h-10 w-24 mx-8 mt-8">Kembali</x-back_link_button>
        <div class="card-body w-full">
            <h2 class="card-title">Form Edit Konsultan</h2>
            <form action="{{ route('konsultan.update', $konsultan->id_konsultan) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Nama</span>
                    </div>
                    <input required type="text" name="nama_konsultan" placeholder="Nama Konsultan" class="input input-accent w-full" value="{{ $konsultan->nama_konsultan }}" />
                    <x-input-error :messages="$errors->get('nama_konsultan')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Email</span>
                    </div>
                    <input required type="email" name="email_konsultan" placeholder="Email Konsultan" class="input input-accent w-full" value="{{ $konsultan->email_konsultan }}" />
                    <x-input-error :messages="$errors->get('email_konsultan')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Nomor</span>
                    </div>
                    <input required type="tel" name="nomor_konsultan" placeholder="Nomor Konsultan" class="input input-accent w-full" value="{{ $konsultan->nomor_konsultan }}" />
                    <x-input-error :messages="$errors->get('nomor_konsultan')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Bio</span>
                    </div>
                    <textarea required name="bio_konsultan" placeholder="Bio Konsultan" class="textarea textarea-accent w-full">{{ $konsultan->bio_konsultan }}</textarea>
                    <x-input-error :messages="$errors->get('bio_konsultan')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Foto Profil</span>
                    </div>
                    <input type="file" name="foto_profil_konsultan" class="file-input file-input-bordered file-input-accent w-full" value="{{ $konsultan->foto_profil_konsultan }}" />
                    <x-input-error :messages="$errors->get('foto_profil_konsultan')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Alumnus</span>
                    </div>
                    <input required type="text" name="alumnus_konsultan" placeholder="Alumnus Konsultan" class="input input-accent w-full" value="{{ $konsultan->alumnus_konsultan }}" />
                    <x-input-error :messages="$errors->get('alumnus_konsultan')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Jenjang Karir</span>
                    </div>
                    <input required type="text" name="jenjang_karir_konsultan" placeholder="Jenjang Karir Konsultan" class="input input-accent w-full" value="{{ $konsultan->jenjang_karir_konsultan }}" />
                    <x-input-error :messages="$errors->get('jenjang_karir_konsultan')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Kategori</span>
                    </div>
                    <select name="kategori_konsultan" class="select select-accent w-full">
                        <option value="PPh Badan" {{ $konsultan->kategori_konsultan == "PPh Badan" ? 'selected':'' }}>PPh Badan</option>
                        <option value="PPh Tahunan Orang Pribadi" {{ $konsultan->kategori_konsultan == "PPh Tahunan Orang Pribadi" ? 'selected':'' }} >PPh Tahunan Orang Pribadi</option>
                        <option value="PPh Pasal 21" {{ $konsultan->kategori_konsultan == "PPh Pasal 21" ? 'selected':'' }} >PPh Pasal 21</option>
                        <option value="PPh Pasal 22 & 23" {{ $konsultan->kategori_konsultan == "PPh Pasal 22 & 23" ? 'selected':'' }} >PPh Pasal 22 & 23</option>
                        <option value="PPh Pasal 25" {{ $konsultan->kategori_konsultan == "PPh Pasal 25" ? 'selected':'' }} >PPh Pasal 25</option>
                    </select>
                    <x-input-error :messages="$errors->get('kategori_konsultan')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Status</span>
                    </div>
                    <div>
                        <input type="radio" name="status_konsultan" value="aktif" class="radio radio-info" {{ $konsultan->status_konsultan == "Aktif" ? 'checked':'' }} /> Aktif
                        <input type="radio" name="status_konsultan" value="Non-Aktif" class="radio radio-info" {{ $konsultan->status_konsultan == "Non-Aktif" ? 'checked':'' }} /> Non-Aktif
                    </div>
                    <x-input-error :messages="$errors->get('status_konsultan')" class="mt-2" />
                </label>
                <div class="text-right">
                    <x-button type="submit" class="sm:btn-sm md:btn-md lg:btn-lg mt-5">Edit</x-button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection