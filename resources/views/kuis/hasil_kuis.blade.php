@extends('layouts.main')

@section('title', 'Hasil Kuis | Sudut Pajak')

@section('content')

<div class="container mx-auto mb-60">
    <div class="m-10">
        <div class="flex gap-5">
            <svg class="fill-teal-500" id="kuis" height="64" viewBox="0 0 24 24" width="64"
                xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                <path
                    d="m20.389 4.268-2.657-2.657a5.462 5.462 0 0 0 -3.889-1.611h-6.343a5.506 5.506 0 0 0 -5.5 5.5v13a5.506 5.506 0 0 0 5.5 5.5h9a5.506 5.506 0 0 0 5.5-5.5v-10.343a5.464 5.464 0 0 0 -1.611-3.889zm-3.889 16.732h-9a2.5 2.5 0 0 1 -2.5-2.5v-13a2.5 2.5 0 0 1 2.5-2.5h5.5v4a2 2 0 0 0 2 2h4v9.5a2.5 2.5 0 0 1 -2.5 2.5zm.586-9.534a1.5 1.5 0 0 1 -.052 2.12l-3.586 3.414a3.5 3.5 0 0 1 -4.923-.025l-1.525-1.355a1.5 1.5 0 1 1 2-2.24l1.586 1.414a.584.584 0 0 0 .414.206.5.5 0 0 0 .353-.146l3.613-3.44a1.5 1.5 0 0 1 2.12.052z" />
            </svg>
            <p class="text-2xl font-bold">Kuis PPh 21 : Tes Pemahaman Tentang Pajak Gaji</p>
        </div>

        <div class="container mt-10">
            <div class="card w-full h-full bg-base-100 border border-2 border-teal-500 shadow-md">
                <div class="card-body">
                    <div>
                        <p class="font-bold inline">Waktu Pengerjaan :</p>
                        <p class="inline">25 menit</p>
                    </div>
                    <div>
                        <p class="font-bold inline">Percobaan Yang Diizinkan :</p>
                        <p class="inline">1 kali</p>
                    </div>
                    <div class="mt-10">
                        <p class="card-title text-2xl font-bold">
                            Ringkasan percobaan yang anda lakukan
                        </p>
                        <table class="table table-auto table-zebra mt-10">
                            <thead class="text-lg text-black">
                                <tr>
                                    <th>Status</th>
                                    <th>Nilai/100.00</th>
                                    <th>Evaluasi</th>
                                </tr>
                            </thead>
                            <tbody class="text-base">
                                <tr class="hover">
                                    <td class="grid">
                                        <span>
                                            Selesai
                                        </span>
                                        <span>
                                            Dikirim Rabu, 24 April 2024
                                        </span>
                                    </td>
                                    <td>
                                        90.00/100.00
                                    </td>
                                    <td>
                                        <a href="/kuis/evaluasi" class="link">Evaluasi</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-actions justify-center mt-20">
                        <a class="btn btn-wide bg-gradient-to-l from-emerald-500 to-blue-500 text-white" 
                        href="/kuis">
                        Kembali ke Beranda
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection