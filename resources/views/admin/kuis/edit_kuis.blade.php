@extends('layouts.admin_main')

@section('title', 'Edit Kuis | Sudut Pajak')
@section('content')

<link rel="stylesheet" href="/css/datatables/datatables.datatables.css">
<link rel="stylesheet" href="/css/datatables/datatables.tailwindcss.css">
<script src="/js/jquery/jquery-3.7.1.js"></script>
<script src="/js/datatables/datatables.js"></script>
<script src="/js/datatables/datatables.tailwindcss.js"></script>

<x-admin_top_panel>Edit Kuis</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-base-100 shadow-xl mx-16 overflow-visible -mt-10">
        <div class="card-body w-full">
            <h2 class="card-title">Form Edit Kuis</h2>
            <form action="/admin/kuis">
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Judul</span>
                    </div>
                    <input type="text" placeholder="Judul Kuis" class="input input-accent w-full" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Waktu</span>
                    </div>
                    <input type="text" placeholder="Waktu Kuis" class="input input-accent w-full" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Jumlah Soal</span>
                    </div>
                    <input type="text" placeholder="Jumlah Soal Kuis" class="input input-accent w-full" />
                </label>
                <x-button class="sm:btn-sm md:btn-md lg:btn-lg mt-5">Edit</x-button>
            </form>
        </div>
    </div>
</div>

@endsection