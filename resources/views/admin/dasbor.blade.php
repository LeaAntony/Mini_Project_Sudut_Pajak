@extends('layouts.admin_main')

@section('title', 'Dasbor Admin | Sudut Pajak')
@section('content')

<link rel="stylesheet" href="/css/template/number_counter.css">

<x-admin_top_panel>Dasbor Admin</x-admin_top_panel>
<div class="text-center">
    <div class="card bg-base-100 shadow-xl mx-16 overflow-visible -mt-10">
        <div class="card-body">
            <h2 class="card-title">Informasi Pajak Harian</h2>
            <div class="stats stats-vertical lg:stats-horizontal">
                <div class="stat">
                    <div class="stat-title">Berita</div>
                    <div class="stat-value text-green-400 transition-[_--num] duration-[5s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]" x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:36]'">
                        <span class="supports-[counter-set]:sr-only text-green-400">36</span>
                    </div>
                </div>
                <div class="stat">
                    <div class="stat-title">Peraturan Pajak</div>
                    <div class="stat-value text-emerald-400 transition-[_--num] duration-[5s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]" x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:30]'">
                        <span  class="supports-[counter-set]:sr-only text-cyan-500">30</span>
                    </div>
                </div>
                <div class="stat">
                    <div class="stat-title">Materi atau Sertifikasi</div>
                    <div class="stat-value text-cyan-400 transition-[_--num] duration-[5s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]" x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:40]'">
                        <span class="supports-[counter-set]:sr-only text-blue-500">40</span>
                    </div>
                </div>
                <div class="stat">
                    <div class="stat-title">Pelatihan</div>
                    <div class="stat-value text-sky-400 transition-[_--num] duration-[5s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]" x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:20]'">
                        <span class="supports-[counter-set]:sr-only text-blue-500">20</span>
                    </div>
                </div>
                <div class="stat">
                    <div class="stat-title">Konsultan</div>
                    <div class="stat-value text-blue-400 transition-[_--num] duration-[5s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]" x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:12]'">
                        <span class="supports-[counter-set]:sr-only text-blue-500">12</span>
                    </div>
                </div>
                <div class="stat">
                    <div class="stat-title">Kuis</div>
                    <div class="stat-value text-blue-500 transition-[_--num] duration-[5s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]" x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:16]'">
                        <span class="supports-[counter-set]:sr-only text-blue-500">16</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card bg-base-100 shadow-xl mx-16 mt-10">
    <div class="card-body">
        <h2 class="card-title text-center">Selamat datang di Dasbor Admin Klinik Pajak!</h2>
        <div>
            Di sini, Anda memiliki kendali penuh atas:
            <ol class="ml-4 list-decimal grid grid-cols-12 gaps-1">
                <li class="col-span-2">
                    Manajemen Berita
                    <ul class="ml-6 list-disc">
                        <li>List Berita</li>
                        <li>Tambah Berita</li>
                        <li>Edit Berita</li>
                        <li>Hapus Berita</li>
                    </ul>
                </li>
                <li class="col-span-2">
                    Manajemen Usaha
                    <ul class="ml-6 list-disc">
                        <li>List Usaha</li>
                        <li>Tambah Usaha</li>
                        <li>Edit Usaha</li>
                        <li>Hapus Usaha</li>
                    </ul>
                </li>
                <li class="col-span-2">
                    Manajemen Pajak
                    <ul class="ml-6 list-disc">
                        <li>List Pajak</li>
                        <li>Tambah Pajak</li>
                        <li>Edit Pajak</li>
                        <li>Hapus Pajak</li>
                    </ul>
                </li>
                <li class="col-span-2">
                    Manajemen Pelatihan
                    <ul class="ml-6 list-disc">
                        <li>List Pelatihan</li>
                        <li>Tambah Pelatihan</li>
                        <li>Edit Pelatihan</li>
                        <li>Hapus Pelatihan</li>
                    </ul>
                </li>
                <li class="col-span-2">
                    Manajemen Konsultan
                    <ul class="ml-6 list-disc">
                        <li>List Konsultan</li>
                        <li>Tambah Konsultan</li>
                        <li>Edit Konsultan</li>
                        <li>Hapus Konsultan</li>
                    </ul>
                </li>
                <li class="col-span-2">
                    Manajemen Kuis
                    <ul class="ml-6 list-disc">
                        <li>List Kuis</li>
                        <li>Tambah Kuis</li>
                        <li>Edit Kuis</li>
                        <li>Hapus Kuis</li>
                    </ul>
                </li>
            </ol>
        </div>
    </div>
</div>

@endsection