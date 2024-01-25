<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="...">
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
                    <a class="nav-link" href="visi">Visi Misi</a>
                    <li class="nav-item dropdown fw-bold">
                    <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Daftar Isi
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Sambutan Kepala Sekolah</a></li>
                        <li><a class="dropdown-item" href="">Sambutan Kesiswaan</a></li>
                        <li><a class="dropdown-item" href="">Sambutan Ketus OSIS</a></li>
                        <li><a class="dropdown-item" href="">Sambutan Ketus BTS</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown fw-bold">
                    <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Profile
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Daftar Guru</a></li>
                        <li><a class="dropdown-item" href="">Daftar Siswa</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown fw-bold">
                    <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Gallery
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Baju Seragam</a></li>
                        <li><a class="dropdown-item" href="">Baju Praktek</a></li>
                        <li><a class="dropdown-item" href="">Estrakulikuler</a></li>
                        <li><a class="dropdown-item" href="">Fasilitas</a></li>
                    </ul>
                </li>
                </ul>
            </div>
        </nav>
</body>
</html>