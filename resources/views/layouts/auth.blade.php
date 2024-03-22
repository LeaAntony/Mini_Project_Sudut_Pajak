<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
    <link rel="icon" type="image/png" href="./images/favicon.png">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/daisyui/full.min.css">
    <link rel="stylesheet" href="./css/template/title.css">
    <script src="./js/daisyui/full.min.js"></script>
</head>

<body>
    <div class="container my-20 mx-auto">
        <div class="grid grid-cols-12 gap-6">
            <div class="place-items-center col-span-7">
                <img src="./images/auth.png" alt="">
            </div>
            <div class="col-span-5">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>