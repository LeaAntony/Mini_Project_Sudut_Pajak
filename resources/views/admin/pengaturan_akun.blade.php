@extends('layouts.admin_main')

@section('title', 'Pengaturan Akun | Sudut Pajak')
@section('content')

<link rel="stylesheet" href="/css/template/number_counter.css">

<x-admin_top_panel>Pengaturan Akun</x-admin_top_panel>
<div class="text-center">
    <div class="card bg-base-100 shadow-xl mx-16 overflow-visible -mt-10">
        <div class="card-body">
            <div>
                <h2 class="card-title">Identitas</h2>
                <form action="/admin/usaha">
                    <div class="grid grid-rows-2 grid-flow-col gap-3">
                        <label class="form-control w-full">
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
            <hr class="my-5">
            <div>
                <h2 class="card-title">Foto</h2>
                <form action="/admin/usaha">
                    <div class="avatar">
                        <div class="w-24 rounded-full">
                            <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                        </div>
                    </div>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Nama</span>
                        </div>
                        <input type="file" class="file-input file-input-bordered file-input-accent w-full" />
                    </label>
                    <x-button class="sm:btn-sm md:btn-md lg:btn-lg mt-5">Edit</x-button>
                    <x-button class="sm:btn-sm md:btn-md lg:btn-lg mt-5">Simpan</x-button>
                </form>
            </div>
            <hr class="my-5">
            <div>
                <h2 class="card-title">Kata Sandi</h2>
                <form action="/admin/usaha">
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Kata Sandi Saat ini</span>
                        </div>
                        <input type="text" placeholder="Masukkan Kata Sandi Saat ini" class="input input-accent w-full" />
                    </label>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Kata Sandi Baru</span>
                        </div>
                        <input type="text" placeholder="Masukkan Kata Sandi Baru" class="input input-accent w-full" />
                    </label>
                    <label class="form-control w-full">
                        <div class="label">
                            <span class="label-text">Konfirmasi Kata Sandi Baru</span>
                        </div>
                        <input type="text" placeholder="Masukkan Konfirmasi Kata Sandi Baru" class="input input-accent w-full" />
                    </label>
                    <x-button class="sm:btn-sm md:btn-md lg:btn-lg mt-5">Edit</x-button>
                    <x-button class="sm:btn-sm md:btn-md lg:btn-lg mt-5">Simpan</x-button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection