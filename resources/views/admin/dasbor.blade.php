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
                    <div class="stat-value text-green-400 transition-[_--num] duration-[5s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]" x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:{{ $jumlahBerita }}]'">
                        <span class="supports-[counter-set]:sr-only text-green-400">{{ $jumlahBerita }}</span>
                    </div>
                </div>
                <div class="stat">
                    <div class="stat-title">Bidang Usaha</div>
                    <div class="stat-value text-emerald-400 transition-[_--num] duration-[5s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]" x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:{{ $jumlahBidangUsaha }}]'">
                        <span  class="supports-[counter-set]:sr-only text-cyan-500">{{ $jumlahBidangUsaha }}</span>
                    </div>
                </div>
                <div class="stat">
                    <div class="stat-title">Konsultan</div>
                    <div class="stat-value text-teal-400 transition-[_--num] duration-[5s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]" x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:{{ $jumlahKonsultan }}]'">
                        <span class="supports-[counter-set]:sr-only text-blue-500">{{ $jumlahKonsultan }}</span>
                    </div>
                </div>
                <div class="stat">
                    <div class="stat-title">Kuis</div>
                    <div class="stat-value text-cyan-400 transition-[_--num] duration-[5s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]" x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:{{ $jumlahKuis }}]'">
                        <span class="supports-[counter-set]:sr-only text-blue-500">{{ $jumlahKuis }}</span>
                    </div>
                </div>
                <div class="stat">
                    <div class="stat-title">Peraturan Pajak</div>
                    <div class="stat-value text-sky-400 transition-[_--num] duration-[5s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]" x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:{{ $jumlahPeraturanPajak }}]'">
                        <span class="supports-[counter-set]:sr-only text-blue-300">{{ $jumlahPeraturanPajak }}</span>
                    </div>
                </div>
                <div class="stat">
                    <div class="stat-title">Pelatihan</div>
                    <div class="stat-value text-blue-400 transition-[_--num] duration-[5s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]" x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:{{ $jumlahPelatihan }}]'">
                        <span class="supports-[counter-set]:sr-only text-blue-400">{{ $jumlahPelatihan }}</span>
                    </div>
                </div>
                <div class="stat">
                    <div class="stat-title">Pembelajaran</div>
                    <div class="stat-value text-blue-500 transition-[_--num] duration-[5s] ease-out [counter-set:_num_var(--num)] supports-[counter-set]:before:content-[counter(num)]" x-data="{ shown: false }" x-intersect="shown = true" :class="shown && '[--num:{{ $jumlahPembelajaran }}]'">
                        <span class="supports-[counter-set]:sr-only text-blue-500">{{ $jumlahPembelajaran }}</span>
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
            Pusat Pengelolaan Terpadu untuk segala kebutuhan informasi dan edukasi Anda. Di sini, Anda memiliki kendali penuh atas:
            <ol class="ml-4 list-decimal">
                <li class="">
                    Manajemen Berita: Buat, edit, dan publikasikan berita terbaru untuk menginformasikan dan menarik audiens Anda.
                </li>
                <li class="">
                    Manajemen Bidang Usaha: Kelola daftar usaha, tambahkan informasi kontak, dan bantu bisnis lokal berkembang.
                </li>
                <li class="">
                    Manajemen Konsultasi: Berikan layanan konsultasi online dan offline, kelola janji temu, dan terhubung dengan klien.
                </li>
                <li class="">
                    Manajemen Kuis: Buat kuis interaktif untuk menguji pengetahuan, mengumpulkan umpan balik, dan meningkatkan engagement.
                </li>
                <li class="">
                    Manajemen Peraturan: Tetapkan peraturan dan pedoman untuk memastikan platform Anda digunakan dengan aman dan bertanggung jawab.
                </li>
                <li class="">
                    Manajemen Pelatihan: Buat dan tawarkan program pelatihan online dan offline untuk meningkatkan keterampilan dan pengetahuan pengguna.
                </li>
                <li class="">
                    Manajemen Pembelajaran: Ciptakan pengalaman belajar yang menarik dengan berbagai format konten, seperti video, artikel, dan kuis.
                </li>
            </ol>
        </div>
    </div>
</div>

@endsection