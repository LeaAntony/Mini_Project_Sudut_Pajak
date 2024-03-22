@extends('layouts.secondary')

@section('title', 'Peraturan Pajak Pusat')
@section('judulBreadcrumbs', 'Peraturan Pajak')
@section('breadcrumbs')

<li>Peraturan Pajak Pusat</li>

@endsection
@section('content')

<div class="mx-56 my-20">
    <h2 class="text-3xl font-semibold">Peraturan Pajak Pusat</h2>
    <p class="text-justify text-slate-500 my-7">
        Peraturan pajak daerah adalah peraturan yang dikeluarkan oleh pemerintah daerah atau pemerintah setempat, yang mengatur mengenai pungutan, penyetoran, penggunaan, dan pengawasan pajak di wilayah tertentu. Pajak daerah merupakan sumber pendapatan bagi pemerintah daerah untuk membiayai pengeluaran dan penyediaan layanan publik di daerah tersebut.
    </p>
    <a href="/lihat_pdf?nama=perda-kabupaten-magelang-no-4-tahun-2022.pdf" class="text-2xl font-semibold text-sky-500">1. DAERAH KABUPATEN MAGELANG NOMOR 4 TAHUN 2022</a>
    <p class="text-justify text-slate-500 my-5">
        RETRIBUSI PERSETUJUAN BANGUNAN GEDUNG DAN RETRIBUSI PENGGUNAAN TENAGA KERJA ASING
    </p>
    <a href="/lihat_pdf?nama=Pergub_DKI_41_2022.pdf" class="text-2xl font-semibold text-sky-500">2. PERATURAN GUBERNUR DAERAH KHUSUS IBUKOTA JAKARTA NOMOR 41 TAHUN 2022</a>
    <p class="text-justify text-slate-500 my-5">
        TATA CARA PEMBERIAN INSENTIF PEMUNGUTAN PAJAK DAERAH
    </p>
    <a href="/lihat_pdf?nama=Perwa- Nomor-24-tahun-2022.PDF" class="text-2xl font-semibold text-sky-500">3. PERATURAN WALI KOTA CIMAHI NOMOR 24 TAHUN 2022</a>
    <p class="text-justify text-slate-500 my-5">
        TARGET PENERIMAAN PAJAK DAERAH DAN RETRIBUSI DAERAH KOTA CIMAHI PER TRIWULAN TAHUN ANGGARAN 2022
    </p>
    <a href="/lihat_pdf?nama=Pergub-Sumsel-No-18-Tahun-2022.pdf" class="text-2xl font-semibold text-sky-500">4. PERATURAN GUBERNUR SUMATERA SELATAN NOMOR 18 TAHUN 2022</a>
    <p class="text-justify text-slate-500 my-5">
        PEMBEBASAN BEA BALIK NAMA KENDARAAN BERMOTOR PENYERAHAN KEDUA DAN SETERUSNYA SERTA PENGHAPUSAN SANKSI ADMINISTRASI BERUPA DENDA DAN BUNGA PAJAK KENDARAAN BERMOTOR
    </p>  
</div>

@endsection