<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<style>
    .bg-login{
        background-color: #252B48;
    }
    .bg-login:hover{
        background-color: #445069;
    }
    input::placeholder {
        color: #fff !important;
    }
    .custom-text-color {
        color: #252B48;
    }
</style>

<body>
    <img src="{{ asset('gambar/color.png') }}" style="width: 100%; z-index:-999; position:absolute; height:100%;">
    <section class="h-100 gradient-form custom-background" style="z-index: 999; position:fixed; ">
        <div class="container  h-100" style="position: relative;">
            <div class="row d-flex justify-content-center align-items-center h-100" style="margin-left: 90px;">
                <div class="col-xl-12">
                    <div class="row g-0">
                        <div class="col-lg-3">
                        <img src="{{ asset('gambar/logo.png') }}" style="width: 90px; margin-left: -70px; margin-top: -270px;">
                            <div class="text-white px-4 py-6 p-md-7">
                                <img src="{{ asset('gambar/bg.png') }}" style="width: 120%; margin-left: 120%;">
                            </div>
                        </div>
                        <div class="row col-lg-4 h-0" style="margin-left: 300px; margin-top: 30px;">
                            <div class="card-body">
                                <form method="POST">
                                    @csrf
                                    <p class="mb-2 fw-bold fs-3 custom-text-color">Login Kedalam Akun</p>
                                    <div class="form-outline mb-4">
                                        <div class="input-group">
                                            <span class="input-group-text" style="background:#252B48" >
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" fill="#fff">
                                                  <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                                                </svg>
                                            </span>
                                            <input type="text" class="form-control text-white" placeholder="Username" name="username" style="background:#252B48;"/>
                                        </div>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <div class="input-group">
                                            <span class="input-group-text" style="background:#252B48">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" fill="#fff">
                                                  <path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" />
                                                </svg>
                                            </span>
                                            <input type="password" class="form-control text-white" placeholder="Password" name="password" style="background:#252B48"/>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center pb-4">
                                        <button type="submit" class="btn w-100 text-white p-2 fw-bold fs-5 rounded-2 bg-login">LOGIN</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>