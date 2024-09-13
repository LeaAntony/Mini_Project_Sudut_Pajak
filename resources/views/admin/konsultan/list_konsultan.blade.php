@extends('layouts.admin_main')

@section('title', 'List Konsultan | Sudut Pajak')
@section('content')

<link rel="stylesheet" href="/css/datatables/datatables.datatables.css">
<link rel="stylesheet" href="/css/datatables/datatables.tailwindcss.css">
<script src="/js/datatables/datatables.js"></script>
<script src="/js/datatables/datatables.tailwindcss.js"></script>

<x-admin_top_panel>List Konsultan</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-white shadow-xl mx-16 overflow-visible -mt-10">
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
            @endif
            <x-link_button href="{{ route('konsultan.create') }}" class="w-32 h-10 -mb-12 z-50">Tambah</x-link_button>
            <table id="data-tables" class="table bg-white z-0">
                <!-- head -->
                <thead class="min-w-full">
                    <tr>
                        <th class="w-10">No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Nomor Telepon</th>
                        <th class="dt-head-left">Foto Profil</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($konsultan as $index => $data)
                    <tr class="hover">
                        <th>{{ $index + 1 }}</th>
                        <td>{{ $data->nama_konsultan }}</td>
                        <td><div class="line-clamp-1 w-36">{{ $data->email_konsultan }}</div></td>
                        <td><div class="line-clamp-1 w-36">{{ $data->nomor_konsultan }}</div></td>
                        <td><div class="w-48 h-36"><img src="{{ asset($data->foto_profil_konsultan) }}" alt="foto_profil_konsultan" class="object-cover rounded w-48 h-36"></div></td>
                        <td>{{ $data->status_konsultan }}</td>
                        <td>
                            <a href="{{ route('konsultan.show', $data->id_konsultan) }}"><i class="text-2xl fi fi-rr-eye text-green-500"></i></a><br>
                            <a href="{{ route('konsultan.edit', $data->id_konsultan) }}"><i class="text-2xl fi fi-rr-edit text-blue-500"></i></a>
                            <form action="{{ route('konsultan.destroy', $data->id_konsultan) }}" method="POST" class="tombol_hapus" data-name="{{ $data->nama_konsultan }}">
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

<script src="/js/template/datatables014.js"></script>

@endsection