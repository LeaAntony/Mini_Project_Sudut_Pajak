@extends('layouts.konsul')

@section('title', 'Profil')

@section('content')

<div class="container mx-auto px-4 py-8">
    <div class="max-w-lg mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
        <div class="px-4 py-6">
            <div class="flex justify-center">
                <img src="/images/konsultasi/pakar-1.jpg" class="w-32 h-32 rounded-full" alt="Pakar">
            </div>
            <h2 class="text-center mt-4 text-xl font-semibold">Drs. Hakase Miurae</h2>
            <p class="text-center text-sm text-gray-600">PPh Badan</p>
            <p class="text-center text-sm text-gray-600">5 tahun</p>
            <div class="text-gray-700 mt-6">
                <p class="text-sm"><span class="font-semibold">Bio:</span> Konsultan berpengalaman
                    dan terampil dalam bidang PPh Badan. Dengan lima tahun pengalaman di bidang ini, dan
                    telah berhasil membantu berbagai klien dalam mengelola dan memecahkan masalah perpajakan.
                    Keahlian dalam memahami kode etik dan regulasi pajak menjadi pilihan yang sangat tepat
                    untuk memberikan saran pajak yang akurat dan efektif. </p>
                <p class="text-sm mt-2"><span class="font-semibold">Email:</span> HakaseMiurae@gmail.com</p>
                <p class="text-sm mt-2"><span class="font-semibold">Jenjang Karir:</span> Analisis Keuangan, Senior Analisis Keuangan.</p>
                <p class="text-sm mt-2"><span class="font-semibold">Alumnus:</span> Universitas Indonesia, S.E.</p>
            </div>
        </div>
        <div class="px-4 pb-4">
            <a href="/konsultasi/chat" class="w-full btn btn-sm btn-info text-white">Chat</a>
        </div>
    </div>
</div>


@endsection
