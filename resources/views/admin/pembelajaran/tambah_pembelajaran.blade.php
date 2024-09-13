@extends('layouts.admin_main')

@section('title', 'Tambah Pembelajaran | Sudut Pajak')
@section('content')

<x-admin_top_panel>Tambah Pembelajaran</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-base-100 shadow-xl mx-16 overflow-visible -mt-10">
        <x-back_link_button href="{{ url()->previous() }}" class="h-10 w-24 mx-8 mt-8">Kembali</x-back_link_button>
        <div class="card-body w-full">
            <h2 class="card-title">Form Tambah Pembelajaran</h2>
            <form action="{{ route('pembelajaran.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Judul</span>
                    </div>
                    <input required type="text" name="judul_pembelajaran" placeholder="judul Pembelajaran" class="input input-accent w-full" />
                    <x-input-error :messages="$errors->get('judul_pembelajaran')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Tipe Pembelajaran</span>
                    </div>
                    <div class="flex items-center mb-4">
                        <input type="radio" id="artikel" name="tipe_pembelajaran" value="Artikel" class="mr-2" checked>
                        <label for="artikel" class="mr-4">Artikel</label>
                        <input type="radio" id="infografis" name="tipe_pembelajaran" value="Infografis" class="mr-2">
                        <label for="infografis" class="mr-4">infografis</label>
                        <input type="radio" id="video" name="tipe_pembelajaran" value="Video">
                        <label for="video">Video</label>
                    </div>
            
                    <div id="tipeArtikel" class="mb-4">
                        <h3 class="text-lg font-semibold mb-2">Artikel</h3>
                        <!-- Konten soal pilihan ganda -->
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Thumbnail</span>
                            </div>
                            <input required type="file" id="gambarArtikel" name="gambar_pembelajaran" class="file-input file-input-bordered file-input-accent w-full" />
                            <x-input-error :messages="$errors->get('gambar_pembelajaran')" class="mt-2" />
                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Isi</span>
                            </div>
                            <textarea required id="isiArtikel" name="isi_artikel_pembelajaran" placeholder="Isi Artikel" class="textarea textarea-accent w-full"></textarea>
                            <x-input-error :messages="$errors->get('isi_artikel_pembelajaran')" class="mt-2" />
                        </label>
                    </div>
                    <div id="tipeInfografis" class="mb-4 hidden">
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Gambar Infografis</span>
                            </div>
                            <input type="file" id="gambarInfografis" class="file-input file-input-bordered file-input-accent w-full" />
                            <x-input-error :messages="$errors->get('gambar_pembelajaran')" class="mt-2" />
                        </label>
                    </div>
                    <div id="tipeVideo" class="mb-4 hidden">
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Thumbnail</span>
                            </div>
                            <input type="file" id="gambarVideo" class="file-input file-input-bordered file-input-accent w-full" />
                            <x-input-error :messages="$errors->get('gambar_pembelajaran')" class="mt-2" />
                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Link Video</span>
                            </div>
                            <input type="url" id="linkVideo" name="link_video_pembelajaran" placeholder="Link Video Pembelajaran" class="input input-accent w-full" />
                            <x-input-error :messages="$errors->get('link_video_pembelajaran')" class="mt-2" />
                        </label>
                    </div>
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Status</span>
                    </div>
                    <div>
                        <input type="radio" name="status_pembelajaran" value="Aktif" class="radio radio-info" checked /> Aktif
                        <input type="radio" name="status_pembelajaran" value="Non-Aktif" class="radio radio-info" /> Non-Aktif
                    </div>
                    <x-input-error :messages="$errors->get('status_pembelajaran')" class="mt-2" />
                </label>
                <div class="text-right">
                    <x-button type="submit" class="sm:btn-sm md:btn-md lg:btn-lg mt-5">Tambah</x-button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="/js/pembelajaran.js"></script>

@endsection