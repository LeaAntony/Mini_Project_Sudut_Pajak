@extends('layouts.admin_main')

@section('title', 'Hasil Kuis| Sudut Pajak')
@section('content')

<link rel="stylesheet" href="/css/datatables/datatables.datatables.css">
<link rel="stylesheet" href="/css/datatables/datatables.tailwindcss.css">
<script src="/js/jquery/jquery-3.7.1.js"></script>
<script src="/js/datatables/datatables.js"></script>
<script src="/js/datatables/datatables.tailwindcss.js"></script>

<x-admin_top_panel>Hasil Kuis</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-white shadow-xl mx-16 overflow-visible -mt-10">
        <div class="card-body">
            <table id="data-tables" class="table bg-white z-0">
                <!-- head -->
                <thead class="min-w-full">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nilai</th>
                        <th>Kuis</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <tr class="hover">
                        <th>1</th>
                        <td>Lea Antony</td>
                        <td>80</td>
                        <td>Kuis PPh 21</td>
                        <td>Selesai</td>
                        <td>
                            <a href="/admin/kuis/hasil_kuis/detail"><i class="fi fi-rr-file-circle-info mx-2 text-blue-500"></i></a>
                            <a href="/admin/kuis/hasil_kuis/hapus"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                    <!-- row 2 -->
                    <tr class="hover">
                        <th>2</th>
                        <td>Lea Antony</td>
                        <td>80</td>
                        <td>Kuis PPh 21</td>
                        <td>Selesai</td>
                        <td>
                            <a href="/admin/kuis/hasil_kuis/detail"><i class="fi fi-rr-file-circle-info mx-2 text-blue-500"></i></a>
                            <a href="/admin/kuis/hasil_kuis/hapus"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                    <!-- row 3 -->
                    <tr class="hover">
                        <th>3</th>
                        <td>Lea Antony</td>
                        <td>80</td>
                        <td>Kuis PPh 21</td>
                        <td>Selesai</td>
                        <td>
                            <a href="/admin/kuis/hasil_kuis/detail"><i class="fi fi-rr-file-circle-info mx-2 text-blue-500"></i></a>
                            <a href="/admin/kuis/hasil_kuis/hapus"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                    <tr class="hover">
                        <th>4</th>
                        <td>Lea Antony</td>
                        <td>80</td>
                        <td>Kuis PPh 21</td>
                        <td>Selesai</td>
                        <td>
                            <a href="/admin/kuis/hasil_kuis/detail"><i class="fi fi-rr-file-circle-info mx-2 text-blue-500"></i></a>
                            <a href="/admin/kuis/hasil_kuis/hapus"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
                        </td>
                    </tr>
                    <tr class="hover">
                        <th>5</th>
                        <td>Lea Antony</td>
                        <td>80</td>
                        <td>Kuis PPh 21</td>
                        <td>Selesai</td>
                        <td>
                            <a href="/admin/kuis/hasil_kuis/detail"><i class="fi fi-rr-file-circle-info mx-2 text-blue-500"></i></a>
                            <a href="/admin/kuis/hasil_kuis/hapus"><i class="fi fi-rr-trash mx-2 text-red-400"></i></a>
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