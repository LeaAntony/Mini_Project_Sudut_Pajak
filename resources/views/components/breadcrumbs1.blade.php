<link rel="stylesheet" href="./css/template/breadcrumbs.css">

<div class="breadcrumbs place-content-center text-center font-sans text-white">
    <h1 class="text-5xl font-semibold">@yield('title', 'My App')</h1>
    <ul class="place-content-center mt-5">
        <li><a href="/"><i class="fa fa-house mr-1"></i>Beranda</a></li>
        <li>@yield('title', 'My App')</li>
    </ul>
</div>