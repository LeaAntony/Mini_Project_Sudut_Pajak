<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
    <link rel="icon" type="image/png" href="./images/favicon.png">
    <link rel="stylesheet" href="./css/daisyui/full.min.css">
    <script src="./js/daisyui/full.min.js"></script>
</head>
<body class="bg-slate-200">
    <header>
        @include('components.header')
    </header>

    <div class="container">
        <main>
            @yield('content')
        </main>
    </div>

    <footer>
        @include('components.footer')
    </footer>
</body>
</html>