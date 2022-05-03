<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    {{-- css --}}
    <link rel="stylesheet" href="{{ asset('css/libs/b5/bootstrap.min.css') }}">
    {{-- icons --}}
    <link rel="stylesheet" href="{{ asset('css/libs/icons/all.min.css') }}">

    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
        }

        :root {
            --bs-logo: #00c2ca;
        }

        .bg {
            background-image: url(img/bg.jpg);
            background-position: center center;
            background-size: cover;
        }

        .btn-outline-color-logo {
            color: var(--bs-logo);
            border-color: var(--bs-logo) !important;
            transition: all 300ms ease;
        }

        .btn-outline-color-logo:hover {
            color: #fff !important;
            background-color: var(--bs-logo);
            border-color: var(--bs-logo);
        }

    </style>
</head>

<body>

    <div class="container w-75 bg-dark rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded shadow">
            </div>
            <div class="col bg-white p-5 rounded-end">
                <div class="text-end">
                    <a href="{{ url('/') }}">
                        <img class="rounded-circle shadow" src="{{ asset('img/logo.png') }}" width="70px" height="70px"
                            alt="logo">
                    </a>
                </div>
                <h1 class="text-center h5 text-uppercase" style="color: #02c3ca">Yoci Viajes</h2>
                    <h2 class="fw-bold text-center h1">Regístrate</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-2">
                            <label for="name" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                            @if ($errors->has('name'))
                                <span class="text-danger">
                                    <i class="fas fa-times-circle"></i> {{ $errors->first('name') }}
                                </span>
                            @endif
                        </div>
                        <div class="mb-2">
                            <label for="last_name" class="form-label">Apellidos:</label>
                            <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}"
                                required>
                            @if ($errors->has('last_name'))
                                <span class="text-danger">
                                    <i class="fas fa-times-circle"></i> {{ $errors->first('last_name') }}
                                </span>
                            @endif
                        </div>
                        <div class="mb-2">
                            <label for="email" class="form-label">Correo:</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                required>
                            @if ($errors->has('email'))
                                <span class="text-danger">
                                    <i class="fas fa-times-circle"></i> {{ $errors->first('email') }}
                                </span>
                            @endif
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">Contraseña:</label>
                            <input type="password" class="form-control" name="password"
                                value="{{ old('password') }}" required>
                            @if ($errors->has('password'))
                                <span class="text-danger">
                                    <i class="fas fa-times-circle"></i> {{ $errors->first('password') }}
                                </span>
                            @endif
                        </div>
                        <div class="row mb-0">
                            <a href="{{ url('login') }}" class="h6 justify-content-start">Ya tienes una cuenta?,
                                Inicia sesión ahora</a>
                            <div class="mt-3 d-flex justify-content-center">
                                <button type="submit" class="btn btn-outline-color-logo">Guardar</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</body>

</html>
