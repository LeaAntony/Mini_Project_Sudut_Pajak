@extends('layouts.admin_main')

@section('title', 'Dasbor Admin | Sudut Pajak')
@section('content')

<link rel="stylesheet" href="/css/datatables/datatables.datatables.css">
<link rel="stylesheet" href="/css/datatables/datatables.tailwindcss.css">
<script src="/js/jquery/jquery-3.7.1.js"></script>
<script src="/js/datatables/datatables.js"></script>
<script src="/js/datatables/datatables.tailwindcss.js"></script>

<x-admin_top_panel>Tambah Berita</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-base-100 shadow-xl mx-16 overflow-visible -mt-10">
        <div class="card-body w-full">
            <h2 class="card-title">Form Input Berita</h2>
            <form action="/admin/berita">
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Judul</span>
                    </div>
                    <input type="text" placeholder="Judul Berita" class="input input-accent w-full" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Deskripsi</span>
                    </div>
                    <textarea placeholder="Deskripsi Berita" class="textarea textarea-accent w-full"></textarea>
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Gambar</span>
                    </div>
                    <input type="file" class="file-input file-input-bordered file-input-accent w-full" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Kategori</span>
                    </div>
                    <select class="select select-accent w-full">
                        <option value="" disabled selected>Pilih...</option>
                        <option>Artikel</option>
                        <option>Blog</option>
                    </select>
                </label>
                <x-button class="sm:btn-sm md:btn-md lg:btn-lg mt-5">Tambah</x-button>
            </form>
        </div>
    </div>
</div>

@endsection