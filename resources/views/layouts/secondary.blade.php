<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
    <link rel="icon" type="image/png" href="/images/favicon.png">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/daisyui/full.min.css">
    <link rel="stylesheet" href="/css/fontawesome/all.min.css">
    <link rel="stylesheet" href="/css/template/title.css">
    <link rel="stylesheet" href="/css/template/footer.css">
    <script src="/js/daisyui/full.min.js"></script>
    <script src="/js/fontawesome/all.min.js"></script>
</head>
<body class="bg-slate-100">
    <header>
        @include('components.header')
    </header>

    <div class="pt-28 main-content">
        @include('components.breadcrumbs')
        @yield('content')
    </div>

    <footer>
        @include('components.footer')
    </footer>
</body>
</html>