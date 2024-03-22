@extends('layouts.auth')

@section('title', 'Pemulihan')
@section('content')

                <div class="place-items-center sec-title">
                    <h1 class="font-blackbold text-4xl title bg-left leading-tight">Reset Kata Sandi Anda</h1>
                </div>
                <form action="/pemulihan_sandi">
                    <div class="mt-10">
                        <p>Masukkan kode yang telah dikirimkan pada email anda.</p>
                    </div>
                    <div class="mt-5">
                        <label for="Kode Pemulihan">Kode Pemulihan</label>
                        <label class="input input-bordered flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                                <path fill-rule="evenodd"
                                    d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <input type="text" class="grow" placeholder="" />
                        </label>
                    </div>
                    <p class="mt-5">Belum menerima kode?</p>
                    <div class="grid grid-cols-2 gap-4 border-opacity-50">
                        <a href="" class="btn sm:btn-sm md:btn-md lg:btn-lg w-50">Kirim Ulang</a>
                        <button class="btn btn-accent sm:btn-sm md:btn-md lg:btn-lg ">Lanjutkan</button>
                    </div>
                </form>

@endsection