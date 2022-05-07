<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
                    <h2 class="fw-bold text-center h1">Iniciar Sesión</h2>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-unstyled mb-0">
                                @foreach ($errors->all() as $error)
                                    <i class="fas fa-exclamation-circle"></i>
                                    {{ $error }}
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (Session::get('success', false))
                        <?php $data = Session::get('success'); ?>
                        @if ($data)
                            <div class="alert alert-success">
                                <li class="fas fa-check"></li>
                                {{ $data }}
                            </div>
                        @endif
                    @endif
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo:</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña:</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="row mb-0">
                            <a href="{{ url('register') }}" class="h6 justify-content-start">No tienes una cuenta?,
                                Regístrate ahora</a>
                            <div class="mt-3 d-flex justify-content-center">
                                <button type="submit" class="btn btn-outline-color-logo">Iniciar Sesión</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</body>

</html>
