<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
    <link rel="icon" type="image/png" href="/images/favicon.png">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/daisyui/daisyui.min.css">
    <link rel="stylesheet" href="/icons/uicons/css/uicons-thin-rounded.css">
    <link rel="stylesheet" href="/icons/uicons/css/uicons-regular-rounded.css">
    <link rel="stylesheet" href="/icons/uicons/css/uicons-brands.css">
    <link rel="stylesheet" href="/css/template/title.css">
    <link rel="stylesheet" href="/css/template/footer.css">
    <script src="/js/daisyui/daisyui.min.js"></script>
    
</head>
<body class="bg-slate-100 flex flex-col min-h-screen">
    <header>
        @include('components.header')
    </header>

    <div class="flex-1 pt-28 poppins">
        @yield('content')
    </div>

    <footer>
        @include('components.footer')
    </footer>
</body>
</html>