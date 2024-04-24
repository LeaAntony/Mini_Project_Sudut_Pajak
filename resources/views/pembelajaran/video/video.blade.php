@extends('layouts.secondary')

@section('title', 'Video Pembelajaran PPh | Sudut Pajak')
@section('judulBreadcrumbs', ' Video Pembelajaran PPh')
@section('breadcrumbs')

<li><a href="/layanan">Layanan</a></li>
<li><a href="/pembelajaran">Pembelajaran PPh</a></li>
<li>Video Pembelajaran PPh</li>

@endsection


@section('content')
</br>

<style>
    .card-title:hover {
        text-decoration: underline;
        cursor: pointer;
    }

    .card-wrapper {
        padding: 50px;
    }

    .card {
        margin-bottom: 20px;
    }
</style>
<!-- Menu Pencarian -->
<div class="flex flex-wrap -mx-4 card-wrapper">
    <div class="mx-auto w-full max-w-lg mb-4 justify-self-center">
        <!-- Formulir pencarian dengan ujung bulat -->
        <form action="#" method="GET"
            class="flex items-center bg-gradient-to-b from-blue-500 to-green-500 border border-gray-200 rounded-full shadow-sm">
            <input type="text" name="search" placeholder="Cari..."
                class="w-full pl-4 pr-12 py-3 focus:outline-none rounded-l-full text-lg">
            <!-- Meningkatkan tinggi, lebar, dan ukuran teks -->
            <button type="submit"
                class="text-white px-6 py-3 hover:bg-blue-600 focus:outline-none rounded-r-full text-lg">Cari</button>
            <!-- Meningkatkan tinggi, lebar, dan ukuran teks -->
        </form>
    </div>
</div>

