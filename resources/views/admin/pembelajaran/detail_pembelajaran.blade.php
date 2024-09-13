@extends('layouts.admin_main')

@section('title', 'Detail pembelajaran | Sudut Pajak')
@section('content')

<x-admin_top_panel>Detail pembelajaran</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-white shadow-xl mx-16 overflow-visible -mt-10">
        <x-back_link_button href="{{ url()->previous() }}" class="h-10 w-24 mx-8 mt-8">Kembali</x-back_link_button>
        <div class="card-body grid grid-cols-12 gap-1">
            <img src="{{ asset($pembelajaran->gambar_pembelajaran) }}" alt="gambar_pembelajaran" class="col-span-3 w-64 object-cover">
            <div class="col-start-4 col-span-9 text-xl">
                <b>{{ $pembelajaran->judul_pembelajaran }}</b>
                <p class="text-justify">{{ $pembelajaran->isi_artikel_pembelajaran }}</p>
            </div>
        </div>
    </div>
</div>

@endsection