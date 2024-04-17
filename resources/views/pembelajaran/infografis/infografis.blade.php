@extends('layouts.secondary')

@section('title', 'Infografis Pembelajaran PPh')
@section('judulBreadcrumbs', 'Infografis Pembelajaran PPh')
@section('breadcrumbs')

<li><a href="/layanan">Layanan</a></li>
<li><a href="/pembelajaran">Pembelajaran PPh</a></li>
<li>Infografis Pembelajaran PPh</li>

@endsection
@section('content')

<div class=" mx-auto w-full max-w-lg mb-4 mt-10 justify-self-center">
    <form action="#" method="GET" class="flex items-center bg-gradient-to-b from-blue-500 to-green-500 border border-gray-200 rounded-full shadow-sm">
        <input type="text" name="search" placeholder="Cari..." class="w-full pl-4 pr-12 py-3 focus:outline-none rounded-l-full text-lg"> <!-- Meningkatkan tinggi, lebar, dan ukuran teks -->
        <button type="submit" class="text-white px-6 py-3 hover:bg-blue-600 focus:outline-none rounded-r-full text-lg">Cari</button> <!-- Meningkatkan tinggi, lebar, dan ukuran teks -->
    </form>
</div>

<div class="container">
    <div class="grid grid-cols-3 ml-10 mt-8 mb-10">
        <div class="card card-compact w-96 bg-base-100 shadow-xl rounded-none mx-5">
            <figure><img
                    src="https://betta.ortax.org/storage/files/images/info/Infografis%20menghitung%20PPh%2021-01.jpg"
                    alt="infografis menghitung pph 21" style="max-width: 100%; height: 690px;" /></figure>
            <div class="card-body">
                <a href="/pembelajaran/infografis/detail_infografis">
                    <h2 class="card-title">Menghitung PPh Pasal 21 dengan
                        penghasilan Netto Disetahunkan.</h2>
                </a>
                <div class="card-actions justify-end">
                </div>
            </div>
        </div>

        <div class="card card-compact w-96 bg-base-100 shadow-xl rounded-none mx-5">
            <figure><img
                    src="https://ddtc-cdn1.sgp1.digitaloceanspaces.com/ori/200313091005infografispajakprogresifpphkaryawan.jpg"
                    alt="infografis menghitung pph 21" style="max-width: 100%; height: 690px;" /></figure>
            <div class="card-body">
                <h2 class="card-title">Menghitung Pajak Progresif PPh Pasal 21. </h2>
                <div class="card-actions justify-end">
                </div>
            </div>
        </div>

        <div class="card card-compact w-96 bg-base-100 shadow-xl rounded-none mx-5">
            <figure><img
                    src="https://ddtc-cdn1.sgp1.digitaloceanspaces.com/ori/210730090036INFOGRAFISContohPenghitunganPPhPasal21DitanggungPemerintah(2).jpg"
                    alt="infografis menghitung pph 21" style="max-width: 100%; height: 690px;" /></figure>
            <div class="card-body">
                <h2 class="card-title">Menghitung PPh Pasal 21 Ditanggung Pemerintah.</h2>
                <div class="card-actions justify-end">
                </div>
            </div>
        </div>

        @endsection