<div class="flex flex-wrap -mx-4 card-wrapper">
    <div class="flex flex-wrap -mx-4">
        <!-- Card 1 -->
        <div class="card bg-base-100 shadow-xl relative max-w-xs mx-auto mb-4 ml-4"
            onclick="window.location.href='/pembelajaran/video/detail_video'">
            <!-- Embedded Image -->
            <div style="width: 100%; overflow: hidden;">
                <img src="/images/pembelajaran/tumbanil1.jpg" style="width: 100%; height: auto;" alt="Thumbnail Image">
            </div>
            <div class="card-body">
                <!-- Menambahkan kelas card-title untuk menargetkan efek hover -->
                <h2 class="card-title text-lg font-medium"><strong>Tips dan Trik! Cara Menghitung Pajak Penghasilan
                        (PPh) dengan Mudah</strong></h2>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="card bg-base-100 shadow-xl relative max-w-xs mx-auto mb-4 ml-4"
            onclick="window.location.href='/pembelajaran/video/detail_video'">
            <!-- Embedded Image -->
            <div style="width: 100%; overflow: hidden;">
                <img src="/images/pembelajaran/tumbanil2.jpg" style="width: 100%; height: auto;" alt="Thumbnail Image">
            </div>
            <div class="card-body">
                <h2 class="card-title text-lg font-medium"><strong>Pengantar Hukum Pajak 7. Timbul dan Hilangnya Utang
                        Pajak</strong></h2>
            </div>
        </div>

        <!--card3-->
        <div class="card bg-base-100 shadow-xl relative max-w-xs mx-auto mb-4 ml-4"
            onclick="window.location.href='/pembelajaran/video/detail_video'">
            <!-- Embedded Image -->
            <div style="width: 100%; overflow: hidden;">
                <img src="/images/pembelajaran/tumbanil3.jpg" style="width: 100%; height: auto;" alt="Thumbnail Image">
            </div>
            <div class="card-body">
                <h2 class="card-title text-lg font-medium"><strong>PPh Pasal 21 TER atas Bonus dan THR (New 2024). Simak
                        Videonya!</strong></h2>
            </div>
        </div>
        <!-- Card 4 -->
        <div class="card bg-base-100 shadow-xl relative max-w-xs mx-auto mb-4 ml-4"
            onclick="window.location.href='/pembelajaran/video/detail_video'">
            <div style="width: 100%; overflow: hidden;">
                <img src="/images/pembelajaran/tumbanil4.jpg" style="width: 100%; height: auto;" alt="Thumbnail Image">
            </div>
            <div class="card-body">
                <h2 class="card-title text-lg font-medium"><strong>Cara Hitung dan Input PPh 21 atas THR di eBupot 21
                        tahun 2024</strong></h2>
            </div>
        </div>
        <!-- Card 5 -->
        <div class="card bg-base-100 shadow-xl relative max-w-xs mx-auto mb-4 ml-4"
            onclick="window.location.href='/pembelajaran/video/detail_video'">
            <div style="width: 100%; overflow: hidden;">
                <img src="/images/pembelajaran/tumbanil5.jpg" style="width: 100%; height: auto;" alt="Thumbnail Image">
            </div>
            <div class="card-body">
                <h2 class="card-title text-lg font-medium"><strong>PPh Pasal 21 Pengertian dan tarifnya Simak Vdeo
                        berikut untuk memahami lebih lanjut</strong></h2>
            </div>
        </div>
        <!-- Card 6 -->
        <div class="card bg-base-100 shadow-xl relative max-w-xs mx-auto mb-4 ml-4"
            onclick="window.location.href='/pembelajaran/video/detail_video'">
            <div style="width: 100%; overflow: hidden;">
                <img src="/images/pembelajaran/tumbanil6.jpg" style="width: 100%; height: auto;" alt="Thumbnail Image">
            </div>
            <div class="card-body">
                <h2 class="card-title text-lg font-medium"><strong>cara hitung pph 21 pegawai tetap Simak video Berkut
                        untuk mengetahui lebih lanjut</strong></h2>
            </div>
        </div>
        <!-- Card 7 -->
        <div class="card bg-base-100 shadow-xl relative max-w-xs mx-auto mb-4 ml-4"
            onclick="window.location.href='/pembelajaran/video/detail_video'">
            <div style="width: 100%; overflow: hidden;">
                <img src="/images/pembelajaran/tumbanil7.jpg" style="width: 100%; height: auto;" alt="Thumbnail Image">
            </div>
            <div class="card-body">
                <h2 class="card-title text-lg font-medium"><strong>Terbaru! Simulasi Penghitungan Tarif Efektif
                        Rata-rata (TER) PPh Pasal 21 tahun 2024</strong></h2>
            </div>
        </div>
        <!-- Card 8 -->
        <div class="card bg-base-100 shadow-xl relative max-w-xs mx-auto mb-4 ml-4"
            onclick="window.location.href='/pembelajaran/video/detail_video'">
            <div style="width: 100%; overflow: hidden;">
                <img src="/images/pembelajaran/tumbanil8.jpg" style="width: 100%; height: auto;" alt="Thumbnail Image">
            </div>
            <div class="card-body">
                <h2 class="card-title text-lg font-medium"><strong>Simak Video berikut untuk mengethaui Cara Mudah
                        Memahami PPh Pasal 21</strong></h2>
            </div>
        </div>
        <!-- Card 9 -->
        <div class="card bg-base-100 shadow-xl relative max-w-xs mx-auto mb-4 ml-4"
            onclick="window.location.href='/pembelajaran/video/detail_video'">
            <div style="width: 100%; overflow: hidden;">
                <img src="/images/pembelajaran/tumbanil9.jpg" style="width: 100%; height: auto;" alt="Thumbnail Image">
            </div>
            <div class="card-body">
                <h2 class="card-title text-lg font-medium"><strong>Simak Video berikut untuk mengetahui PPh Pasal 21 TER
                        (Tarif Efektif Rata-rata) Tahun 2024</strong></h2>
            </div>
        </div>
        <!-- Card 10 -->
        <div class="card bg-base-100 shadow-xl relative max-w-xs mx-auto mb-4 ml-4"
            onclick="window.location.href='/pembelajaran/video/detail_video0'">
            <div style="width: 100%; overflow: hidden;">
                <img src="/images/pembelajaran/tumbanil10.jpg" style="width: 100%; height: auto;" alt="Thumbnail Image">
            </div>
            <div class="card-body">
                <h2 class="card-title text-lg font-medium"><strong> Simak video ini untuk Menghitung PPh 21 Pegawai
                        Masuk dan Berhenti Kerja di Tahun Berjalan</strong></h2>
            </div>
        </div>
    </div>
</div>

@endsection