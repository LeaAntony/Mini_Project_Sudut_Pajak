@extends('layouts.secondary')

@section('title', 'Detail Video Pembelajaran PPh | Sudut Pajak')
@section('judulBreadcrumbs', 'Detail Video Pembelajaran PPh')
@section('breadcrumbs')
<li><a href="/layanan">Layanan</a></li>
<li><a href="/pembelajaran">Pembelajaran PPh</a></li>
<li><a href="/pembelajaran/video">Video Pembelajaran PPh</a></li>
<li>Detail Video Pembelajaran PPh</li>
@endsection

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    
<div class="mt-10 flex justify-center">
    <div class="relative flex flex-col items-center">
        <div class="container mx-auto relative">
            <iframe class="block mt-20" src="https://www.youtube.com/embed/j9_FezE9jpc" width="1000" height="562.5" frameborder="0" allowfullscreen></iframe>
        </div>
        <a href="#" class="absolute top-0 right-0 m-4 bg-gradient-to-r from-blue-500 to-green-500 text-white font-bold py-2 px-4 rounded hover:from-blue-600 hover:to-green-600 flex items-center justify-center">
            <i class="fas fa-download"></i>
        </a>
    </div>
</div>
</br>
</br>
@endsection



