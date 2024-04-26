@extends('layouts.main')

@section('title', 'Evaluasi Kuis | Sudut Pajak')

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

        <div class="container grid grid-cols-4 gap-5 mt-10">
            {{-- evaluasi --}}
            <div class="col-span-3">
                <div class="card w-full h-full bg-base-100 border border-2 border-teal-500 shadow-md">
                    <div class="card-body">
                        <table class="table table-auto border-collapse border border-slate-300">
                            <tbody class="text-base">
                                <tr>
                                    <td class="font-bold bg-gray-200">Mulai</td>
                                    <td>Rabu, 24 April 2024 07:00</td>
                                </tr>
                                <tr>
                                    <td class="font-bold bg-gray-200">Status</td>
                                    <td>Selesai</td>
                                </tr>
                                <tr>
                                    <td class="font-bold bg-gray-200">Selesai</td>
                                    <td>Rabu, 24 April 2024 08:20</td>
                                </tr>
                                <tr>
                                    <td class="font-bold bg-gray-200">Lama Pengerjaan</td>
                                    <td>1 jam 20 menit</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="container grid grid-cols-4 gap-5 mt-10">
                            {{-- soal 1 --}}
                            <div class="col-span-1 mt-10">
                                <div class="card w-full h-fit bg-base-100 border border-1 border-teal-500"
                                id="soal-1">
                                    <div class="card-body">
                                        <p class="font-bold">
                                            Pertanyaan 1
                                        </p>
                                        <p class="text-blue-500">Benar</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-3 mt-10">
                                <div class="card w-full h-fit bg-base-200 border border-1 border-teal-500">
                                    <div class="card-body">
                                        <div class="mb-5">
                                            <p class="text-pretty">
                                                Ahmad Zakaria pada tahun 2015 bekerja pada perusahaan PT Zamrud Abadi dengan memperoleh gaji sebulan Rp 6.000.000,00 dan membayar iuran pensiun sebesar Rp 100.000,00. Ahmad menikah tetapi belum mempunyai anak. Bagaimana perhitungan PPh pasal 21?
                                            </p>
                                        </div>
                                        <form class="flex justify-start grid gap-3">
                                            <div class="form-control">
                                                <label class="label cursor-pointer flex justify-start gap-5">
                                                    <input type="radio" name="radio-1" class="radio radio-accent checked:bg-teal-500" />
                                                    <span class="label-text text-start text-left">
                                                        Rp 200.000,00
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="form-control">
                                                <label class="label cursor-pointer flex justify-start gap-5">
                                                    <input type="radio" name="radio-1" class="radio radio-accent checked:bg-teal-500" />
                                                    <span class="label-text text-start">
                                                        Rp 177.000,00
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="form-control">
                                                <label class="label cursor-pointer flex justify-start gap-5">
                                                    <input type="radio" name="radio-1" class="radio radio-accent checked:bg-teal-500" />
                                                    <span class="label-text text-start">
                                                        Rp 217.000,00
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="form-control">
                                                <label class="label cursor-pointer flex justify-start gap-5">
                                                    <input type="radio" name="radio-1" class="radio radio-accent checked:bg-teal-500" />
                                                    <span class="label-text text-start">
                                                        Rp 117.100,00
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="form-control">
                                                <label class="label cursor-pointer flex justify-start gap-5">
                                                    <input type="radio" name="radio-1" class="radio radio-accent checked:bg-teal-500" checked />
                                                    <span class="label-text text-start">
                                                        Rp 117.500,00
                                                    </span>
                                                </label>
                                            </div>
                                        </form>
                                    </div>                                
                                </div>
                                <div class="card w-full h-fit bg-gradient-to-l from-emerald-500 to-blue-500 text-white mt-5">
                                    <div class="card-body">
                                        <p>Jawaban anda benar</p>
                                        <p>Jawaban Benar : Rp 117.500,00</p>
                                    </div>
                                </div>
                            </div>
                            {{-- soal 2 --}}
                            <div class="col-span-1 mt-10">
                                <div class="card w-full h-fit bg-base-100 border border-1 border-teal-500"
                                id="soal-2">
                                    <div class="card-body">
                                        <p class="font-bold">
                                            Pertanyaan 2
                                        </p>
                                        <p>-</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-3 mt-10">
                                <div class="card w-full h-full bg-base-200 border border-1 border-teal-500">
                                    <div class="card-body">                                       
                                        <div class="mb-5">
                                            <p class="text-pretty">
                                                Pada tahun 2021, Pak Budi adalah karyawan yang belum menikah. Maka PTKP untuk Pak Budi adalah...
                                            </p>
                                        </div>
                                        <form class="w-full">
                                            <div class="form-control">
                                                <label class="label">
                                                    <span class="label-text">Jawaban :</span>
                                                </label>
                                                <textarea class="textarea textarea-accent w-full">
                                                    TK/0 = Rp 54.000.000
                                                </textarea>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{-- soal 3 --}}
                            <div class="col-span-1 mt-10">
                                <div class="card w-full h-fit bg-base-100 border border-1 border-teal-500"
                                id="soal-3">
                                    <div class="card-body">
                                        <p class="font-bold">
                                            Pertanyaan 3
                                        </p>
                                        <p class="text-red-500">
                                            Salah
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-3 mt-10">
                                <div class="card w-full h-fit bg-base-200 border border-1 border-teal-500">
                                    <div class="card-body">                                        
                                        <div class="mb-5">
                                            <p class="text-pretty">
                                                Bagi penerima penghasilan yang tidak memiliki NPWP, dikenakan pemotongan PPh Pasal 21 dengan tarif lebih tinggi 20% daripada tarif yang diterapkan terhadap wajib pajak yang memiliki NPWP 
                                            </p>
                                        </div>
                                        <form class="flex justify-start grid gap-3">
                                            <div class="form-control">
                                                <label class="label cursor-pointer flex justify-start gap-5">
                                                    <input type="radio" name="radio-1" class="radio radio-accent checked:bg-teal-500" />
                                                    <span class="label-text text-start text-left">
                                                        Benar
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="form-control">
                                                <label class="label cursor-pointer flex justify-start gap-5">
                                                    <input type="radio" name="radio-1" class="radio radio-accent checked:bg-teal-500" checked />
                                                    <span class="label-text text-start">
                                                        Salah
                                                    </span>
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="card w-full bg-gradient-to-l from-emerald-500 to-blue-500 text-white mt-5">
                                    <div class="card-body">
                                        <p>Jawaban anda salah</p>
                                        <p>Jawaban Benar : Benar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center mt-10">
                    <a class="btn btn-wide bg-gray-200"
                        href="/kuis/hasil_kuis">
                        Kembali
                    </a>
                </div>
            </div>
            {{-- navigasi --}}
            <div class="card w-full h-fit bg-base-100 border border-2 border-teal-500 shadow-md" id="navigasi">
                <div class="card-body">
                    <div class="self-center">
                        <p class="card-title">Navigasi Soal</p>
                    </div>
                    <div class="flex justify-center gap-3 mt-5">
                        <a class="btn w-12 h-16 p-4 bg-gradient-to-l from-emerald-500 to-blue-500 text-white"
                        href="#soal-1">
                            1
                        </a>
                        <a class="btn w-12 h-16 p-4 bg-gradient-to-l from-emerald-500 to-blue-500 text-white"
                        href="#soal-2">
                            2
                        </a>
                        <a class="btn w-12 h-16 p-4 bg-gradient-to-l from-emerald-500 to-blue-500 text-white"
                        href="#soal-3">
                            3
                        </a>
                    </div>
                    <div class="self-center mt-5">
                        <a href="/kuis/hasil_kuis" class="link link-accent link-hover">
                            Selesaikan Evaluasi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection