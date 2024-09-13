@extends('layouts.admin_main')

@section('title', 'List Pajak | Sudut Pajak')
@section('content')

<link rel="stylesheet" href="/css/datatables/datatables.datatables.css">
<link rel="stylesheet" href="/css/datatables/datatables.tailwindcss.css">
<script src="/js/datatables/datatables.js"></script>
<script src="/js/datatables/datatables.tailwindcss.js"></script>

<x-admin_top_panel>List Peraturan Pajak</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-white shadow-xl mx-16 overflow-visible -mt-10">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
            @endif
            <x-link_button href="{{ route('peraturan_pajak.create') }}" class="w-32 h-10 -mb-12 z-50">Tambah</x-link_button>
            <table id="data-tables" class="table bg-white z-0">
                <!-- head -->
                <thead class="min-w-full">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th class="w-72">Deskripsi</th>
                        <th>Kategori</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peraturanPajak as $index => $data)
                        <tr class="hover">
                            <th>{{ $index + 1 }}</th>
                            <td>{{ $data->judul_peraturan_pajak }}</td>
                            <td><div class="line-clamp-3">{{ $data->deskripsi_peraturan_pajak }}</div></td>
                            <td>{{ $data->kategori_peraturan_pajak }}</td>
                            <td>{{ $data->status_peraturan_pajak }}</td>
                            <td>
                                <a href="{{ route('peraturan_pajak.edit', $data->id_peraturan_pajak) }}"><i class="text-2xl fi fi-rr-edit text-blue-500"></i></a>
                                <form action="{{ route('peraturan_pajak.destroy', $data->id_peraturan_pajak) }}" method="POST" class="tombol_hapus" data-name="{{ $data->judul_peraturan_pajak }}">
                                    @csrf
                                    @method('DELETE')
                                    
                                    <button type="submit"><i class="text-2xl fi fi-rr-trash text-red-400 konfirmasi_hapus"></i></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="/js/template/datatables0134.js"></script>

@endsection