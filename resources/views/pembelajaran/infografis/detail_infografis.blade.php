@extends('layouts.secondary')

@section('title', 'Infografis Pembelajaran PPh')
@section('judulBreadcrumbs', 'Infografis Pembelajaran PPh')
@section('breadcrumbs')
<li>Detail Infografis Pembelajaran PPh</li>
@endsection

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="container mx-auto flex justify-center items-center h-screen mt-0 relative">
    <a href="#"
        class="bg-gradient-to-r from-teal-500 to-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-gradient-to-r from-teal-600 to-blue-600 absolute top-0 right-12 mt-7 mr-80 z-10">
        <i class="fas fa-download mr-2"></i>
    </a>
    <div class="card card-compact w-120 bg-base-100 shadow-xl rounded-none mt-20">
        <div class="card-body">
            <figure>
                <img src="https://betta.ortax.org/storage/files/images/info/Infografis%20menghitung%20PPh%2021-01.jpg"
                    alt="infografis menghitung pph 21" style="max-width: 100%; height: 500px; margin-top: 5px;" />
            </figure>
            <div class="card-actions justify-end">
            </div>
        </div>
    </div>
</div>
</div>
@endsection