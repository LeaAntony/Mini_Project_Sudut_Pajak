@extends('layouts.secondary')

@section('title', 'Pembelajaran PPh')
@section('judulBreadcrumbs', 'Pembelajaran PPh')
@section('breadcrumbs')

<li>Pembelajaran PPh</li>

@endsection
@section('content')

<link rel="stylesheet" href="/css/layanan.css">

<div class="container mx-auto">
    <div class="mt-20 mb-10 text-center text-5xl">
        <p class="text-sky-800 font-bold">Berbagai Pembelajaran PPh</p>
    </div>

    <div class="container">
        <div class="grid grid-cols-2 gap-16 mt-20">
            <a href="/pembelajaran/artikel" class="card w-auto bg-base-100 shadow-xl mx-auto mr-2 mb-8"
                style="border-radius: 5px; width: 550px; height: 260px">
                <div class="card-body">
                    <h2 class="card-title">Artikel Pembelajaran PPh</h2>
                    <p class="text-sky-500">Artikel pembelajaran PPh berisi panduan praktis dan mendalam tentang
                        konsep
                        dasar, aturan, serta strategi
                        optimalisasi pajak penghasilan untuk individu dan bisnis.
                    </p>
                </div>
            </a>
            <a href="/pembelajaran/video" class="card w-auto bg-base-100 shadow-xl mx-auto ml-2 mb-8"
                style="border-radius: 5px; width: 550px; height: 260px">
                <div class="card-body">
                    <h2 class="card-title">Video Pembelajaran PPh</h2>
                    <p class="text-sky-500">Video pembelajaran PPh memberikan panduan komprehensif tentang konsep
                        dasar,
                        aturan, dan strategi efektif untuk mengelola pajak penghasilan.
                    </p>
                </div>
            </a>
        </div>
    </div>
    <a href="/pembelajaran/infografis" class="card w-auto bg-base-100 shadow-xl mx-auto mt-10 mb-10"
        style="border-radius: 5px; width: 550px; height: 260px">
        <div class="card-body">
            <h2 class="card-title">Infografis Pembelajaran PPh</h2>
            <p class="text-sky-500">Infografis pembelajaran PPh memberikan gambaran ringkas dan informatif tentang
                konsep dasar, aturan, serta tips dan trik untuk mengelola pajak penghasilan dengan lebih efektif.
            </p>
        </div>
    </a>
    @endsection