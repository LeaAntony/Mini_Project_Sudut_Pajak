@extends('layouts.admin_main')

@section('title', 'Detail Pelatihan | Sudut Pajak')
@section('content')

<x-admin_top_panel>Detail Pelatihan</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-white shadow-xl mx-16 overflow-visible -mt-10">
        <x-back_link_button href="{{ url()->previous() }}" class="h-10 w-24 mx-8 mt-8">Kembali</x-back_link_button>
        <div class="card-body grid grid-cols-12 gap-1">
            <img src="{{ asset($pelatihan->gambar_pelatihan) }}" alt="gambar_pelatihan" class="col-span-3 w-64 object-cover">
            <div class="col-start-4 col-span-9 text-xl">
                <b>{{ $pelatihan->judul_pelatihan }}</b>
                <p class="text-justify">{{ $pelatihan->deskripsi_pelatihan }}</p>
            </div>
        </div>
        <div class="grid grid-cols-12">
            <div class="card bg-slate-100 w-100 col-span-4">
                <div class="card-body p-6">
                    <a href="{{ url('/admin/pelatihan/'.$pelatihan->id_pelatihan.'/pdf') }}">
                        <h2 class="text-xl font-semibold mb-4 mt-6">Akses Materi PDF</h2>
                    </a>
                    <div class="card-actions justify-end mt-4">
                        <div
                            class="bg-gradient-to-r from-teal-500 to-blue-500 h-1 w-20 py-1 px-2 absolute top-0 left-6 mt-6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-slate-100 w-100 col-span-4">
                <div class="card-body p-6">
                    <a href="{{ url('/admin/pelatihan/'.$pelatihan->id_pelatihan.'/ppt') }}">
                        <h2 class="text-xl font-semibold mb-4 mt-6">Akses Materi PPT</h2>
                    </a>
                    <div class="card-actions justify-end mt-4">
                        <div
                            class="bg-gradient-to-r from-teal-500 to-blue-500 h-1 w-20 py-1 px-2 absolute top-0 left-6 mt-6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-slate-100 w-100 col-span-4">
                <div class="card-body p-6">
                    <a href="{{ url($pelatihan->link_pelatihan) }}">
                        <h2 class="text-xl font-semibold mb-4 mt-6">Lihat Materi Video Pembelajaran</h2>
                    </a>
                    <iframe class="h-64" src="{{ $pelatihan->link_pelatihan }}" frameborder="0"
                        allowfullscreen class="block mt-7"></iframe>
                    <div class="card-actions justify-end mt-4">
                        <div
                            class="bg-gradient-to-r from-teal-500 to-blue-500 h-1 w-20 py-1 px-2 absolute top-0 left-6 mt-6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection