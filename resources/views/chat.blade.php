@extends('layouts.konsul')

@section('title', 'Konsultasi')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="container mx-auto flex justify-center items-center h-screen">
    <div class="card w-96 bg-base-1000 shadow-xl h-screen">
        <div class="card-body">
            <div class="ml-0 flex items-center">
                <a href="/detail_kategori">
                    <i class="fa-solid fa-arrow-left mr-4"></i></a>
                <img src="/images/konsultasi/pakar-1.jpg" class="w-14 h-15 mr-4 rounded-full" alt="Pakar">
                <div>
                    <p class="font-bold text-sm">Drs. Hakase Miurae PPh Badan</p>
                    <p class="font-semibold text-sm">Active now</p>
                </div>

            </div>
            <hr class="w-full border-gray-300">
            <p></p>
            <hr class="w-full border-gray-300">
            <div class="flex justify-end">
                <input type="text" placeholder="Type a message here..." class="input input-bordered w-full max-w-xs">
                <div class="bg-gray-300 rounded-md p-2 ml-2 flex items-center">
                    <a href="#">
                        <i class="fa-solid fa-paper-plane"></i></a>
                </div>
            </div>
        </div>
    </div>

@endsection