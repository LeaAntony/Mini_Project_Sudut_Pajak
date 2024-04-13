@extends('layouts.admin_main')

@section('title', 'Edit Pajak | Sudut Pajak')
@section('content')

<link rel="stylesheet" href="/css/datatables/datatables.datatables.css">
<link rel="stylesheet" href="/css/datatables/datatables.tailwindcss.css">
<script src="/js/jquery/jquery-3.7.1.js"></script>
<script src="/js/datatables/datatables.js"></script>
<script src="/js/datatables/datatables.tailwindcss.js"></script>

<x-admin_top_panel>Edit Pajak</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-base-100 shadow-xl mx-16 overflow-visible -mt-10">
        <div class="card-body w-full">
            <h2 class="card-title">Form Edit Pajak</h2>
            <form action="/admin/pajak">
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Judul</span>
                    </div>
                    <input type="text" placeholder="Judul Pajak" class="input input-accent w-full" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Deskripsi</span>
                    </div>
                    <textarea placeholder="Deskripsi Pajak" class="textarea textarea-accent w-full"></textarea>
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">File PDF</span>
                    </div>
                    <input type="file" class="file-input file-input-bordered file-input-accent w-full" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Kategori</span>
                    </div>
                    <select class="select select-accent w-full">
                        <option value="" disabled selected>Pilih...</option>
                        <option>Peraturan Pajak Daerah</option>
                        <option>Peraturan Pajak Pusat</option>
                    </select>
                </label>
                <x-button class="sm:btn-sm md:btn-md lg:btn-lg mt-5">Edit</x-button>
            </form>
        </div>
    </div>
</div>

@endsection