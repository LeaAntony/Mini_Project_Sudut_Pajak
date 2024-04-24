@extends('layouts.secondary')

@section('title', 'Layanan | Sudut Pajak')
@section('judulBreadcrumbs', 'Layanan')
@section('breadcrumbs')

<li>Layanan</li>

@endsection

@section('content')

<link rel="stylesheet" href="/css/layanan.css">

<div class="container mx-auto mb-40">
    <div class="mt-20 mb-10 text-center text-5xl">
        <p class="font-bold text-sky-800">Layanan Kami</p>
    </div>
    <div class="grid grid-cols-4 gap-16 grid-rows-2">
        <a href="/berita"
            class="card w-auto bg-base-100 shadow-xl mt-5 pt-14 pr-8 pb-36 pl-8 rounded relative duration-500 h-80 col-span-2 ">
            <p class="text-xl text-left font-bold text-bold-500">Berita</p>
            <p class="text-lg mt-7 text-justify text-sky-500">Memberikan informasi terkait peristiwa-peristiwa yang berkaitan dengan
                perpajakan.</p>
        </a>
        <a href="/bidang_usaha"
            class="col-span-2 card w-auto bg-base-100 shadow-xl mt-5 pt-14 pr-8 pb-36 pl-8 rounded relative duration-500 h-80">
            <p class="text-xl text-left font-bold text-bold-500">Bidang Usaha</p>
            <p class="text-lg mt-7 text-justify text-sky-500">Memberikan layanan edukasi perpajakan yang terkait bidang-bidang
                usaha tertentu secara spesifik untuk masing-masing bidang usaha.</p>
        </a>
        <a href="/forum_pajak"
            class="card w-auto bg-base-100 shadow-xl mt-5 pt-14 pr-8 pb-36 pl-8 rounded relative duration-500 h-80 col-span-2">
            <p class="text-xl text-left font-bold text-bold-500">Forum Pajak</p>
            <p class="text-lg mt-7 text-justify text-sky-500">Tempat untuk bertanya dan berbagi ilmu di bidang perpajakan.</p>
        </a>
        <a href="/konsultasi"
            class="card w-auto bg-base-100 shadow-xl mt-5 pt-14 pr-8 pb-36 pl-8 rounded relative duration-500 h-80 col-span-2 ">
            <p class="text-xl text-left font-bold text-bold-500">Konsultasi</p>
            <p class="text-lg mt-7 text-justify text-sky-500">Layanan konseling perpajakan yang dilaksanakan oleh expert perpajakan
                yang dimiliki oleh Sudut pajak sesuai dengan kebutuhan Wajib Pajak yang dibantu.</p>
        </a>
        <a href="/kuis"
            class="card w-auto bg-base-100 shadow-xl mt-5 pt-14 pr-8 pb-36 pl-8 rounded relative duration-500 h-80 col-span-2">
            <p class="text-xl text-left font-bold text-bold-500">Kuis</p>
            <p class="text-lg mt-7 text-justify text-sky-500">Menyediakan layanan kuis edukasi perpajakan yang bertujuan untuk
                meningkatkan pemahaman dan kesiapan dalam mengelola pajak.</p>
        </a>
        <a href="/pelatihan_sertifikasi"
            class="card w-auto bg-base-100 shadow-xl mt-5 pt-14 pr-8 pb-36 pl-8 rounded relative duration-500 h-80 col-span-2 ">
            <p class="text-xl text-left font-bold text-bold-500">Pelatihan atau Sertifikasi</p>
            <p class="text-lg mt-7 text-justify text-sky-500">Memberikan pelatihan di bidang perpajakan seperti brevet pajak dan
                pelatihan lainnya terkait perpajakan serta memberikan sertifikasi di bidang perpajakan.</p>
        </a>
        <a href="/pembelajaran"
            class="card w-auto bg-base-100 shadow-xl mt-5 pt-14 pr-8 pb-36 pl-8 rounded relative duration-500 h-80 col-span-2 col-start-2">
            <p class="text-xl text-left font-bold text-bold-500">Pembelajaran</p>
            <p class="text-lg mt-7 text-justify text-sky-500">Menyajikan layanan pendidikan perpajakan yang disesuaikan dengan
                kebutuhan spesifik dari berbagai sektor usaha untuk meningkatkan pemahaman dan kesiapan pajak.</p>
        </a>
    </div>
</div>

@endsection