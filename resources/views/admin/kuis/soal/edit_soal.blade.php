@extends('layouts.admin_main')

@section('title', 'Edit Soal | Sudut Pajak')
@section('content')

<x-admin_top_panel>Edit Soal</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-base-100 shadow-xl mx-16 overflow-visible -mt-10">
        <x-back_link_button href="{{ url()->previous() }}" class="h-10 w-24 mx-8 mt-8">Kembali</x-back_link_button>
        <div class="card-body w-full">
            <h2 class="card-title">Form Edit Soal</h2>
            <form action="{{ route('kuis.soal.update', ['kuis' => $kuis->id_kuis, 'soal' => $soal->id_soal]) }}" method="POST">
                @csrf
                @method('PUT')

                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Pertanyaan</span>
                    </div>
                    <textarea required name="pertanyaan_soal" placeholder="Pertanyaan Soal" class="textarea textarea-accent w-full">{{ $soal->pertanyaan_soal }}</textarea>
                    <x-input-error :messages="$errors->get('pertanyaan_soal')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Skor</span>
                    </div>
                    <input required name="skor_soal" type="number" placeholder="Skor Soal" class="input input-accent w-full" value="{{ $soal->skor_soal }}" />
                    <x-input-error :messages="$errors->get('skor_soal')" class="mt-2" />
                </label>
                <label class="form-control w-full">
                    <div class="label">
                        <span class="label-text">Tipe Soal</span>
                    </div>
                    <div class="flex items-center mb-4">
                        <input type="radio" id="pilihan_ganda" name="tipe_soal" value="Pilihan Ganda" class="mr-2" {{ $soal->tipe_soal == "Pilihan Ganda" ? 'checked':'' }}>
                        <label for="pilihan_ganda" class="mr-4">Pilihan Ganda</label>
                        <input type="radio" id="esai" name="tipe_soal" value="Esai" class="mr-2" {{ $soal->tipe_soal == "Esai" ? 'checked':'' }}>
                        <label for="esai">Esai</label>
                        <x-input-error :messages="$errors->get('tipe_soal')" class="mt-2" />
                    </div>
            
                    <div id="soalPilihanGanda" class="mb-4">
                        <h3 class="text-lg font-semibold mb-2">Pilihan Ganda</h3>
                        <!-- Konten soal pilihan ganda -->
                        <div class="grid grid-rows-5 grid-flow-col gap-3">
                            <div>
                                <kbd class="kbd kbd-lg">A.</kbd>
                                <input type="text" id="pilihan_a" name="opsi_a_soal" placeholder="Isi Pilihan Ganda" class="input input-accent w-3/4" value="{{ $soal->opsi_a_soal }}" />
                                <x-input-error :messages="$errors->get('opsi_a_soal')" class="mt-2" />
                            </div>
                            <div>
                                <kbd class="kbd kbd-lg">B.</kbd>
                                <input type="text" id="pilihan_b" name="opsi_b_soal" placeholder="Isi Pilihan Ganda" class="input input-accent w-3/4" value="{{ $soal->opsi_b_soal }}" {{ $soal->opsi_a_soal != "" ? '':'disabled' }} />
                                <x-input-error :messages="$errors->get('opsi_b_soal')" class="mt-2" />
                            </div>
                            <div>
                                <kbd class="kbd kbd-lg">C.</kbd>
                                <input type="text" id="pilihan_c" name="opsi_c_soal" placeholder="Isi Pilihan Ganda" class="input input-accent w-3/4" value="{{ $soal->opsi_c_soal }}" {{ $soal->opsi_b_soal != "" ? '':'disabled' }} />
                                <x-input-error :messages="$errors->get('opsi_c_soal')" class="mt-2" />
                            </div>
                            <div>
                                <kbd class="kbd kbd-lg">D.</kbd>
                                <input type="text" id="pilihan_d" name="opsi_d_soal" placeholder="Isi Pilihan Ganda" class="input input-accent w-3/4" value="{{ $soal->opsi_d_soal }}" {{ $soal->opsi_c_soal != "" ? '':'disabled' }} />
                                <x-input-error :messages="$errors->get('opsi_d_soal')" class="mt-2" />
                            </div>
                            <div>
                                <kbd class="kbd kbd-lg">E.</kbd>
                                <input type="text" id="pilihan_e" name="opsi_e_soal" placeholder="Isi Pilihan Ganda" class="input input-accent w-3/4" value="{{ $soal->opsi_e_soal }}" {{ $soal->opsi_d_soal != "" ? '':'disabled' }} />
                                <x-input-error :messages="$errors->get('opsi_e_soal')" class="mt-2" />
                            </div>
                            <input type="radio" name="jawaban_soal" id="jawaban_a" class="radio radio-accent -ml-32 mt-3" value="a" {{ $soal->jawaban_soal == "a" ? 'checked':'' }} {{ $soal->opsi_a_soal != "" ? '':'disabled' }} />
                            <input type="radio" name="jawaban_soal" id="jawaban_b" class="radio radio-accent -ml-32 mt-3" value="b" {{ $soal->jawaban_soal == "b" ? 'checked':'' }} {{ $soal->opsi_b_soal != "" ? '':'disabled' }} />
                            <input type="radio" name="jawaban_soal" id="jawaban_c" class="radio radio-accent -ml-32 mt-3" value="c" {{ $soal->jawaban_soal == "c" ? 'checked':'' }} {{ $soal->opsi_c_soal != "" ? '':'disabled' }} />
                            <input type="radio" name="jawaban_soal" id="jawaban_d" class="radio radio-accent -ml-32 mt-3" value="d" {{ $soal->jawaban_soal == "d" ? 'checked':'' }} {{ $soal->opsi_d_soal != "" ? '':'disabled' }} />
                            <input type="radio" name="jawaban_soal" id="jawaban_e" class="radio radio-accent -ml-32 mt-3" value="e" {{ $soal->jawaban_soal == "e" ? 'checked':'' }} {{ $soal->opsi_e_soal != "" ? '':'disabled' }} />
                        </div>
                        <div class="text-right">
                            <button class="btn bg-gradient-to-r from-cyan-400 to-blue-400 hover:from-blue-300 hover:to-cyan-300 active:from-blue-200 active:to-cyan-200 focus:outline-none focus:ring focus:ring-sky-300 text-white mt-5" id="submit" {{ $soal->opsi_a_soal != "" ? '':'disabled' }} >edit</button>
                        </div>
                    </div>
                    <div id="soalEsai" class="mb-4 hidden">
                        <div class="text-right">
                            <button class="btn bg-gradient-to-r from-cyan-400 to-blue-400 hover:from-blue-300 hover:to-cyan-300 active:from-blue-200 active:to-cyan-200 focus:outline-none focus:ring focus:ring-sky-300 text-white" id="submit">edit</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>

<script src="/js/pilgan.js"></script>

@endsection