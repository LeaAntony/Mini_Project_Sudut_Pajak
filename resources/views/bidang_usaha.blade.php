@extends('layouts.secondary')

@section('title', 'Kategori Perbidang Usaha')
@section('judulBreadcrumbs', 'Kategori Perbidang Usaha')
@section('breadcrumbs')

<li>Kategori Perbidang Usaha</li>

@endsection

@section('content')

<div class="container mx-16 mb-28">
    <div class="mt-24 mb-10 text-3xl">
        <p class="font-bold text-inherit">Kategori Usaha</p>
        <p class="text-zinc-500 text-lg mt-5">Kategori usaha mengacu pada pengelompokan bisnis berdasarkan karakteristik umum, industri, atau jenis kegiatan yang mereka lakukan. Hal ini membantu dalam memahami dan mengklasifikasikan berbagai jenis usaha agar lebih mudah dianalisis, diatur, dan dibandingkan.</p>
        <p class="text-zinc-500 text-lg">Kategori usaha umumnya melibatkan parameter seperti jenis produk atau layanan yang ditawarkan, model bisnis, ukuran perusahaan, dan sektor industri.</p>
    </div>
    <div class="mt-12 mb-12 text-3xl">
        <p class="font-bold text-inherit">Jenis Jenis Kategori Usaha</p>
    </div>
    <div class="flex items-center justify-center container mx-9">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            <div class="card w-80 h-fit bg-base-100 shadow-xl rounded relative">
                <figure><img src="images/kuliner.jpg" alt="Kuliner" /></figure>
                <div class="card-body p-5">
                    <p class="card-title">Bidang Kuliner</p>
                    <div class="card-actions">
                        <a href="/kuliner"><button class="btn bg-blue-500 text-white w-48">Lihat Selengkapnya</button></a>
                    </div>
                </div>
            </div>
            <div class="card w-80 h-fit bg-base-100 shadow-xl rounded relative">
                <figure><img src="images/pesyen.jpg" alt="Fashion" /></figure>
                <div class="card-body p-5">
                    <p class="card-title">Bidang Fashion</p>
                    <div class="card-actions">
                    <a href="/fashion"><button class="btn bg-blue-500 text-white w-48">Lihat Selengkapnya</button></a>
                    </div>
                </div>
            </div>
            <div class="card w-80 h-fit bg-base-100 shadow-xl rounded relative">
                <figure><img src="images/mobil.jpg" alt="Mobil" /></figure>
                <div class="card-body p-5">
                    <p class="card-title">Bidang Otomotif</p>
                    <div class="card-actions">
                    <a href="/otomotif"><button class="btn bg-blue-500 text-white w-48">Lihat Selengkapnya</button></a>
                    </div>
                </div>
            </div>
            <div class="card w-80 h-fit bg-base-100 shadow-xl rounded relative">
                <figure><img src="images/agri.jpg" alt="Agribisnis" /></figure>
                <div class="card-body p-5">
                    <p class="card-title">Bidang Agribisnis</p>
                    <div class="card-actions">
                    <a href="/agribisnis"><button class="btn bg-blue-500 text-white w-48">Lihat Selengkapnya</button></a>
                    </div>
                </div>
            </div>
            <div class="card w-80 h-fit bg-base-100 shadow-xl rounded relative">
                <figure><img src="images/kosmetik.jpg" alt="Kosmetik" /></figure>
                <div class="card-body p-5">
                    <p class="card-title">Bidang Kosmetik</p>
                    <div class="card-actions">
                    <a href="/kosmetik"><button class="btn bg-blue-500 text-white w-48">Lihat Selengkapnya</button></a>
                    </div>
                </div>
            </div>
            <div class="card w-80 h-fit bg-base-100 shadow-xl rounded relative">
                <figure><img src="images/event-organizer.jpg" alt="Event" /></figure>
                <div class="card-body p-5">
                    <p class="card-title">Bidang Event Organizer</p>
                    <div class="card-actions">
                    <a href="/event"><button class="btn bg-blue-500 text-white w-48">Lihat Selengkapnya</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection