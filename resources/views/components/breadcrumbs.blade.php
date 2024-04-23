<link rel="stylesheet" href="/css/template/breadcrumbs.css">

<div class="breadcrumbs place-content-center text-center font-sans text-white">
    <h1 class="text-5xl font-semibold">@yield('judulBreadcrumbs', 'My App')</h1>
    <ul class="place-content-center mt-5">
        <li><a href="/dasbor"><i class="fi fi-rr-home mr-1"></i>Beranda</a></li>
        @yield('breadcrumbs')
    </ul>
</div>