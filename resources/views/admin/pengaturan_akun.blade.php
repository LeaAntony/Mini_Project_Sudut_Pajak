@extends('layouts.admin_main')

@section('title', 'Pengaturan Akun | Sudut Pajak')
@section('content')

<link rel="stylesheet" href="/css/template/number_counter.css">

<x-admin_top_panel>Pengaturan Akun</x-admin_top_panel>
<div class="text-center">
    <div class="card bg-base-100 shadow-xl mx-16 overflow-visible -mt-10">
        <div class="card-body">
            <div>
                <h2 class="card-title mb-3">
                    <button
                        class="btn sm:btn-sm md:btn-md lg:btn-lg bg-gradient-to-r from-green-400 to-teal-400 hover:from-teal-300 hover:to-green-300 active:from-teal-200 active:to-green-200 focus:outline-none focus:ring focus:ring-emerald-300 text-white"
                        onclick="showSection('identitas')" id="identitasBtn">Identitas</button>
                    <button class="btn sm:btn-sm md:btn-md lg:btn-lg" onclick="showSection('fotoProfil')"
                        id="fotoProfilBtn">Foto Profil</button>
                    <button class="btn sm:btn-sm md:btn-md lg:btn-lg" onclick="showSection('kataSandi')"
                        id="kataSandiBtn">Kata Sandi</button>
                </h2>
                <div id="identitasSection">
                    <form action="/admin/pengaturan_akun">
                        <div class="grid grid-rows-2 grid-flow-col gap-3">
                            <label class="form-control w-full mb-10">
                                <div class="label">
                                    <span class="label-text">Nama</span>
                                </div>
                                <input type="text" placeholder="Nama Admin" class="input input-accent w-full" />
                            </label>
                            <label class="form-control w-full">
                                <div class="label">
                                    <span class="label-text">Email</span>
                                </div>
                                <input type="text" placeholder="Email Admin" class="input input-accent w-full" />
                            </label>
                            <label class="form-control w-full">
                                <div class="label">
                                    <span class="label-text">Username</span>
                                </div>
                                <input type="text" placeholder="Username Admin" class="input input-accent w-full" />
                            </label>
                            <label class="form-control w-full">
                                <div class="label">
                                    <span class="label-text">No HP</span>
                                </div>
                                <input type="text" placeholder="No HP Admin" class="input input-accent w-full" />
                            </label>
                        </div>
                        <x-button class="sm:btn-sm md:btn-md lg:btn-lg mt-5">Edit</x-button>
                        <x-button class="sm:btn-sm md:btn-md lg:btn-lg mt-5">Simpan</x-button>
                    </form>
                </div>
                <div id="fotoProfilSection" class="hidden">
                    <form action="/admin/pengaturan_akun">
                        <div class="avatar">
                            <div class="w-48 rounded-full border">
                                <img src="https://cdn-icons-png.flaticon.com/512/21/21104.png" alt="profile"
                                    class="shadow rounded-full object-cover" />
                            </div>
                        </div>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">File Foto</span>
                            </div>
                            <input type="file" class="file-input file-input-bordered file-input-accent w-full" />
                        </label>
                        <x-button class="sm:btn-sm md:btn-md lg:btn-lg mt-5">Edit</x-button>
                        <x-button class="sm:btn-sm md:btn-md lg:btn-lg mt-5">Simpan</x-button>
                    </form>
                </div>
                <div id="kataSandiSection" class="hidden">
                    <form action="/admin/pengaturan_akun">
                        <label class="form-control w-full mb-5">
                            <div class="label">
                                <span class="label-text">Kata Sandi Saat ini</span>
                            </div>
                            <input type="text" placeholder="Masukkan Kata Sandi Saat ini"
                                class="input input-accent w-full" />
                        </label>
                        <label class="form-control w-full mb-5">
                            <div class="label">
                                <span class="label-text">Kata Sandi Baru</span>
                            </div>
                            <input type="text" placeholder="Masukkan Kata Sandi Baru"
                                class="input input-accent w-full" />
                        </label>
                        <label class="form-control w-full mb-5">
                            <div class="label">
                                <span class="label-text">Konfirmasi Kata Sandi Baru</span>
                            </div>
                            <input type="text" placeholder="Masukkan Konfirmasi Kata Sandi Baru"
                                class="input input-accent w-full" />
                        </label>
                        <x-button class="sm:btn-sm md:btn-md lg:btn-lg">Edit</x-button>
                        <x-button class="sm:btn-sm md:btn-md lg:btn-lg">Simpan</x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/js/pengaturan_akun.js"></script>

@endsection