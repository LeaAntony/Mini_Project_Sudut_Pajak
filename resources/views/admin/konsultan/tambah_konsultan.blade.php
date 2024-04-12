@extends('layouts.admin_main')

@section('title', 'Tambah Konsultan | Sudut Konsultan')
@section('content')

<link rel="stylesheet" href="/css/datatables/datatables.datatables.css">
<link rel="stylesheet" href="/css/datatables/datatables.tailwindcss.css">
<script src="/js/jquery/jquery-3.7.1.js"></script>
<script src="/js/datatables/datatables.js"></script>
<script src="/js/datatables/datatables.tailwindcss.js"></script>

<x-admin_top_panel>Tambah Konsultan</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-base-100 shadow-xl mx-16 overflow-visible -mt-10">
        <div class="card-body w-full">
            <h2 class="card-title">Form Input Konsultan</h2>
            <form action="/admin/konsultan">
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Nama</span>
                    </div>
                    <input type="text" placeholder="Nama Konsultan" class="input input-accent w-full" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Email</span>
                    </div>
                    <input type="email" placeholder="Email Konsultan" class="input input-accent w-full" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Password</span>
                    </div>
                    <input type="password" placeholder="Password Konsultan" class="input input-accent w-full" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Bio</span>
                    </div>
                    <textarea placeholder="Bio Konsultan" class="textarea textarea-accent w-full"></textarea>
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Foto Profil</span>
                    </div>
                    <input type="file" class="file-input file-input-bordered file-input-accent w-full" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Alumnus</span>
                    </div>
                    <input type="text" placeholder="Alumnus Konsultan" class="input input-accent w-full" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Bidang</span>
                    </div>
                    <input type="text" placeholder="Bidang Konsultan" class="input input-accent w-full" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Pengalaman</span>
                    </div>
                    <input type="text" placeholder="Pengalaman Konsultan" class="input input-accent w-full" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Jenjang Karir</span>
                    </div>
                    <input type="text" placeholder="Jenjang Karir Konsultan" class="input input-accent w-full" />
                </label>
                <x-button class="sm:btn-sm md:btn-md lg:btn-lg mt-5">Tambah</x-button>
            </form>
        </div>
    </div>
</div>

@endsection