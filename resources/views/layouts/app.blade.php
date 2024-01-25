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
                    <a class="nav-link" href="visi">Visi</a>
                </li>
                <li class="nav-item dropdown fw-bold">
                <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Daftar Isi
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="">Action</a></li>
                    <li><a class="dropdown-item" href="">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
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
        <div class="" style="color: #fff; margin-left: 15%; font-family: initial; margin-top: 50px;">
            <h1>SMKN 1 KOTA BEKASI</h1>
            <div class="" style="color: #fff;">
                <h2>Alumni Angkatan 25</h2>
            </div>
        </div>

        <div class="scroll-down-btn" style="margin-left: 47%; margin-top: 23%;">
            <a href="visi" class="btn btn-secondary btn-lg" style="color: #fff;">Scroll Down</a>
        </div>
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".scroll-down-btn a").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){
                        window.location.hash = hash;
                    });
                }
            });
        });
    </script>
</body>
</html>
