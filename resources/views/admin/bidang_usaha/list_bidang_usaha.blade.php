@extends('layouts.admin_main')

@section('title', 'List Usaha | Sudut Pajak')
@section('content')

<link rel="stylesheet" href="/css/datatables/datatables.datatables.css">
<link rel="stylesheet" href="/css/datatables/datatables.tailwindcss.css">
<script src="/js/datatables/datatables.js"></script>
<script src="/js/datatables/datatables.tailwindcss.js"></script>

<x-admin_top_panel>List Bidang Usaha</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-white shadow-xl mx-16 overflow-visible -mt-10">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
            @endif
            <x-link_button href="{{ route('bidang_usaha.create') }}" class="w-32 h-10 -mb-12 z-50">Tambah</x-link_button>
            <table id="data-tables" class="table bg-white z-0">
                <!-- head -->
                <thead class="min-w-full">
                    <tr>
                        <th>No</th>
                        <th class="w-48">Judul</th>
                        <th class="w-96">Deskripsi</th>
                        <th class="dt-head-left">Gambar</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bidangUsaha as $index => $data)
                    <tr class="hover">
                        <td>{{ $index + 1 }}</td>
                        <td><div class="w-48 line-clamp-2">{{ $data->judul_bidang_usaha }}</div></td>
                        <td><div class="w-96 line-clamp-4">{{ $data->deskripsi_bidang_usaha }}</div></td>
                        <td><div class="w-48 h-36"><img src="{{ asset($data->gambar_bidang_usaha) }}" class="object-cover rounded w-48 h-36" alt="gambar"></div></td>
                        <td>{{ $data->status_bidang_usaha }}</td>
                        <td>
                            <a href="{{ route('bidang_usaha.edit', $data->id_bidang_usaha) }}"><i class="text-2xl fi fi-rr-edit text-blue-500"></i></a>
                            <form action="{{ route('bidang_usaha.destroy', $data->id_bidang_usaha) }}" method="POST" class="tombol_hapus" data-name="{{ $data->judul_bidang_usaha }}">
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

<script src="/js/template/datatables014.js"></script>

@endsection