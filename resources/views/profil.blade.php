@extends('layouts.main')

@section('title', 'Profil | Sudut Pajak')
@section('content')

<div class="text-center">
    <div class="card bg-base-100 shadow-xl mx-16 my-20 overflow-visible ">
        <div class="card-body">
            <div>
                <h2 class="card-title mb-7">
                    <button
                        class="btn sm:btn-sm md:btn-md lg:btn-lg bg-gradient-to-r from-green-400 to-teal-400 hover:from-teal-300 hover:to-green-300 active:from-teal-200 active:to-green-200 focus:outline-none focus:ring focus:ring-emerald-300 text-white"
                        onclick="showSection('profil')" id="profilBtn">Profil</button>
                    <button class="btn sm:btn-sm md:btn-md lg:btn-lg" onclick="showSection('pengaturanAkun')"
                        id="pengaturanAkunBtn">Pengaturan Akun</button>
                    <a href="/masuk" class="btn sm:btn-sm md:btn-md lg:btn-lg">Keluar</a>
                </h2>
                <div id="profilSection">
                    <div class="flex flex-col gap-4 w-52">
                        <div class="flex gap-4 items-center">
                            <div class="w-36 h-36 rounded-full shrink-0 border">
                                <img src="https://cdn-icons-png.flaticon.com/512/21/21104.png" alt="profile"
                                    class="shadow rounded-full object-cover">
                            </div>
                            <div class="flex flex-col gap-4">
                                <div class="font-semibold h-4 w-20 text-xl">Pengunjung</div>
                                <div class="h-4 w-28">Pengunjung@email.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pengaturanAkunSection" class="hidden">
                    <form action="/profil">
                        <div class="avatar">
                            <div class="w-48 rounded-full border">
                                <img src="https://cdn-icons-png.flaticon.com/512/21/21104.png" alt="profile"
                                    class="shadow rounded-full object-cover" />
                            </div>
                        </div>
                        <label class="form-control w-full mb-10">
                            <div class="label">
                                <span class="label-text">Ganti Foto Profil</span>
                            </div>
                            <input type="file" class="file-input file-input-bordered file-input-accent w-full" />
                        </label>
                        <div class="grid grid-rows-2 grid-flow-col gap-3">
                            <label class="form-control w-full mb-10">
                                <div class="label">
                                    <span class="label-text">Nama</span>
                                </div>
                                <input type="text" placeholder="Nama" class="input input-accent w-full" />
                            </label>
                            <label class="form-control w-full">
                                <div class="label">
                                    <span class="label-text">Email</span>
                                </div>
                                <input type="text" placeholder="Email" class="input input-accent w-full" />
                            </label>
                            <label class="form-control w-full">
                                <div class="label">
                                    <span class="label-text">Username</span>
                                </div>
                                <input type="text" placeholder="Username" class="input input-accent w-full" />
                            </label>
                            <label class="form-control w-full">
                                <div class="label">
                                    <span class="label-text">No HP</span>
                                </div>
                                <input type="text" placeholder="No HP" class="input input-accent w-full" />
                            </label>
                        </div>
                        <x-button class="sm:btn-sm md:btn-md lg:btn-lg mt-5">Edit</x-button>
                        <x-button class="sm:btn-sm md:btn-md lg:btn-lg mt-5">Simpan</x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/js/template/profil.js"></script>

@endsection