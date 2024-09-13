@extends('layouts.secondary')

@section('title', 'Bidang Usaha | Sudut Pajak')
@section('judulBreadcrumbs', 'Bidang Usaha')
@section('breadcrumbs')

<li><a href="/layanan">Layanan</a></li>
<li>Bidang Usaha</li>

@endsection

@section('content')

<div class="container ml-40 my-20 card bg-base-100 shadow-xl rounded relative p-8">
    <div class="text-3xl text-justify">
        <p class="font-bold text-inherit">Kategori Usaha</p>
        <p class="text-zinc-500 text-lg mt-5">Kategori usaha mengacu pada pengelompokan bisnis berdasarkan karakteristik umum, industri, atau jenis kegiatan yang mereka lakukan. Hal ini membantu dalam memahami dan mengklasifikasikan berbagai jenis usaha agar lebih mudah dianalisis, diatur, dan dibandingkan.</p>
        <p class="text-zinc-500 text-lg">Kategori usaha umumnya melibatkan parameter seperti jenis produk atau layanan yang ditawarkan, model bisnis, ukuran perusahaan, dan sektor industri.</p>
    </div>
    <div class="mt-12 mb-12 text-3xl">
        <p class="font-bold text-inherit">Jenis Jenis Kategori Usaha</p>
    </div>
    <div class="flex items-center justify-center container">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            @forelse ($bidangUsaha as $index => $data)
            <div class="card w-80 h-fit bg-base-100 shadow-xl rounded relative">
                <figure><img src="{{ asset($data->gambar_bidang_usaha) }}" alt="Kuliner" /></figure>
                <div class="card-body p-5">
                    <p class="card-title">{{ $data->judul_bidang_usaha }}</p>
                    <div class="card-actions">
                        <a href="{{ url('/bidang_usaha/'.$data->id_bidang_usaha.'/detail_bidang_usaha') }}"><button class="btn bg-blue-500 hover:bg-blue-500 text-white w-48">Lihat Selengkapnya</button></a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-3">Tidak ada Bidang Usaha yang tersedia</div>
            @endforelse
        </div>
    </div>
</div>

@endsection