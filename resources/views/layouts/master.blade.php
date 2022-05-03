<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
    <link rel="shortcut icon" href="img/y.png">

    {{-- script --}}
    <script src="js/libs/jquery/jquery.min.js"></script>
    <script src="js/libs/daterangepicker/moment.min.js"></script>
    <script src="js/libs/daterangepicker/daterangepicker.js"></script>

    {{-- icons --}}
    <link rel="stylesheet" href="css/libs/icons/all.min.css">
    <link rel="stylesheet" href="css/libs/icons/fontawesome.min.css">

    {{-- css --}}
    <link rel="stylesheet" href="css/libs/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/libs/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="css/libs/b5/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
     {{-- TODO:preloader --}}
     <div class="content-loader">
        <div class="loader"></div>
    </div>

    {{-- TODO: menu --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}"><img class="logo" src="img/logo.png"></img></a>

            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-toggler">
                    <i class="fas fa-bars"></i> MENU</span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="{{url('/')}}"
                            ><i class="fas fa-home"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('routes')) ? 'active' : '' }}" href="#/"
                            ><i class="fas fa-route"></i> Circuitos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('family')) ? 'active' : '' }}" href="{{url('family')}}" 
                            ><i class="fas fa-male"></i><i class="fas fa-child"></i><i class="fas fa-female"></i> Familiares</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ (request()->is('couple')) ? 'active' : '' }}"" href="{{url('couple')}}"
                            ><i class="fas fa-male"></i><i class="fas fa-female"></i> Pareja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('luxury')) ? 'active' : '' }}"" href="{{url('luxury')}}"
                            ><i class="far fa-gem"></i> Lujo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('honeymoon')) ? 'active' : '' }}"" href="{{url('honeymoon')}}"
                            ><i class="fas fa-ring"></i> Luna de miel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('cheap')) ? 'active' : '' }}"" href="{{url('cheap')}}"
                            ><i class="fas fa-dollar-sign"></i> Económicos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('about-us')) ? 'active' : '' }}" href="{{url('about-us')}}"
                            data-section="menu" data-value="cheap"><i class="fas fa-info"></i> Nosotros</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- TODO: content --}}
    @yield('contenido')

    {{-- TODO: button up --}}
    <div id="button-up"><i class="fas fa-chevron-up"></i></div>

    {{-- TODO:collapse config --}}
    <div class="config-dropdown dropdown">
        <a class="nav-link" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"
                        href="#">
                        <i class="fas fa-cog"></i></a>
        <ul class="dropdown-menu animate slideIn" style="margin-top:2px;padding:10px;width:100%">
            <p for="">Preferencias</p>
            <label for="">Modo Oscuro</label>
            <li>
                <button class="switch" id="switch">
                    <span><i class="fas fa-sun"></i></span>
                    <span><i class="fas fa-moon"></i></span>
                </button>
            </li>
        </ul>
    </div>

    {{-- TODO: FOOTER --}}
    <footer >
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <p class="tittle-footer">Yoci Viajes</p>
                        <div class="info-footer">
                            <p>La intención principal de Yoci
                                Viajes es que todos los mexicanos puedan viajar y
                                disfrutar de los diferentes destinos de México, pero cuidando también que estén al
                                alcance de todos los bolsillos de los mexicanos.</p>
                        </div>
                        <div class="social-icons">
                            <span><a href="https://www.facebook.com/Yoci.Viajes" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a></span>
                            <span><a href=""><i class="fab fa-instagram"></i></a></span>
                            <span><a href=""><i class="fab fa-twitter"></i></a></span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <p class="tittle-footer">Información</p>
                        <div class="info-footer">
                            <p><a href="{{url('about-us')}}">Nosotros</a></p>
                            <p><a href="#" data-bs-toggle="modal" data-bs-target="#conditionuse">Terminos y Condiciones de Uso</a></p>
                            <p><a href="#" data-bs-toggle="modal" data-bs-target="#pyp">Política y Privacidad</a>
                            </p>
                            <p><a href="#" data-bs-toggle="modal" data-bs-target="#pdree">Política de Reembolso</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <p class="tittle-footer">Descubre</p>
                        <div class="info-footer">
                            <p><a href="{{url('family')}}">Familiares</a></p>
                            <p><a href="{{url('couple')}}">Pareja</a></p>
                            <p><a href="{{url('luxury')}}">Lujo</a></p>
                            <p><a href="{{url('honeymoon')}}">Luna de Miel</a></p>
                            <p><a href="{{url('cheap')}}">Económicos</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <p class="tittle-footer">
                            ¿Tienes Dudas?
                        </p>
                        <div class="info-footer">
                            <p><i class="fas fa-map-marker-alt"></i> <span>Supermanzana 248 Calle El Limonero, Manzana
                                    72 Lote 4 Casa No. 37 CP 77516, Cancún Quintana Roo.</span></p>
    
                            <p><i class="fas fa-clock"></i> <span>Lunes -
                                    Viernes</span> <span>09:00am - 14:00pm</span></p>
    
                            <p><i class="fas fa-phone-alt"></i> <span>998-143-8469</span></p>
                            <p><i class="fas fa-envelope"></i> <span>yociviajes@outlook.com</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
    
            <div class="pay">
                <div class="image">
                    <p>
                        <img src="img/american-express.png" alt="">
                    </p>
                    <p>
                        <img src="img/paypal.png" alt="">
                    </p>
                    <p>
                        <img src="img/mastercard.png" alt="">
                    </p>
                    <p>
                        <img src="img/visa.png" alt="">
                    </p>
                </div>
            </div>
        </div>
    </footer>
    
    {{-- TODO: Modals --}}
    <div>
        {{-- TODO: conditiuon use --}}
        <div class="modal fade" id="conditionuse" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
              <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Términos y Condiciones de Uso</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="text-align: justify;">
                        <p>Los términos y condiciones es un documento digital disponible para lo usuarios de un sitio web en el que el titular de este menciona las políticas de acceso y navegación, privacidad y protección de datos, enlaces, propiedad intelectual e industrial, legislaciones aplicables, entre otras cosas referentes a la relación entre usuario y titular.</p>
                    </div>
                </div>
            </div>
        </div>
    
        {{-- TODO: cpolitica y privaciodad --}}
        <div class="modal fade" id="pyp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
              <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Política y Privacidad</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="text-align: justify;">
                    <p data-section="footer" data-value="footer-politics-description">La política de privacidad de una página web es un documento legal en el que el titular de la web debe informar sus clientes y usuarios sobre los datos personales que se recopilan al navegar en el sitio, a través de que medios se recogen estos datos, se almacenan y sobre el tratamiento que se realizará de los mismos.</p>
                    </div>
                </div>
            </div>
        </div>
    
        {{-- TODO: cpolitica y privaciodad --}}
        <div class="modal fade" id="pdree" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
              <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Política de Reembolso</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="text-align: justify;">
                    <p data-section="footer" data-value="footer-refund-description">Tener una Política de Reembolso puede ser un gran activo para ganarte a los clientes de tu competencia, ya que les da seguridad e incrementa la confianza en tu marca. Sin embargo, debe ser una política equilibrada, ya que no quieres que tus clientes se aprovechen de ti.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @stack('scripts')
    {{-- js --}}
    <script src="js/libs/swiper/swiper-bundle.min.js"></script>
    <script src="js/pages/components.js"></script>
    <script src="js/pages/main.js"></script>
    <script src="js/libs/b5/bootstrap.bundle.min.js"></script>
    
</body>
</html>