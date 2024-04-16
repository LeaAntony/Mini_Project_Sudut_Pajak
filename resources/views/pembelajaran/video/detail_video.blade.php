@extends('layouts.secondary')

@section('title', ' Detail Video Pembelajaran PPh')
@section('judulBreadcrumbs', ' Detail Video Pembelajaran PPh')
@section('breadcrumbs')


<li><a href="/layanan">Layanan</a></li>
<li><a href="/pembelajaran">Pembelajaran PPh</a></li>
<li><a href="/pembelajaran/video">Video Pembelajaran PPh</a></li>
<li>Detail Video Pembelajaran PPh</li>

@endsection


@section('content')
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-9KkotD6g5eNHkMxRSKVF5Xr3GN1YXybeu2cN6fe9AVg5QXrt+Pkj5qle11tzGzkc" crossorigin="anonymous">
</head>

<!-- Container for Video Card -->
<div class="relative mt-10 flex justify-center">
    <!-- Embedded Video -->
    <div class="relative">
        </a>
        <div class="flex justify-center">
            <iframe width="800" height="500" src="https://www.youtube.com/embed/j9_FezE9jpc" frameborder="0" allowfullscreen class="block mt-20"></iframe>
        </div>
    </div>
</div>
</br>
</br>

@endsection