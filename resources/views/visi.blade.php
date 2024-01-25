<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        body {
            background-color: #242528;
            
        }
        .navbar-nav {
            margin-left: 65%;
            font-size: 20px;
            color: #fff;
       }

    </style>
</head>
<body >
    <div id="app">
        <nav class="navbar navbar-expand-lg">
        <img src="{{ asset('gambar/smk1.png') }}" style="width: 100px; margin-left: 50px; margin-top: 20px;">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav navbar-dark"  style="font-family: initial; width: 200%;">
                <li class="nav-item fw-bold">
                    <a class="nav-link" href="home">Home</a>
                </li>
                <li class="nav-item fw-bold">
                    <a class="nav-link" href="#">Daftar isi</a>
                </li>
                <li class="nav-item fw-bold">
                    <a class="nav-link" href="#">Gallery</a>
                </li>
                <li class="nav-item fw-bold">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                </ul>
            </div>
        </nav>
        <div class="" style="color: #fff; margin-left: 5%; font-family: initial; margin-top: 20px;">
            <h2>Visi</h2>
            <div class="" style="color: #fff;">
                <h3>Menjadi SMK yang menghasilkan SDM kompeten, berkarakter, dan ihsan</h3>
            </div>
        </div>

        <div class="">
            shsh
        </div>
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>