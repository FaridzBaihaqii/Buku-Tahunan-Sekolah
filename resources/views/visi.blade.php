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
            background-image: url('/gambar/space1.jpg');
            background-size: cover;
            background-repeat: no-repeat; 
            /* background-color: #242528; */
            
        }
        .navbar-nav {
            margin-left: 65%;
            font-size: 20px;
            color: #fff;
       }

       .text {
        color: #fff;
        margin-top: -20px;
       }

    </style>
</head>
<body style="max-height: 100vh; overflow: hidden;">
    <div id="app">
        <nav class="navbar navbar-expand-lg">
        <img src="{{ asset('gambar/smk1.png') }}" style="width: 100px; margin-left: 50px; margin-top: 20px;">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav navbar-dark"  style="font-family: initial; width: 200%;">
                <li class="nav-item fw-bold">
                    <a class="nav-link" href="home">Home</a>
                    <li class="nav-item dropdown fw-bold">
                    <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Daftar Isi
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="kepsek">Sambutan Kepala Sekolah</a></li>
                        <li><a class="dropdown-item" href="kesiswaan">Sambutan Kesiswaan</a></li>
                        <li><a class="dropdown-item" href="osis">Sambutan Ketus OSIS</a></li>
                        <li><a class="dropdown-item" href="bts">Sambutan Ketus BTS</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown fw-bold">
                    <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profile
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="guru">Daftar Guru</a></li>
                        <li><a class="dropdown-item" href="siswa">Daftar Siswa</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown fw-bold">
                    <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Gallery
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="seragam">Baju Seragam</a></li>
                        <li><a class="dropdown-item" href="praktek">Baju Praktek</a></li>
                        <li><a class="dropdown-item" href="eskul">Estrakulikuler</a></li>
                        <li><a class="dropdown-item" href="fasilitas">Fasilitas</a></li>
                    </ul>
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

        <img src="{{ asset('gambar/box.png') }}" style="width: 65%; margin-left: 19%; margin-top: 1%;">

        <div class="">
        <h2 style="color: #fff;">Misi</h2>
            <div class="">
            </div>
        </div>

        <img src="{{ asset('gambar/alien.png') }}" style="width: 10%; margin-left: 12%; margin-top: -23%;">
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
