@extends('layouts.admin_main')

@section('title', 'List Pembelajaran | Sudut Pajak')
@section('content')

<link rel="stylesheet" href="/css/datatables/datatables.datatables.css">
<link rel="stylesheet" href="/css/datatables/datatables.tailwindcss.css">
<script src="/js/datatables/datatables.js"></script>
<script src="/js/datatables/datatables.tailwindcss.js"></script>

<x-admin_top_panel>List Pembelajaran</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-white shadow-xl mx-16 overflow-visible -mt-10">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
            @endif
            <x-link_button href="{{ route('pembelajaran.create') }}" class="w-32 h-10 -mb-12 z-50">Tambah</x-link_button>
            <table id="data-tables" class="table bg-white z-0">
                <!-- head -->
                <thead class="min-w-full">
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th>Tipe</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pembelajaran as $index => $data)
                        <tr class="hover">
                            <th>{{ $index + 1 }}</th>
                            <td>{{ $data->judul_pembelajaran }}</td>
                            <td><div class="w-48 h-36"><img src="{{ asset($data->gambar_pembelajaran) }}" class="object-cover rounded w-48 h-36" alt="gambar"></div></td>
                            <td>{{ $data->tipe_pembelajaran }}</td>
                            <td>{{ $data->status_pembelajaran }}</td>
                            <td>
                                @if ($data->tipe_pembelajaran === 'artikel')
                                    <a href="{{ route('pembelajaran.show', $data->id_pembelajaran) }}"><i class="text-2xl fi fi-rr-eye text-green-500"></i></a><br>
                                @endif
                                <a href="{{ route('pembelajaran.edit', $data->id_pembelajaran) }}"><i class="text-2xl fi fi-rr-edit text-blue-500"></i></a>
                                <form action="{{ route('pembelajaran.destroy', $data->id_pembelajaran) }}" method="POST" class="tombol_hapus" data-name="{{ $data->judul_pembelajaran }}">
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