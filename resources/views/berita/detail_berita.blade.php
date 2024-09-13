@extends('layouts.secondary')

@section('title', 'Detail Berita | Sudut Pajak')
@section('judulBreadcrumbs', 'Detail Artikel & Berita')
@section('breadcrumbs')

<li><a href="/layanan">Layanan</a></li>
<li><a href="/berita">Berita</a></li>
<li>Detail Artikel & Berita</li>

@endsection

@section('content')

<div class="container-md mx-auto my-20 ">
    <div class="grid grid-cols-2 gap-10 ml-20">
        <div class="card bg-base-100 shadow-xl rounded p-5 w-[1300px]">
            <p class="card-title text-2xl font-bold text-inherit my-2">{{ $berita->judul_berita }}</p>
            <img src="{{ asset($berita->gambar_berita) }}" alt="gambar_berita" class="object-cover h-[700px] rounded">
            <div class="flex items-center mt-8 text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path
                        d="M5 4a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2H5zm10 12H5V8h10v8zm-3-7a1 1 0 011-1h1a1 1 0 110 2h-1a1 1 0 01-1-1zm-5 0a1 1 0 011-1h1a1 1 0 110 2H7a1 1 0 01-1-1z" />
                </svg>
                <span class="text-sm mr-5">{{ $berita->created_at->toDateString() }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-user">
                    <path d="M12 2a5 5 0 015 5v2a5 5 0 01-10 0V7a5 5 0 015-5zM20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2">
                    </path>
                </svg>
                <span class="text-sm">Admin</span>
            </div>
            <article class="text-wrap mt-4">
                <p class="text-base text-gray-600 mt-2 text-justify">{{ $berita->deskripsi_berita }}</p>
            </article>
        </div>
    </div>
</div>

@endsection