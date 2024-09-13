@extends('layouts.admin_main')

@section('title', 'Detail Konsultan | Sudut Pajak')
@section('content')

<x-admin_top_panel>Detail Konsultan</x-admin_top_panel>
<div class="place-items-center">
    <div class="card bg-white shadow-xl mx-16 overflow-visible -mt-10">
        <x-back_link_button href="{{ url()->previous() }}" class="h-10 w-24 mx-8 mt-8">Kembali</x-back_link_button>
        <div class="card-body grid grid-cols-12 gap-1">
            <img src="{{ asset($konsultan->foto_profil_konsultan) }}" alt="foto_profil_konsultan" class="col-span-2 w-48 object-cover">
            <div class="col-start-4 col-span-5 text-xl">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>{{ $konsultan->nama_konsultan }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>{{ $konsultan->email_konsultan }}</td>
                    </tr>
                    <tr>
                        <td>Nomor</td>
                        <td>:</td>
                        <td>{{ $konsultan->nomor_konsultan }}</td>
                    </tr>
                    <tr>
                        <td>Bio</td>
                        <td>:</td>
                        <td>{{ $konsultan->bio_konsultan }}</td>
                    </tr>
                </table>
            </div>
            <div class="col-span-4 text-xl">
                <table>
                    <tr>
                        <td>Alumnus</td>
                        <td>:</td>
                        <td>{{ $konsultan->alumnus_konsultan }}</td>
                    </tr>
                    <tr>
                        <td>Jenjang Karir</td>
                        <td>:</td>
                        <td>{{ $konsultan->jenjang_karir_konsultan }}</td>
                    </tr>
                    <tr>
                        <td>Kategori</td>
                        <td>:</td>
                        <td>{{ $konsultan->kategori_konsultan }}</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>:</td>
                        <td>{{ $konsultan->status_konsultan }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection