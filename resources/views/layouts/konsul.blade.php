<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
    <link rel="icon" type="image/png" href="/images/favicon.png">
    <link rel="stylesheet" href="/css/daisyui/daisyui.min.css">
    <link rel="stylesheet" href="/css/template/title.css">
    <script src="/js/daisyui/daisyui.min.js"></script>
    
</head>
<body>
<div class="flex-1 pt-5 mb-5">
        @yield('content')
    </div>
</body>
</html>