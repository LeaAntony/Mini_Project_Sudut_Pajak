@extends('layouts.admin_main')

@section('title', 'Edit Kuis | Sudut Pajak')
@section('content')

<x-admin_top_panel>Edit Kuis</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-base-100 shadow-xl mx-16 overflow-visible -mt-10">
        <x-back_link_button href="{{ url()->previous() }}" class="h-10 w-24 mx-8 mt-8">Kembali</x-back_link_button>
        <div class="card-body w-full">
            <h2 class="card-title">Form Edit Kuis</h2>
            <form action="{{ route('kuis.update', $kuis->id_kuis) }}" method="POST">
                @csrf
                @method('PUT')

                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Judul</span>
                    </div>
                    <input required type="text" name="judul_kuis" placeholder="Judul Kuis" class="input input-accent w-full" value="{{ $kuis->judul_kuis }}" />
                    <x-input-error :messages="$errors->get('judul_kuis')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Waktu</span>
                    </div>
                    <input required type="number" name="waktu_kuis" placeholder="Waktu Kuis" class="input input-accent w-full" value="{{ $kuis->waktu_kuis }}" />
                    <x-input-error :messages="$errors->get('waktu_kuis')" class="mt-2" />
                </label>
                    <input required type="hidden" name="jumlah_soal_kuis" placeholder="Jumlah Soal Kuis" class="input input-accent w-full" value="{{ $kuis->jumlah_soal_kuis }}" />
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Status</span>
                    </div>
                    <div>
                        <input type="radio" name="status_kuis" value="Aktif" class="radio radio-info" {{ $kuis->status_kuis == "Aktif" ? 'checked':'' }} /> Aktif
                        <input type="radio" name="status_kuis" value="Non-Aktif" class="radio radio-info" {{ $kuis->status_kuis == "Non-Aktif" ? 'checked':'' }} /> Non-Aktif
                    </div>
                    <x-input-error :messages="$errors->get('status_kuis')" class="mt-2" />
                </label>
                <x-button type="submit" class="sm:btn-sm md:btn-md lg:btn-lg mt-5">Edit</x-button>
            </form>
        </div>
    </div>
</div>

@endsection