@extends('layouts.auth')

@section('title', 'Identifikasi')
@section('content')

                <div class="place-items-center sec-title">
                    <h1 class="font-blackbold text-4xl title bg-left leading-tight">Lupa kata sandi</h1>
                </div>
                <form action="/pemulihan">
                    <div class="mt-10">
                        <p>Lupa kata sandi Anda? Tidak masalah. Cukup beri tahu kami alamat email Anda dan kami akan mengirimkan email berisi tautan pengaturan ulang kata sandi yang memungkinkan Anda memilih yang baru.</p>
                    </div>
                    <div class="mt-5">
                        <label for="Email">Email</label>
                        <label class="input input-bordered flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                class="w-4 h-4 opacity-70">
                                <path
                                    d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                                <path
                                    d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                            </svg>
                            <input type="text" class="grow" placeholder="Contoh@email.com" />
                        </label>
                    </div>
                    <div class="grid grid-cols-2 gap-4 border-opacity-50 mt-5">
                        <a href="/masuk" class="btn sm:btn-sm md:btn-md lg:btn-lg w-50">Batal</a>
                        <x-button class="">Kirim email pemulihan</x-button>
                    </div>
                </form>

@endsection