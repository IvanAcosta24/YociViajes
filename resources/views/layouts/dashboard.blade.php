<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    {{-- styles --}}
    <link rel="stylesheet" href="{{ asset('css/libs/b5/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/panel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/libs/sweetalert2/sweetalert2.min.css') }}">
    {{-- icons --}}
    <link rel="stylesheet" href="{{ asset('css/libs/icons/all.min.css') }}">

    {{-- scripts --}}
    <script src="{{ asset('js/libs/vue/vue.js') }}"></script>
    <script src="{{ asset('js/libs/vue/vue-resource.min.js') }}"></script>
    <script src="{{ asset('js/libs/sweetalert2/sweetalert2.min.js') }}"></script>



</head>

<body>
    <nav class="sidebar close dark">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="{{ asset('img/logo.png') }}" alt="">
                </span>
                <div class="text logo-text">
                    <span class="name">Administrador</span>
                    {{-- <span class="profession">Web developer</span> --}}
                </div>
            </div>
            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links p-0">
                    <li class="">
                        <a href="#">
                            <i class="fas fa-file-upload icon"></i>
                            <span class="text nav-text">Flyers</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class="fas fa-sign-out-alt icon"></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                {{-- <li class="mode">
                    <div class="sun-moon">
                        <i class='far fa-moon icon moon'></i>
                        <i class='far fa-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li> --}}
            </div>
        </div>
    </nav>

    <section class="home">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h1>Hoa</h1>
                </div>
            </div>
        </div>
    </section>

    @stack('scripts')
    <script src="{{ asset('js/libs/b5/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/libs/jquery/jquery-3.6.0.js') }}"></script>
    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            // searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");


        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })

        // searchBtn.addEventListener("click", () => {
        //     sidebar.classList.remove("close");
        // })

        // modeSwitch.addEventListener("click", () => {
        //     body.classList.toggle("dark");

        //     if (body.classList.contains("dark")) {
        //         modeText.innerText = "Light mode";
        //     } else {
        //         modeText.innerText = "Dark mode";

        //     }
        // });
    </script>
</body>

</html>
