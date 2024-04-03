@extends('layouts.auth')

@section('title', 'Masuk')
@section('content')

                <div class="place-items-center sec-title">
                    <h1 class="font-blackbold text-4xl title bg-left leading-tight">Silahkan masuk terlebih dahulu</h1>
                </div>
                <form action="/">
                    <div class="mt-10">
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
                    <div class="mt-5">
                        <label for="Password">Kata Sandi</label>
                        <label class="input input-bordered flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                                <path fill-rule="evenodd"
                                    d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <input type="password" class="grow" value="" placeholder="********" />
                        </label>
                    </div>
                    <div class="form-control mt-5">
                        <label class="cursor-pointer mx-auto">
                            <input type="checkbox" class="checkbox checkbox-accent" />
                            <span class=" align-top mr-40">Ingat Saya</span>
                            <a href="/identifikasi" class="link-accent align-top ">Lupa Kata Sandi?</a>
                        </label>
                    </div>
                    <div class="flex flex-col w-full border-opacity-50 mt-5">
                        <button class="grid place-items-center btn btn-accent btn-xs sm:btn-sm md:btn-md lg:btn-lg">Masuk</button>
                        <div class="divider">OR</div>
                        <a href="/daftar"><div class="grid place-items-center btn btn-info btn-xs sm:btn-sm md:btn-md lg:btn-lg">Daftar</div></a>
                    </div>
                    <div class="form-control mt-5">
                        <label class="cursor-pointer mx-auto">
                            <a href="" class="link-info align-text-top mr-20">Masuk sebagai Admin?</a>
                            <a href="" class="link-info align-text-top">Masuk sebagai Konsultan?</a>
                        </label>
                    </div>
                </form>

@endsection