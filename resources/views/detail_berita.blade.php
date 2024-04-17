@extends('layouts.secondary')

@section('title', 'Detail Berita')
@section('judulBreadcrumbs', 'Detail Artikel & Berita')
@section('breadcrumbs')

<li><a href="/layanan">Layanan</a></li>
<li><a href="#">Berita</a></li>
<li>Detail Artikel & Berita</li>

@endsection

@section('content')

<div class="container-md mx-auto mb-40">
    <div class="grid grid-cols-2 gap-10 ml-20 mt-24">
        <div class="card bg-base-100 shadow-xl rounded relative" style="width: 920px;">
            <img src="/images/1691555803.jpg" alt="Kuliner">
            <div class="flex items-center px-3 mt-8 text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5" viewBox="0 0 20 20" fill="currentColor">
                    <path
                        d="M5 4a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2H5zm10 12H5V8h10v8zm-3-7a1 1 0 011-1h1a1 1 0 110 2h-1a1 1 0 01-1-1zm-5 0a1 1 0 011-1h1a1 1 0 110 2H7a1 1 0 01-1-1z" />
                </svg>
                <span class="text-sm">Dec 19, 2023</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-5" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-user">
                    <path d="M12 2a5 5 0 015 5v2a5 5 0 01-10 0V7a5 5 0 015-5zM20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2">
                    </path>
                </svg>
                <span class="text-sm">Admin</span>
            </div>
            <article class="text-wrap px-8">
                <p class="card-title text-2xl font-bold text-inherit hover:text-green-500 mt-3">Amsakar Achmad, Terus Dorong Pertumbuhan UMKM Menggerakkan Ekonomi Lokal</p>
                <p class="text-base text-gray-600 mt-2">Wakil Walikota Kota Batam, Amsakar Achmad, terus memperkuat
                    upayanya dalam mendorong pertumbuhan Usaha Mikro, Kecil, dan Menengah (UMKM) sebagai salah satu
                    pilar utama dalam menggerakkan ekonomi lokal. Dalam beberapa tahun terakhir, perhatian yang lebih
                    besar diberikan kepada sektor UMKM sebagai salah satu cara untuk menciptakan lapangan kerja,
                    meningkatkan pendapatan masyarakat, dan mengurangi tingkat pengangguran. Hal ini disampaikan Amsakar
                    saat menghadiri pembukaan Anjung Asam Pedas Melaka dan Nasi Kebuli Burhani di Ruko Permata Hijau,
                    Batam Center, Senin (8/5/2023). Ia memberikan motivasi kepada para pelaku UMKM, serta menyampaikan
                    komitmen Pemerintah Kota Batam untuk menciptakan lingkungan yang kondusif bagi pertumbuhan sektor
                    UMKM. Amsakar menyadari pentingnya sektor UMKM dalam menggerakkan ekonomi lokal. Menurutnya, UMKM
                    memiliki peran strategis dalam menciptakan lapangan kerja, memperkuat daya saing daerah, serta
                    meningkatkan pendapatan dan kesejahteraan masyarakat. Dengan mendorong pertumbuhan sektor UMKM.
                    “Saya berharap dapat tercipta ekosistem yang mendukung bagi para pelaku UMKM untuk berkembang dan
                    berinovasi lebih baik,” katanya. Ia menyampaikan Pemko Batam telah menginisiasi berbagai program dan
                    kegiatan yang bertujuan untuk memperkuat sektor UMKM di Kota Batam. Salah satunya adalah pelaksanaan
                    pelatihan dan pendampingan bagi pemilik usaha UMKM agar memiliki keterampilan dan pengetahuan yang
                    lebih baik dalam mengelola usahanya. Selain itu, upaya pemberdayaan UMKM juga dilakukan melalui
                    fasilitasi akses pembiayaan, penyediaan infrastruktur yang mendukung, dan promosi produk UMKM secara
                    luas. Melalui kebijakan-kebijakan progresif yang diterapkan, Pemko Batam, ia berharap dapat
                    menciptakan ekosistem yang kondusif bagi UMKM untuk tumbuh dan berkembang. Dengan pertumbuhan UMKM
                    yang kuat, diharapkan dapat meningkatkan kontribusi sektor ini terhadap pendapatan daerah serta
                    mengurangi disparitas ekonomi antara wilayah di Kota Batam. “Kami percaya bahwa UMKM kita memiliki
                    potensi yang besar untuk bersaing di tingkat regional maupun nasional,” tutupnya.
                </p>
            </article>
        </div>
        <div class="flex justify-end">
            <div class="card w-96 h-72 bg-base-100 shadow-xl rounded relative p-8 mr-20">
                <span class="font-bold text-inherit text-2xl">Categories</span>
                <ul class="list-disc ml-5 mt-5" style="list-style-type: none;">
                    <li class="relative text-base">
                        <span class="before:block before:absolute before:w-2 before:h-2 before:rounded-full before:top-1/2 before:-left-5 before:bg-gradient-to-r before:from-blue-400 before:to-green-500 before:transform before:-translate-y-1/2"></span>
                        <a href="#">Peraturan Pajak Pada UMKM</a>
                    </li>

                    <li class="relative mt-3 text-base">
                        <span class="before:block before:absolute before:w-2 before:h-2 before:rounded-full before:top-1/2 before:-left-5 before:bg-gradient-to-r before:from-blue-400 before:to-green-500 before:transform before:-translate-y-1/2"></span>
                        <a href="#">Pajak Daerah Kota Batam</a>

                    </li>
                    <li class="relative mt-3 text-base">
                        <span class="before:block before:absolute before:w-2 before:h-2 before:rounded-full before:top-1/2 before:-left-5 before:bg-gradient-to-r before:from-blue-400 before:to-green-500 before:transform before:-translate-y-1/2"></span>
                        <a href="#">Peraturan Pajak Daerah</a>

                    </li>
                    <li class="relative mt-3 text-base">
                        <span class="before:block before:absolute before:w-2 before:h-2 before:rounded-full before:top-1/2 before:-left-5 before:bg-gradient-to-r before:from-blue-400 before:to-green-500 before:transform before:-translate-y-1/2"></span>
                        <a href="#">Peraturan Pajak Daerah</a>

                    </li>
                    <li class="relative mt-3 text-base">
                        <span class="before:block before:absolute before:w-2 before:h-2 before:rounded-full before:top-1/2 before:-left-5 before:bg-gradient-to-r before:from-blue-400 before:to-green-500 before:transform before:-translate-y-1/2"></span>
                        <a href="#">Peraturan Pajak Daerah</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection