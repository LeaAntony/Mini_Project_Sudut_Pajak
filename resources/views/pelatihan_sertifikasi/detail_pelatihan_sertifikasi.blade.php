@extends('layouts.secondary')

@section('title', 'Materi Pelatihan Atau Sertifikasi')
@section('judulBreadcrumbs', 'Detail Pelatihan Atau Sertifikasi')
@section('breadcrumbs')

<li><a href="/layanan">Layanan</a></li>
<li><a href="/pelatihan_sertifikasi">Pelatihan Atau Sertifikasi</a></li>
<li>Detail Pelatihan Atau Sertifikasi</li>

@endsection

@section('content')

<div class="container mx-auto">
    <div class="mt-20 mb-10 text-center">
        <p class="text-sky-800 font-bold text-4xl">Mengapa kita harus mengikuti <br>Pelatihan Atau Sertifikasi</p></br>
        <p class="text-1.8xl">Jadilah ahli pajak dan memanfaatkan kesempatan ini untuk mengembangkan karier anda.<br>
            Ikuti pelatihan dan sertifikasi pajak yang befokus pada peraturan perpajakan yang berlaku saat ini.
            Pemahaman mendalam tentang dunia <br>perpajakan dan strategi manajemen risiko pajak</p>
    </div>

    <div class="flex justify-center space-x-6">

        <div class="card bg-slate-100 w-100 ">
            <div class="card-body p-6">
                <h2 class="text-xl font-semibold mb-4 mt-6">Unduh Materi PDF</h2>
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
                <h2 class="text-xl font-semibold mb-4 mt-6">Unduh Materi PPT</h2>
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
                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/wYYnfRmTCvI" frameborder="0"
                        allowfullscreen class="block mt-7"></iframe>
                </div>
                <h2 class="text-xl font-semibold mb-4 mt-0">Akses Link Pembelajaran</h2>
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
</br>
</br>

@endsection