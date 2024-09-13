<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
    <link rel="icon" type="image/png" href="/images/favicon.png">
    <link rel="stylesheet" href="/css/template/main.css">
    <link rel="stylesheet" href="/css/daisyui/daisyui.min.css">
    <link rel="stylesheet" href="/icons/uicons/css/uicons-thin-rounded.css">
    <link rel="stylesheet" href="/icons/uicons/css/uicons-regular-rounded.css">
    <script src="/js/jquery/jquery-3.7.1.js"></script>
    <script src="/js/daisyui/daisyui.min.js"></script>
    <script defer src="/js/alpinejs/intersect_alpinejs.min.js"></script>
    <script defer src="/js/alpinejs/alpinejs.min.js"></script>
</head>

<body class="bg-slate-100 flex flex-col min-h-screen">
    <header>
        @include('components.admin_header')
        @include('components.admin_sidebar')
    </header>
    <!-- CONTENT -->
    <div class="content ml-12 transform ease-in-out duration-700 pt-16 poppins flex-1">
        @yield('content')
    </div>

    <footer>
        @include('components.admin_footer')
    </footer>

    <script src="/js/template/sidebar.js"></script>
    <script src="/js/template/alert.js"></script>
    <script src="/js/jam.js"></script>
    <script src="/js/sweetalert/sweetalert2@11.js"></script>
    <script src="/js/template/sweetAlertHapus.js"></script>
    <script src="/js/template/sweetAlertKeluar.js"></script>
</body>

</html>