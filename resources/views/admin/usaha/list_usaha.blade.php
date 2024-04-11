@extends('layouts.admin_main')

@section('title', 'Dasbor Admin | Sudut Pajak')
@section('content')

<link rel="stylesheet" href="/css/datatables/datatables.datatables.css">
<link rel="stylesheet" href="/css/datatables/datatables.tailwindcss.css">
<script src="/js/jquery/jquery-3.7.1.js"></script>
<script src="/js/datatables/datatables.js"></script>
<script src="/js/datatables/datatables.tailwindcss.js"></script>

<x-admin_top_panel>List Usaha</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-white shadow-xl mx-16 overflow-visible -mt-10">
        <div class="card-body">
            <x-link_button href="/admin/usaha/tambah_usaha" class="w-32 h-10 -mb-12 z-50">Tambah</x-link_button>
            <table id="data-tables" class="table bg-white z-0">
                <!-- head -->
                <thead class="min-w-full">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
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
                            <a href="/admin/usaha/edit_usaha"><i class="fi fi-rr-edit mx-2 text-blue-500"></i></a>
                            <a href="/admin/usaha/hapus_usaha"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                    <!-- row 2 -->
                    <tr class="hover">
                        <th>2</th>
                        <td>Hore! 'Diskon' Pajak untuk UMKM Jadi Permanen</td>
                        <td>Artikel</td>
                        <td>
                            <a href="/admin/usaha/edit_usaha"><i class="fi fi-rr-edit mx-2 text-blue-500"></i></a>
                            <a href="/admin/usaha/hapus_usaha"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                    <!-- row 3 -->
                    <tr class="hover">
                        <th>3</th>
                        <td>Pajak Pengiriman Menjadi Kendala Usaha UMKM Di Batam</td>
                        <td>Blog</td>
                        <td>
                            <a href="/admin/usaha/edit_usaha"><i class="fi fi-rr-edit mx-2 text-blue-500"></i></a>
                            <a href="/admin/usaha/hapus_usaha"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                    <tr class="hover">
                        <th>4</th>
                        <td>Pemko Dukung UMKM Berkembang, Batam Pamerkan Produk Unggulan</td>
                        <td>Artikel</td>
                        <td>
                            <a href="/admin/usaha/edit_usaha"><i class="fi fi-rr-edit mx-2 text-blue-500"></i></a>
                            <a href="/admin/usaha/hapus_usaha"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                    <tr class="hover">
                        <th>5</th>
                        <td>UMKM di Batam Diminta Bersiap Menyambut Perbaikan Ekonomi yang Lebih Baik</td>
                        <td>Blog</td>
                        <td>
                            <a href="/admin/usaha/edit_usaha"><i class="fi fi-rr-edit mx-2 text-blue-500"></i></a>
                            <a href="/admin/usaha/hapus_usaha"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                    <tr class="hover">
                        <th>6</th>
                        <td>Kanwil DJP Jakarta Timur Kenalkan CTAS pada IKPI Jaktim</td>
                        <td>Blog</td>
                        <td>
                            <a href="/admin/usaha/edit_usaha"><i class="fi fi-rr-edit mx-2 text-blue-500"></i></a>
                            <a href="/admin/usaha/hapus_usaha"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                    <tr class="hover">
                        <th>7</th>
                        <td>Kunjungi Kantor Kecamatan, KPP Denbar Lakukan Koordinasi</td>
                        <td>Blog</td>
                        <td>
                            <a href="/admin/usaha/edit_usaha"><i class="fi fi-rr-edit mx-2 text-blue-500"></i></a>
                            <a href="/admin/usaha/hapus_usaha"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                    <tr class="hover">
                        <th>8</th>
                        <td>Belajar dari Kegigihan dan Tanggung Jawab Pak Hendra</td>
                        <td>Blog</td>
                        <td>
                            <a href="/admin/usaha/edit_usaha"><i class="fi fi-rr-edit mx-2 text-blue-500"></i></a>
                            <a href="/admin/usaha/hapus_usaha"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                    <tr class="hover">
                        <th>9</th>
                        <td>Layanan Pojok Pajak Hadir di Dinas Pendidikan Kota Jambi</td>
                        <td>Artikel</td>
                        <td>
                            <a href="/admin/usaha/edit_usaha"><i class="fi fi-rr-edit mx-2 text-blue-500"></i></a>
                            <a href="/admin/usaha/hapus_usaha"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                    <tr class="hover">
                        <th>10</th>
                        <td>Pajak Kubu Raya Sampaikan Terima Kasih Kepada Polres</td>
                        <td>Artikel</td>
                        <td>
                            <a href="/admin/usaha/edit_usaha"><i class="fi fi-rr-edit mx-2 text-blue-500"></i></a>
                            <a href="/admin/usaha/hapus_usaha"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let table = document.getElementById("data-tables");
        let dataTable = new DataTable(table, {
            scrollX: true,
            pageLength: 10,
            lengthChange: false,
            columnDefs: [
                { targets: [0, 1, 2], orderable: true },
                { targets: '_all', orderable: false }
            ]
        });
    });
</script>

@endsection