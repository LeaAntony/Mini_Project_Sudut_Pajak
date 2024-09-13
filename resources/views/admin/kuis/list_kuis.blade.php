@extends('layouts.admin_main')

@section('title', 'List Kuis | Sudut Pajak')
@section('content')

<link rel="stylesheet" href="/css/datatables/datatables.datatables.css">
<link rel="stylesheet" href="/css/datatables/datatables.tailwindcss.css">
<script src="/js/datatables/datatables.js"></script>
<script src="/js/datatables/datatables.tailwindcss.js"></script>

<x-admin_top_panel>List Kuis</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-white shadow-xl mx-16 overflow-visible -mt-10">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
            @endif
            <x-link_button href="{{ route('kuis.create') }}" class="w-32 h-10 -mb-12 z-50">Tambah</x-link_button>
            <table id="data-tables" class="table bg-white z-0">
                <!-- head -->
                <thead class="min-w-full">
                    <tr>
                        <th class="w-10">No</th>
                        <th>Judul</th>
                        <th>Waktu</th>
                        <th>Jumlah Soal</th>
                        <th>Status</th>
                        <th class="w-20">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kuis as $index => $data)
                        <tr class="hover">
                            <th>{{ $index + 1 }}</th>
                            <td>{{ $data->judul_kuis }}</td>
                            <td>{{ $data->waktu_kuis }} menit</td>
                            <td>{{ $data->jumlah_soal_kuis }} soal</td>
                            <td>{{ $data->status_kuis }}</td>
                            <td>
                                <a href="{{ route('kuis.soal.index', $data->id_kuis) }}"><i class="text-2xl fi fi-rr-eye text-green-500"></i></a><br>
                                <a href="{{ route('kuis.edit', $data->id_kuis) }}"><i class="text-2xl fi fi-rr-edit text-blue-500"></i></a>
                                <form action="{{ route('kuis.destroy', $data->id_kuis) }}" method="POST" class="tombol_hapus" data-name="{{ $data->nama_kuis }}">
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