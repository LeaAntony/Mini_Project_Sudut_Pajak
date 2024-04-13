@extends('layouts.admin_main')

@section('title', 'List Soal | Sudut Pajak')
@section('content')

<link rel="stylesheet" href="/css/datatables/datatables.datatables.css">
<link rel="stylesheet" href="/css/datatables/datatables.tailwindcss.css">
<script src="/js/jquery/jquery-3.7.1.js"></script>
<script src="/js/datatables/datatables.js"></script>
<script src="/js/datatables/datatables.tailwindcss.js"></script>

<x-admin_top_panel>List Soal</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-white shadow-xl mx-16 overflow-visible -mt-10">
        <div class="card-body">
            <x-link_button href="/admin/kuis/soal/tambah_soal" class="w-32 h-10 -mb-12 z-50">Tambah</x-link_button>
            <table id="data-tables" class="table bg-white z-0">
                <!-- head -->
                <thead class="min-w-full">
                    <tr>
                        <th>No</th>
                        <th>Pertanyaan</th>
                        <th>skor</th>
                        <th>tipe Soal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <tr class="hover">
                        <th>1</th>
                        <td>Soal PPh 21: Test pemahaman tentang pajak gaji</td>
                        <td>20</td>
                        <td>Pilihan Ganda</td>
                        <td>
                            <a href="/admin/kuis/soal/edit_soal"><i class="fi fi-rr-edit mx-2 text-blue-500"></i></a>
                            <a href="/admin/kuis/soal/hapus_soal"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                    <tr class="hover">
                        <th>2</th>
                        <td>Soal PPh 21: Test pemahaman tentang pajak gaji</td>
                        <td>20</td>
                        <td>Essai</td>
                        <td>
                            <a href="/admin/kuis/soal/edit_soal"><i class="fi fi-rr-edit mx-2 text-blue-500"></i></a>
                            <a href="/admin/kuis/soal/hapus_soal"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                    <tr class="hover">
                        <th>3</th>
                        <td>Soal PPh 21: Test pemahaman tentang pajak gaji</td>
                        <td>20</td>
                        <td>Essai</td>
                        <td>
                            <a href="/admin/kuis/soal/edit_soal"><i class="fi fi-rr-edit mx-2 text-blue-500"></i></a>
                            <a href="/admin/kuis/soal/hapus_soal"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                    <tr class="hover">
                        <th>4</th>
                        <td>Soal PPh 21: Test pemahaman tentang pajak gaji</td>
                        <td>20</td>
                        <td>Pilihan Ganda</td>
                        <td>
                            <a href="/admin/kuis/soal/edit_soal"><i class="fi fi-rr-edit mx-2 text-blue-500"></i></a>
                            <a href="/admin/kuis/soal/hapus_soal"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                    <tr class="hover">
                        <th>5</th>
                        <td>Soal PPh 21: Test pemahaman tentang pajak gaji</td>
                        <td>20</td>
                        <td>Pilihan Ganda</td>
                        <td>
                            <a href="/admin/kuis/soal/edit_soal"><i class="fi fi-rr-edit mx-2 text-blue-500"></i></a>
                            <a href="/admin/kuis/soal/hapus_soal"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="/js/template/datatables2.js"></script>

@endsection