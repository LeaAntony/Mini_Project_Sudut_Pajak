@extends('layouts.admin_main')

@section('title', 'Tambah Kuis | Sudut Pajak')
@section('content')

<x-admin_top_panel>Tambah Kuis</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-base-100 shadow-xl mx-16 overflow-visible -mt-10">
        <x-back_link_button href="{{ url()->previous() }}" class="h-10 w-24 mx-8 mt-8">Kembali</x-back_link_button>
        <div class="card-body w-full">
            <h2 class="card-title">Form Tambah Kuis</h2>
            <form action="{{ route('kuis.store') }}" method="POST">
                @csrf

                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Judul</span>
                    </div>
                    <input required type="text" name="judul_kuis" placeholder="Judul Kuis" class="input input-accent w-full" />
                    <x-input-error :messages="$errors->get('judul_kuis')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Waktu</span>
                    </div>
                    <input required type="number" name="waktu_kuis" placeholder="Waktu Kuis" class="input input-accent w-full" />
                    <span class="label-text text-sm text-red-400">*Dalam menit</span>
                    <x-input-error :messages="$errors->get('waktu_kuis')" class="mt-2" />
                </label>
                <input required type="hidden" name="jumlah_soal_kuis" placeholder="Jumlah Soal Kuis" class="input input-accent w-full" value="0" />
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Status</span>
                    </div>
                    <div>
                        <input type="radio" name="status_kuis" value="Aktif" class="radio radio-info" checked /> Aktif
                        <input type="radio" name="status_kuis" value="Non-Aktif" class="radio radio-info" /> Non-Aktif
                    </div>
                    <x-input-error :messages="$errors->get('status_kuis')" class="mt-2" />
                </label>
                <div class="text-right">
                    <x-button type="submit" class="sm:btn-sm md:btn-md lg:btn-lg mt-5">Tambah</x-button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection