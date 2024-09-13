@extends('layouts.admin_main')

@section('title', 'List Soal | Sudut Pajak')
@section('content')

<link rel="stylesheet" href="/css/datatables/datatables.datatables.css">
<link rel="stylesheet" href="/css/datatables/datatables.tailwindcss.css">
<script src="/js/datatables/datatables.js"></script>
<script src="/js/datatables/datatables.tailwindcss.js"></script>

<x-admin_top_panel>List Soal</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-white shadow-xl mx-16 overflow-visible -mt-10">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
            @endif
            <x-link_button href="{{ route('kuis.soal.create', $kuis->id_kuis) }}" class="w-32 h-10 -mb-12 z-50">Tambah</x-link_button>
            <x-back_link_button href="{{ route('kuis.index') }}" class="h-10 w-24 -mb-12 -mt-2 mx-40 z-50">Kembali</x-back_link_button>
            <table id="data-tables" class="table bg-white z-0">
                <!-- head -->
                <thead class="min-w-full">
                    <tr>
                        <th>No</th>
                        <th>Pertanyaan</th>
                        <th>skor</th>
                        <th>tipe Soal</th>
                        <th class="w-20">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($soal as $index => $data)
                        <tr class="hover">
                            <th>{{ $index + 1 }}</th>
                            <td>{{ $data->pertanyaan_soal }}</td>
                            <td>{{ $data->skor_soal }}</td>
                            <td>{{ $data->tipe_soal }}</td>
                            <td>
                                <a href="{{ route('kuis.soal.show', ['kuis' => $kuis->id_kuis, 'soal' => $data->id_soal]) }}"><i class="text-2xl fi fi-rr-eye text-green-500"></i></a><br>
                                <a href="{{ route('kuis.soal.edit', ['kuis' => $kuis->id_kuis, 'soal' => $data->id_soal]) }}"><i class="text-2xl fi fi-rr-edit text-blue-500"></i></a>
                                <form action="{{ route('kuis.soal.destroy', ['kuis' => $kuis->id_kuis, 'soal' => $data->id_soal]) }}" method="POST" class="tombol_hapus" data-name="{{ $data->nama_soal }}">
                                    @csrf
                                    @method('DELETE')
                                    
                                    <button type="submit"><i class="text-2xl fi fi-rr-trash text-red-400"></i></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="/js/template/datatables2.js"></script>

@endsection