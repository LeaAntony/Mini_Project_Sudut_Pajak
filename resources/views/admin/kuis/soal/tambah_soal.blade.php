@extends('layouts.admin_main')

@section('title', 'Tambah Soal | Sudut Pajak')
@section('content')

<link rel="stylesheet" href="/css/datatables/datatables.datatables.css">
<link rel="stylesheet" href="/css/datatables/datatables.tailwindcss.css">
<script src="/js/jquery/jquery-3.7.1.js"></script>
<script src="/js/datatables/datatables.js"></script>
<script src="/js/datatables/datatables.tailwindcss.js"></script>

<x-admin_top_panel>Tambah Soal</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-base-100 shadow-xl mx-16 overflow-visible -mt-10">
        <div class="card-body w-full">
            <h2 class="card-title">Form Tambah Soal</h2>
            <form action="/admin/kuis/soal">
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Pertanyaan</span>
                    </div>
                    <textarea placeholder="Pertanyaan Soal" class="textarea textarea-accent w-full"></textarea>
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Skor</span>
                    </div>
                    <input type="number" placeholder="Skor Soal" class="input input-accent w-full" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Tipe Soal</span>
                    </div>
                    <div class="flex items-center mb-4">
                        <input type="radio" id="pilihan_ganda" name="tipe_soal" value="pilihan_ganda" class="mr-2" checked>
                        <label for="pilihan_ganda" class="mr-4">Pilihan Ganda</label>
                        <input type="radio" id="esai" name="tipe_soal" value="esai" class="mr-2">
                        <label for="esai">Esai</label>
                    </div>
            
                    <div id="soalPilihanGanda" class="mb-4">
                        <h3 class="text-lg font-semibold mb-2">Pilihan Ganda</h3>
                        <!-- Konten soal pilihan ganda -->
                        <div class="grid grid-rows-5 grid-flow-col gap-3">
                            <div>
                                <kbd class="kbd kbd-lg">A.</kbd>
                                <input type="text" id="pilihan_a" placeholder="Isi Pilihan Ganda" class="input input-accent w-3/4" />
                            </div>
                            <div>
                                <kbd class="kbd kbd-lg">B.</kbd>
                                <input type="text" id="pilihan_b" placeholder="Isi Pilihan Ganda" class="input input-accent w-3/4" disabled />
                            </div>
                            <div>
                                <kbd class="kbd kbd-lg">C.</kbd>
                                <input type="text" id="pilihan_c" placeholder="Isi Pilihan Ganda" class="input input-accent w-3/4" disabled />
                            </div>
                            <div>
                                <kbd class="kbd kbd-lg">D.</kbd>
                                <input type="text" id="pilihan_d" placeholder="Isi Pilihan Ganda" class="input input-accent w-3/4" disabled />
                            </div>
                            <div>
                                <kbd class="kbd kbd-lg">E.</kbd>
                                <input type="text" id="pilihan_e" placeholder="Isi Pilihan Ganda" class="input input-accent w-3/4" disabled />
                            </div>
                            <input type="radio" name="radio-4" id="jawaban_a" class="radio radio-accent -ml-32 mt-3" checked />
                            <input type="radio" name="radio-4" id="jawaban_b" class="radio radio-accent -ml-32 mt-3" disabled />
                            <input type="radio" name="radio-4" id="jawaban_c" class="radio radio-accent -ml-32 mt-3" disabled />
                            <input type="radio" name="radio-4" id="jawaban_d" class="radio radio-accent -ml-32 mt-3" disabled />
                            <input type="radio" name="radio-4" id="jawaban_e" class="radio radio-accent -ml-32 mt-3" disabled />
                        </div>
                    </div>
                    <div id="soalEsai" class="mb-4 hidden"></div>
                </label>
                <button class="btn bg-gradient-to-r from-cyan-400 to-blue-400 hover:from-blue-300 hover:to-cyan-300 active:from-blue-200 active:to-cyan-200 focus:outline-none focus:ring focus:ring-sky-300 text-white" id="submit" disabled >Tambah</button>
            </form>
        </div>
    </div>
</div>

<script src="/js/template/pilgan.js"></script>

@endsection