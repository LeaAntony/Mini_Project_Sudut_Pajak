@extends('layouts.admin_main')

@section('title', 'Dasbor Admin | Sudut Pajak')
@section('content')

<link rel="stylesheet" href="/css/datatables/datatables.datatables.css">
<link rel="stylesheet" href="/css/datatables/datatables.tailwindcss.css">
<script src="/js/jquery/jquery-3.7.1.js"></script>
<script src="/js/datatables/datatables.js"></script>
<script src="/js/datatables/datatables.tailwindcss.js"></script>

<x-admin_top_panel>List Konsultan</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-white shadow-xl mx-16 overflow-visible -mt-10">
        <div class="card-body">
            <x-link_button href="/admin/konsultan/tambah_konsultan" class="w-32 h-10 -mb-12 z-50">Tambah</x-link_button>
            <table id="data-tables" class="table bg-white z-0">
                <!-- head -->
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Unique ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Bio</th>
                        <th>Profil Pic</th>
                        <th>Alumnus</th>
                        <th>Bidang</th>
                        <th>Status</th>
                        <th>Pengalaman</th>
                        <th>Jenjang Karir</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <tr class="hover">
                        <th>1</th>
                        <td>KNS001</td>
                        <td>Andini Kartika Sari</td>
                        <td>AndiniKartikaSari@email.com</td>
                        <td><div class="line-clamp-4">Konsultan berpengalaman di bidang manajemen keuangan dengan fokus pada analisis risiko dan strategi investasi. Memiliki 10 tahun pengalaman di industri keuangan dan telah bekerja dengan berbagai perusahaan multinasional.</div></td>
                        <td><img src="https://i.pinimg.com/564x/8e/30/f8/8e30f85f93ab705b6b4cb32983dd1771.jpg" alt="" class="h-30 object-cover"></td>
                        <td>Universitas Indonesia, S.E.</td>
                        <td>Keuangan</td>
                        <td>Aktif</td>
                        <td>10 tahun</td>
                        <td><div class="line-clamp-4">Analis Keuangan, Senior Analis Keuangan, Konsultan Keuangan</div></td>
                        <td>
                            <a href="/admin/konsultan/edit_konsultan"><i class="fi fi-rr-edit text-2xl text-blue-500"></i></a>
                            <a href="/admin/konsultan/hapuskonsultan"><i class="fi fi-rr-trash text-2xl text-red-400"></i></a>
                        </td>
                    </tr>
                    <tr class="hover">
                        <th>2</th>
                        <td>KNS001</td>
                        <td>Andini Kartika Sari</td>
                        <td>AndiniKartikaSari@email.com</td>
                        <td><div class="line-clamp-4">Konsultan berpengalaman di bidang manajemen keuangan dengan fokus pada analisis risiko dan strategi investasi. Memiliki 10 tahun pengalaman di industri keuangan dan telah bekerja dengan berbagai perusahaan multinasional.</div></td>
                        <td><img src="https://i.pinimg.com/564x/8e/30/f8/8e30f85f93ab705b6b4cb32983dd1771.jpg" alt="" class="h-30 object-cover"></td>
                        <td>Universitas Indonesia, S.E.</td>
                        <td>Keuangan</td>
                        <td>Aktif</td>
                        <td>10 tahun</td>
                        <td><div class="line-clamp-4">Analis Keuangan, Senior Analis Keuangan, Konsultan Keuangan</div></td>
                        <td>
                            <a href="/admin/konsultan/edit_konsultan"><i class="fi fi-rr-edit text-2xl text-blue-500"></i></a>
                            <a href="/admin/konsultan/hapuskonsultan"><i class="fi fi-rr-trash text-2xl text-red-400"></i></a>
                        </td>
                    </tr>
                    <tr class="hover">
                        <th>3</th>
                        <td>KNS001</td>
                        <td>Andini Kartika Sari</td>
                        <td>AndiniKartikaSari@email.com</td>
                        <td><div class="line-clamp-4">Konsultan berpengalaman di bidang manajemen keuangan dengan fokus pada analisis risiko dan strategi investasi. Memiliki 10 tahun pengalaman di industri keuangan dan telah bekerja dengan berbagai perusahaan multinasional.</div></td>
                        <td><img src="https://i.pinimg.com/564x/8e/30/f8/8e30f85f93ab705b6b4cb32983dd1771.jpg" alt="" class="h-30 object-cover"></td>
                        <td>Universitas Indonesia, S.E.</td>
                        <td>Keuangan</td>
                        <td>Aktif</td>
                        <td>10 tahun</td>
                        <td><div class="line-clamp-4">Analis Keuangan, Senior Analis Keuangan, Konsultan Keuangan</div></td>
                        <td>
                            <a href="/admin/konsultan/edit_konsultan"><i class="fi fi-rr-edit text-2xl text-blue-500"></i></a>
                            <a href="/admin/konsultan/hapuskonsultan"><i class="fi fi-rr-trash text-2xl text-red-400"></i></a>
                        </td>
                    </tr>
                    <tr class="hover">
                        <th>4</th>
                        <td>KNS001</td>
                        <td>Andini Kartika Sari</td>
                        <td>AndiniKartikaSari@email.com</td>
                        <td><div class="line-clamp-4">Konsultan berpengalaman di bidang manajemen keuangan dengan fokus pada analisis risiko dan strategi investasi. Memiliki 10 tahun pengalaman di industri keuangan dan telah bekerja dengan berbagai perusahaan multinasional.</div></td>
                        <td><img src="https://i.pinimg.com/564x/8e/30/f8/8e30f85f93ab705b6b4cb32983dd1771.jpg" alt="" class="h-30 object-cover"></td>
                        <td>Universitas Indonesia, S.E.</td>
                        <td>Keuangan</td>
                        <td>Aktif</td>
                        <td>10 tahun</td>
                        <td><div class="line-clamp-4">Analis Keuangan, Senior Analis Keuangan, Konsultan Keuangan</div></td>
                        <td>
                            <a href="/admin/konsultan/edit_konsultan"><i class="fi fi-rr-edit text-2xl text-blue-500"></i></a>
                            <a href="/admin/konsultan/hapuskonsultan"><i class="fi fi-rr-trash text-2xl text-red-400"></i></a>
                        </td>
                    </tr>
                    <tr class="hover">
                        <th>5</th>
                        <td>KNS001</td>
                        <td>Andini Kartika Sari</td>
                        <td>AndiniKartikaSari@email.com</td>
                        <td><div class="line-clamp-4">Konsultan berpengalaman di bidang manajemen keuangan dengan fokus pada analisis risiko dan strategi investasi. Memiliki 10 tahun pengalaman di industri keuangan dan telah bekerja dengan berbagai perusahaan multinasional.</div></td>
                        <td><img src="https://i.pinimg.com/564x/8e/30/f8/8e30f85f93ab705b6b4cb32983dd1771.jpg" alt="" class="h-30 object-cover"></td>
                        <td>Universitas Indonesia, S.E.</td>
                        <td>Keuangan</td>
                        <td>Aktif</td>
                        <td>10 tahun</td>
                        <td><div class="line-clamp-4">Analis Keuangan, Senior Analis Keuangan, Konsultan Keuangan</div></td>
                        <td>
                            <a href="/admin/konsultan/edit_konsultan"><i class="fi fi-rr-edit text-2xl text-blue-500"></i></a>
                            <a href="/admin/konsultan/hapuskonsultan"><i class="fi fi-rr-trash text-2xl text-red-400"></i></a>
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
                { targets: [0, 1, 2, 8], orderable: true },
                { targets: '_all', orderable: false }
            ]
        });
    });
</script>

@endsection