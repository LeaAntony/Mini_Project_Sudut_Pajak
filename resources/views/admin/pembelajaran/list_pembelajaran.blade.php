@extends('layouts.admin_main')

@section('title', 'List Pembelajaran | Sudut Pajak')
@section('content')

<link rel="stylesheet" href="/css/datatables/datatables.datatables.css">
<link rel="stylesheet" href="/css/datatables/datatables.tailwindcss.css">
<script src="/js/jquery/jquery-3.7.1.js"></script>
<script src="/js/datatables/datatables.js"></script>
<script src="/js/datatables/datatables.tailwindcss.js"></script>

<x-admin_top_panel>List Pembelajaran</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-white shadow-xl mx-16 overflow-visible -mt-10">
        <div class="card-body">
            <x-link_button href="/admin/pembelajaran/tambah_pembelajaran" class="w-32 h-10 -mb-12 z-50">Tambah</x-link_button>
            <table id="data-tables" class="table bg-white z-0">
                <!-- head -->
                <thead class="min-w-full">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Tipe</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <tr class="hover">
                        <th>1</th>
                        <td>Amsakar Achmad, Terus Dorong Pertumbuhan UMKM Menggerakkan Ekonomi Lokal</td>
                        <td>Artikel</td>
                        <td>
                            <a href="/admin/pembelajaran/edit_pembelajaran"><i class="fi fi-rr-edit mx-2 text-blue-500"></i></a>
                            <a href="/admin/pembelajaran/hapus_pembelajaran"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                    <!-- row 2 -->
                    <tr class="hover">
                        <th>2</th>
                        <td>Hore! 'Diskon' Pajak untuk UMKM Jadi Permanen</td>
                        <td>Video</td>
                        <td>
                            <a href="/admin/pembelajaran/edit_pembelajaran"><i class="fi fi-rr-edit mx-2 text-blue-500"></i></a>
                            <a href="/admin/pembelajaran/hapus_pembelajaran"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                    <!-- row 3 -->
                    <tr class="hover">
                        <th>3</th>
                        <td>Pajak Pengiriman Menjadi List Pembelajaran UMKM Di Batam</td>
                        <td>Infografis</td>
                        <td>
                            <a href="/admin/pembelajaran/edit_pembelajaran"><i class="fi fi-rr-edit mx-2 text-blue-500"></i></a>
                            <a href="/admin/pembelajaran/hapus_pembelajaran"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                    <tr class="hover">
                        <th>4</th>
                        <td>Pemko Dukung UMKM Berkembang, Batam Pamerkan Produk Unggulan</td>
                        <td>Video</td>
                        <td>
                            <a href="/admin/pembelajaran/edit_pembelajaran"><i class="fi fi-rr-edit mx-2 text-blue-500"></i></a>
                            <a href="/admin/pembelajaran/hapus_pembelajaran"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                    <tr class="hover">
                        <th>5</th>
                        <td>UMKM di Batam Diminta Bersiap Menyambut Perbaikan Ekonomi yang Lebih Baik</td>
                        <td>Infografis</td>
                        <td>
                            <a href="/admin/pembelajaran/edit_pembelajaran"><i class="fi fi-rr-edit mx-2 text-blue-500"></i></a>
                            <a href="/admin/pembelajaran/hapus_pembelajaran"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                    <tr class="hover">
                        <th>6</th>
                        <td>Kanwil DJP Jakarta Timur Kenalkan CTAS pada IKPI Jaktim</td>
                        <td>Artikel</td>
                        <td>
                            <a href="/admin/pembelajaran/edit_pembelajaran"><i class="fi fi-rr-edit mx-2 text-blue-500"></i></a>
                            <a href="/admin/pembelajaran/hapus_pembelajaran"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                    <tr class="hover">
                        <th>7</th>
                        <td>Kunjungi Kantor Kecamatan, KPP Denbar Lakukan Koordinasi</td>
                        <td>Artikel</td>
                        <td>
                            <a href="/admin/pembelajaran/edit_pembelajaran"><i class="fi fi-rr-edit mx-2 text-blue-500"></i></a>
                            <a href="/admin/pembelajaran/hapus_pembelajaran"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                    <tr class="hover">
                        <th>8</th>
                        <td>Belajar dari Kegigihan dan Tanggung Jawab Pak Hendra</td>
                        <td>Video</td>
                        <td>
                            <a href="/admin/pembelajaran/edit_pembelajaran"><i class="fi fi-rr-edit mx-2 text-blue-500"></i></a>
                            <a href="/admin/pembelajaran/hapus_pembelajaran"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                    <tr class="hover">
                        <th>9</th>
                        <td>Layanan Pojok Pajak Hadir di Dinas Pendidikan Kota Jambi</td>
                        <td>Video</td>
                        <td>
                            <a href="/admin/pembelajaran/edit_pembelajaran"><i class="fi fi-rr-edit mx-2 text-blue-500"></i></a>
                            <a href="/admin/pembelajaran/hapus_pembelajaran"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                    <tr class="hover">
                        <th>10</th>
                        <td>Pajak Kubu Raya Sampaikan Terima Kasih Kepada Polres</td>
                        <td>Infografis</td>
                        <td>
                            <a href="/admin/pembelajaran/edit_pembelajaran"><i class="fi fi-rr-edit mx-2 text-blue-500"></i></a>
                            <a href="/admin/pembelajaran/hapus_pembelajaran"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="/js/template/datatables3.js"></script>

@endsection