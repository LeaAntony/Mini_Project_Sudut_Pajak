@extends('layouts.admin_main')

@section('title', 'Pengaturan Akun | Sudut Pajak')
@section('content')

<link rel="stylesheet" href="/css/template/number_counter.css">

<x-admin_top_panel>Pengaturan Akun</x-admin_top_panel>
<div class="text-center">
    <div class="card bg-base-100 shadow-xl mx-16 overflow-visible -mt-10">
        <div class="card-body">
            <div>
                <h2 class="card-title mb-3">
                    <button
                        class="btn sm:btn-sm md:btn-md lg:btn-lg bg-gradient-to-r from-green-400 to-teal-400 hover:from-teal-300 hover:to-green-300 active:from-teal-200 active:to-green-200 focus:outline-none focus:ring focus:ring-emerald-300 text-white"
                        onclick="showSection('identitas')" id="identitasBtn">Identitas</button>
                    <button class="btn sm:btn-sm md:btn-md lg:btn-lg" onclick="showSection('kataSandi')"
                        id="kataSandiBtn">Kata Sandi</button>
                    <button class="btn sm:btn-sm md:btn-md lg:btn-lg" onclick="showSection('HapusAkun')"
                        id="HapusAkunBtn">Hapus Akun</button>
                </h2>
                <div id="identitasSection">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <div class="w-full">
                                @include('profile.partials.update-profile-information-form')
                            </div>
                        </div>
                    </div>
                </div>
                <div id="kataSandiSection" class="hidden">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <div class="w-full">
                                @include('profile.partials.update-password-form')
                            </div>
                        </div>
                    </div>
                </div>
                <div id="HapusAkunSection" class="hidden">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                            <div class="w-full">
                                @include('profile.partials.delete-user-form')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/js/pengaturan_akun.js"></script>

@endsection