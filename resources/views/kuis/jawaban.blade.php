@extends('layouts.main')

@section('title', 'Rangkuman Jawaban')

@section('content')

<div class="container mx-auto mb-32">
    <div class="mx-20 my-10">
        <div class="flex gap-5">
            <svg class="fill-teal-500" id="kuis" height="64" viewBox="0 0 24 24" width="64"
                xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                <path
                    d="m20.389 4.268-2.657-2.657a5.462 5.462 0 0 0 -3.889-1.611h-6.343a5.506 5.506 0 0 0 -5.5 5.5v13a5.506 5.506 0 0 0 5.5 5.5h9a5.506 5.506 0 0 0 5.5-5.5v-10.343a5.464 5.464 0 0 0 -1.611-3.889zm-3.889 16.732h-9a2.5 2.5 0 0 1 -2.5-2.5v-13a2.5 2.5 0 0 1 2.5-2.5h5.5v4a2 2 0 0 0 2 2h4v9.5a2.5 2.5 0 0 1 -2.5 2.5zm.586-9.534a1.5 1.5 0 0 1 -.052 2.12l-3.586 3.414a3.5 3.5 0 0 1 -4.923-.025l-1.525-1.355a1.5 1.5 0 1 1 2-2.24l1.586 1.414a.584.584 0 0 0 .414.206.5.5 0 0 0 .353-.146l3.613-3.44a1.5 1.5 0 0 1 2.12.052z" />
            </svg>
            <p class="text-2xl font-bold">Kuis PPh 21 : Tes Pemahaman Tentang Pajak Gaji</p>
        </div>

        <div class="container grid grid-cols-4 gap-5 mt-10">
            {{-- rangkuman jawaban --}}
            <div class="col-span-3">
                <div class="card w-full h-full bg-base-100 border border-2 border-teal-500 shadow-md" id="soal">
                    <div class="card-body">
                        <div class="flex justify-between">
                            <div class="inline">
                                <a href="/kuis/soal/benar_salah" class="btn px-10">
                                    Kembali
                                </a>
                            </div>
                            <div class="inline box-border w-fit h-fit border-2 border-red-500 rounded-lg p-2 self-end">
                                <p class="flex justify-center">Sisa Waktu : 00:45</p>
                            </div>
                        </div>
                        <div class="mt-10">
                            <p class="text-xl font-bold">Rangkuman Jawaban</p>
                        </div>
                        <div class="mt-10">
                            <table class="table table-auto table-zebra">
                                <thead>
                                    <tr class="text-base text-black">
                                        <th>Pertanyaan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Jawaban Disimpan</td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>Jawaban Disimpan</td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td>Jawaban Disimpan</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center mt-10">
                    <a class="btn btn-wide bg-gradient-to-l from-emerald-500 to-blue-500 text-white" 
                    href="">
                        Kirim Jawaban
                    </a>
                </div>
            </div>
            {{-- navigasi --}}
            <div class="card w-full h-fit bg-base-100 border border-2 border-teal-500 shadow-md" id="navigasi">
                <div class="card-body">
                    <div class="flex justify-center gap-5">
                        <a class="btn w-12 h-16 p-4 bg-gradient-to-l from-emerald-500 to-blue-500 text-white"
                            href="/kuis/soal/pilgan">
                            1
                        </a>
                        <a class="btn w-12 h-16 p-4 bg-gradient-to-l from-emerald-500 to-blue-500 text-white"
                            href="/kuis/soal/essai">
                            2
                        </a>
                        <a class="btn w-12 h-16 p-4 bg-gradient-to-l from-emerald-500 to-blue-500 text-white"
                            href="/kuis/soal/benar_salah">
                            3
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection