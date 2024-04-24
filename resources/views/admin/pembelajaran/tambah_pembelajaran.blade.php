@extends('layouts.admin_main')

@section('title', 'Tambah Pembelajaran | Sudut Pajak')
@section('content')

<link rel="stylesheet" href="/css/datatables/datatables.datatables.css">
<link rel="stylesheet" href="/css/datatables/datatables.tailwindcss.css">
<script src="/js/jquery/jquery-3.7.1.js"></script>
<script src="/js/datatables/datatables.js"></script>
<script src="/js/datatables/datatables.tailwindcss.js"></script>

<x-admin_top_panel>Tambah Pembelajaran</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-base-100 shadow-xl mx-16 overflow-visible -mt-10">
        <div class="card-body w-full">
            <h2 class="card-title">Form Tambah Pembelajaran</h2>
            <form action="/admin/pembelajaran">
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Judul</span>
                    </div>
                    <input type="text" placeholder="judul Pembelajaran" class="input input-accent w-full" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Tipe Pembelajaran</span>
                    </div>
                    <div class="flex items-center mb-4">
                        <input type="radio" id="artikel" name="tipe_soal" value="artikel" class="mr-2" checked>
                        <label for="artikel" class="mr-4">Artikel</label>
                        <input type="radio" id="infografis" name="tipe_soal" value="infografis" class="mr-2">
                        <label for="infografis" class="mr-4">infografis</label>
                        <input type="radio" id="video" name="tipe_soal" value="video">
                        <label for="video">Video</label>
                    </div>
            
                    <div id="tipeArtikel" class="mb-4">
                        <h3 class="text-lg font-semibold mb-2">Artikel</h3>
                        <!-- Konten soal pilihan ganda -->
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Thumbnail</span>
                            </div>
                            <input type="file" class="file-input file-input-bordered file-input-accent w-full" />
                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Isi</span>
                            </div>
                            <textarea placeholder="Isi Artikel" class="textarea textarea-accent w-full"></textarea>
                        </label>
                    </div>
                    <div id="tipeInfografis" class="mb-4 hidden">
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Gambar Infografis</span>
                            </div>
                            <input type="file" class="file-input file-input-bordered file-input-accent w-full" />
                        </label>
                    </div>
                    <div id="tipeVideo" class="mb-4 hidden">
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Thumbnail</span>
                            </div>
                            <input type="file" class="file-input file-input-bordered file-input-accent w-full" />
                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Link Video</span>
                            </div>
                            <input type="link" placeholder="Link Video Pembelajaran" class="input input-accent w-full" />
                        </label>
                    </div>
                </label>
                <button class="btn bg-gradient-to-r from-cyan-400 to-blue-400 hover:from-blue-300 hover:to-cyan-300 active:from-blue-200 active:to-cyan-200 focus:outline-none focus:ring focus:ring-sky-300 text-white" id="submit" >Tambah</button>
            </form>
        </div>
    </div>
</div>

<script src="/js/tipepembelajaran.js"></script>

@endsection