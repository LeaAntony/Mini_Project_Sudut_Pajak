@extends('layouts.secondary')

@section('title', ' Detail Video Pembelajaran PPh')
@section('judulBreadcrumbs', ' Detail Video Pembelajaran PPh')
@section('breadcrumbs')

<li>Detail Video Pembelajaran PPh</li>

@endsection


@section('content')
</br>
</br>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-9KkotD6g5eNHkMxRSKVF5Xr3GN1YXybeu2cN6fe9AVg5QXrt+Pkj5qle11tzGzkc" crossorigin="anonymous">
</head>
</br>

<!-- Container for Video Card -->
<div class="relative mt-10 flex justify-center">
    <!-- Embedded Video -->
    <div class="relative">
        <a href="#" class="bg-gradient-to-r from-teal-500 to-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-gradient-to-r from-teal-600 to-blue-600 absolute top-0 right-0 z-30"> <!-- Menggunakan absolute positioning untuk menempatkan ikon download -->
            <i class="fas fa-download"></i> 
        </a>
        <div class="flex justify-center">
            <iframe width="535" height="300" src="https://www.youtube.com/embed/ujDOREoD4r0" frameborder="0" allowfullscreen class="block mt-20"></iframe>
        </div>
    </div>
</div>
</br>
</br>

@endsection


