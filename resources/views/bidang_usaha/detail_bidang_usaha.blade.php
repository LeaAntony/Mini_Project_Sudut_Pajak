@extends('layouts.secondary')

@section('title', 'Kategori Perbidang Usaha | Sudut Pajak')
@section('judulBreadcrumbs', "$bidangUsaha->judul_bidang_usaha")
@section('breadcrumbs')

<li><a href="/layanan">Layanan</a></li>
<li><a href="/bidang_usaha">Bidang Usaha</a></li>
<li>{{ $bidangUsaha->judul_bidang_usaha }}</li>

@endsection

@section('content')

<div class="container ml-40 my-20 card w-auto bg-base-100 shadow-xl rounded relative p-8">
    <p class="font-bold text-inherit text-3xl">{{ $bidangUsaha->judul_bidang_usaha }}</p>
    <p class="text-zinc-500 text-lg mt-5 text-justify">{{ $bidangUsaha->deskripsi_bidang_usaha }}</p>
</div>

@endsection