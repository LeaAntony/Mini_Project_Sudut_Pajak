@extends('layouts.secondary')

@section('title', 'Detail Video Pembelajaran PPh')
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
    
<!-- Container -->
<div class="relative mt-10 flex justify-center">
    <!-- Embedded Video -->
    <div class="relative">
        <div class="container mx-auto flex justify-center items-center h-screen mt-0 relative" style="margin-top: -190px;">
            <iframe width="800" height="500" src="https://www.youtube.com/embed/j9_FezE9jpc" frameborder="0" allowfullscreen class="block mt-20"></iframe>
        </div>
        <a href="#" class="absolute top-0 right-0 m-4 bg-gradient-to-r from-teal-500 to-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-gradient-to-r from-teal-600 to-blue-600">
            <i class="fas fa-download"></i>
        </a>
    </div>
</div>
</br>
</br>

@endsection




