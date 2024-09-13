@extends('layouts.admin_main')

@section('title', 'Detail Soal | Sudut Pajak')
@section('content')

<x-admin_top_panel>Detail Soal</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-white shadow-xl mx-16 overflow-visible -mt-10">
        <x-back_link_button href="{{ url()->previous() }}" class="h-10 w-24 mx-8 mt-8">Kembali</x-back_link_button>
        <div class="card-body">
            <div class="text-xl">
                <table>
                    <tr>
                        <td>Pertanyaan</td>
                        <td>:</td>
                        <td>{{ $soal->pertanyaan_soal }}</td>
                    </tr>
                    <tr>
                        <td>Skor</td>
                        <td>:</td>
                        <td>{{ $soal->skor_soal }}</td>
                    </tr>
                    <tr>
                        <td>Tipe Soal</td>
                        <td>:</td>
                        <td>{{ $soal->tipe_soal }}</td>
                    </tr>
                </table>
                @if ($soal->tipe_soal === 'pilihan_ganda')
                    <div class="my-2">
                        <kbd class="kbd kbd-md">A.</kbd> {{ $soal->opsi_a_soal }}
                        @if ($soal->jawaban_soal === 'a')
                            <input type="checkbox" checked="checked" class="checkbox -mb-1"  onclick="return false;" />
                        @endif
                    </div>
                @endif
                @if ($soal->opsi_b_soal != '')
                    <div class="my-2">
                        <kbd class="kbd kbd-md">B.</kbd> {{ $soal->opsi_b_soal }}
                        @if ($soal->jawaban_soal === 'b')
                            <input type="checkbox" checked="checked" class="checkbox -mb-1"  onclick="return false;" />
                        @endif
                    </div>
                @endif
                @if ($soal->opsi_c_soal != '')
                    <div class="my-2">
                        <kbd class="kbd kbd-md">C.</kbd> {{ $soal->opsi_c_soal }}
                        @if ($soal->jawaban_soal === 'c')
                            <input type="checkbox" checked="checked" class="checkbox -mb-1"  onclick="return false;" />
                        @endif
                    </div>
                @endif
                @if ($soal->opsi_d_soal != '')
                    <div class="my-2">
                        <kbd class="kbd kbd-md">D.</kbd> {{ $soal->opsi_d_soal }}
                        @if ($soal->jawaban_soal === 'd')
                            <input type="checkbox" checked="checked" class="checkbox -mb-1"  onclick="return false;" />
                        @endif
                    </div>
                @endif
                @if ($soal->opsi_e_soal != '')
                    <div class="my-2">
                        <kbd class="kbd kbd-md">E.</kbd> {{ $soal->opsi_e_soal }}
                        @if ($soal->jawaban_soal === 'e')
                            <input type="checkbox" checked="checked" class="checkbox -mb-1"  onclick="return false;" />
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection