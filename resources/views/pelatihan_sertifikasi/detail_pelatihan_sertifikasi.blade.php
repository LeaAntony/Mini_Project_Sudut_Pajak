@extends('layouts.secondary')

@section('title', 'Materi Pelatihan Atau Sertifikasi | Sudut Pajak')
@section('judulBreadcrumbs', 'Detail Pelatihan Atau Sertifikasi')
@section('breadcrumbs')

<li><a href="/layanan">Layanan</a></li>
<li><a href="/pelatihan_sertifikasi">Pelatihan Atau Sertifikasi</a></li>
<li>Detail Pelatihan Atau Sertifikasi</li>

@endsection

@section('content')

<div class="container mx-auto">
    <div class="mt-20 mb-10 text-center">
        <div class="text-sky-800 font-bold text-4xl mb-5">{{ $pelatihan->judul_pelatihan }}</div>
        <p class="text-1.8xl">{{ $pelatihan->deskripsi_pelatihan }}</p>
    </div>

    <div class="flex justify-center space-x-6">

        <div class="card bg-slate-100 w-100 ">
            <div class="card-body p-6">
                <a href="{{ url('/lihat_pdf/'.$pelatihan->pdf_pelatihan) }}" class="text-xl font-semibold mb-4 mt-6 hover:text-blue-400">Unduh Materi PDF</a>
                <p class="text-gray-700">Anda dapat mengunduh materi perpajakan sesuai dengan apa yang anda butuhkan
                    untuk mengatasi permasalahan perpajakan anda</p>
                <div class="card-actions justify-end mt-4">
                    <div
                        class="bg-gradient-to-r from-teal-500 to-blue-500 h-1 w-20 py-1 px-2 absolute top-0 left-6 mt-6">
                    </div>
                </div>
            </div>
        </div>

        <div class="card bg-slate-100 w-100 ">
            <div class="card-body p-6">
                <a href="{{ $pelatihan->ppt_pelatihan }}" class="text-xl font-semibold mb-4 mt-6 hover:text-blue-400">Unduh Materi PPT</a>
                <p class="text-gray-700">Anda dapat mengunduh materi perpajakan sesuai dengan apa yang anda butuhkan
                    untuk mengatasi permasalahan perpajakan anda</p>
                <div class="card-actions justify-end mt-4">
                    <div
                        class="bg-gradient-to-r from-teal-500 to-blue-500 h-1 w-20 py-1 px-2 absolute top-0 left-6 mt-6">
                    </div>
                </div>
            </div>
        </div>

        <div class="card bg-slate-100 w-100 ">
            <div class="card-body p-6">
                <div class="flex justify-center">
                    <iframe class="h-72 w-[100%]" src="{{ $pelatihan->link_pelatihan }}" frameborder="0"
                        allowfullscreen class="block mt-7"></iframe>
                </div>
                <div class="mt-8">
                    <a href="{{ $pelatihan->link_pelatihan }}" class="text-xl font-semibold mb-4 mt-6 hover:text-blue-400">Akses Link Pembelajaran</a>
                    <p class="text-gray-700">Anda dapat mengunduh materi perpajakan sesuai dengan apa yang anda butuhkan
                        untuk mengatasi permasalahan perpajakan anda</p>
                    <div class="card-actions justify-end mt-4">
                        <div
                            class="bg-gradient-to-r from-teal-500 to-blue-500 h-1 w-20 py-1 px-2 absolute top-0 left-6 mt-6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</br>
</br>

@endsection