<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Yoci Viajes</title>
    <link rel="shortcut icon" href="img/y.png">

    {{-- JQuery --}}
    <script src="js/libs/jquery/jquery.min.js"></script>

    {{-- script --}}
    <script src="js/libs/daterangepicker/moment.min.js"></script>
    <script src="js/libs/daterangepicker/daterangepicker.js"></script>

    {{-- icons --}}
    <link rel="stylesheet" href="css/libs/icons/all.min.css">
    <link rel="stylesheet" href="css/libs/icons/fontawesome.min.css">

    {{-- css --}}
    <link rel="stylesheet" href="css/libs/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/libs/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="css/libs/b5/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
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
                        <a class="nav-link {{ (request()->is('routes')) ? 'active' : '' }}" href="{{url('routes')}}"
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


    {{-- TODO:header --}}
    <div class="hero">
        <div class="capa">
            <header>
                
            </header>
        </div>
        <div class="info">
            <h1>¿Estás listo para unas vacaciones increíbles?</h1>
            <h5>Encuentra el hotel ideal con nosotros.</h5>
            <a href="" class="start__reserve">Reservar Ahora <i class="fas fa-angle-right"></i></a>
        </div>
        <video muted autoplay loop>
            <source src="./video/bg_video.mp4" type="video/mp4">
        </video>
    </div>

    {{-- TODO: services --}}
    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="section-services">
                        <div class="tittle-services">
                            <img src="img/hotel.png" alt="">
                            <p>Hoteles Increíbles</p>
                        </div>
                        <div class="description-services">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, explicabo. Eos, dolorem?
                                Nulla laboriosam nisi eos, non praesentium sit vel aliquid voluptas id repellat eius
                                necessitatibus porro suscipit cumque ab?</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="section-services">
                        <div class="tittle-services">
                            <img src="img/tourism.png" alt="">
                            <p>Aerolíneas</p>
                        </div>
                        <div class="description-services">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, explicabo. Eos, dolorem?
                                Nulla laboriosam nisi eos, non praesentium sit vel aliquid voluptas id repellat eius
                                necessitatibus porro suscipit cumque ab?</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="section-services">
                        <div class="tittle-services">
                            <img src="img/save-money.png" alt="">
                            <p>Mejores Precios</p>
                        </div>
                        <div class="description-services">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, explicabo. Eos, dolorem?
                                Nulla laboriosam nisi eos, non praesentium sit vel aliquid voluptas id repellat eius
                                necessitatibus porro suscipit cumque ab?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- TODO: HOT DEALS --}}
    <div class="hot-deals">
        <div class="container">
            <div class="col-md-12">
                <div class="hot-sections">
                    <div class=" tittle-hot">
                        <p class="subtittle-hot">TÚ OPORTUNIDAD DE VIAJAR</p>
                        <p>
                            Promociones en Caliente
                        </p>
                    </div>

                    <div class="bar"></div>
                </div>

                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card" style="width: 100%;">
                                <p class="card-type"><i class="fas fa-fire"></i> Hot</p>
                                <figure><img src="img/merida.jpg" class="card-img-top" alt="..."></figure>
                                <div class="card-body">
                                    <h5 class="card-title">All Ritmo Cancún</h5>
                                    <p class="card-text"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i
                                        class="fas fa-star"></i> <i class="fas fa-star"></i> <i
                                        class="fas fa-star-half-alt"></i></p>
                                    
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">ALOJAMIENTO</li>
                                            <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> Cancún,
                                                Quintana Roo</li>
                                            <li class="list-group-item"></li>
                                        </ul>
                                    <a href="#" class="btn btn-primary">Reservar <i class="fas fa-suitcase-rolling"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card" style="width: 100%;">
                                <p class="card-type"><i class="fas fa-fire"></i> Hot</p>
                                <figure><img src="img/bg1-header.jpg" class="card-img-top" alt="..."></figure>
                                <div class="card-body">
                                    <h5 class="card-title">All Ritmo Cancún</h5>
                                    <p class="card-text"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i
                                        class="fas fa-star"></i> <i class="fas fa-star"></i> <i
                                        class="fas fa-star-half-alt"></i></p>
                                    
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">ALOJAMIENTO</li>
                                        <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> Cancún,
                                            Quintana Roo</li>
                                        <li class="list-group-item"></li>
                                    </ul>    
                                    <a href="#" class="btn btn-primary">Reservar <i class="fas fa-suitcase-rolling"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card" style="width: 100%;">
                                <p class="card-type"><i class="fas fa-fire"></i> Hot</p>
                                <figure><img src="img/bg1-header.jpg" class="card-img-top" alt="..."></figure>
                                <div class="card-body">
                                    <h5 class="card-title">All Ritmo Cancún</h5>
                                    <p class="card-text"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i
                                        class="fas fa-star"></i> <i class="fas fa-star"></i> <i
                                        class="fas fa-star-half-alt"></i></p>
                                    
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">ALOJAMIENTO</li>
                                        <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> Cancún,
                                            Quintana Roo</li>
                                        <li class="list-group-item"></li>
                                    </ul>   
                                    <a href="#" class="btn btn-primary">Reservar <i class="fas fa-suitcase-rolling"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- TODO: flayer --}}
    <div class="flayer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{ url('family')}}"><img src="img/flayers/flayer_family.png" alt="vacaciones en familia"></a>
                </div>
            </div>
        </div>
    </div>

    {{-- TODO: about us --}}
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="section-tittle">
                        <div class="about-tittle">
                            <p class="subtittle-about">SOBRE NOSOTROS</p>
                            <p class="tittle-about">
                                Conoce Nuestra Historia
                            </p>
                            <div class="bar"></div>
                        </div>
                    </div>
                    <div class="about-info">
                        <p data-section="about-us" data-value="about-description">Yoci Viajes es una agencia recién
                            nacida, fundada en la ciudad de Cancún Quintana Roo en el mes de Mayo del año 2021.
                            La intención principal de Yoci Viajes es que todos los mexicanos puedan viajar y disfrutar
                            de los diferentes destinos de México,
                            pero cuidando también que estén al alcance de todos los bolsillos de los mexicanos.
                            Al día de hoy Yoci Viajes sigue consolidandose en el mercado planteandose que en el 2024 sea
                            una agencia líder en el mercado turístico.</p>
                        <a href="{{url('about-us')}}" class="btn more"><span>Ver más</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="photos">
                        <figure><img src="img/yoci1.jpg" alt=""></figure>
                        <figure><img src="img/yoci2.jpg" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- TODO: flayer --}}
    <div class="flayer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <a href="honeymoon"><img src="img/flayers/honey.png" alt="luna de miel"></a>
                </div>
            </div>
        </div>
    </div>

    {{-- TODO: top destinations --}}
    <div class="top-destinations">
        <div class="container">
            <div class="col-md-12">
                <div class="top-sections">
                    <div class=" tittle-top">
                        <p class="subtittle-top">DESTINOS POPULARES</p>
                        <p>
                            Encuentra Increíbles Lugares Para Visitar
                        </p>
                    </div>

                    <div class="bar"></div>
                </div>

                <div class="swiper topD">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card" style="width: 100%;">
                                <p class="card-type"><i class="fas fa-medal"></i> Popular</p>
                                <figure><img src="img/cancun.jpg" class="card-img-top" alt="..."></figure>
                                <div class="card-body">
                                    <h5 class="card-title">01. Cancún</h5>
                                    <p class="card-text" data-section="top-destinations" data-value="cancun-description"> Cancún es una ciudad de México ubicada en la península de Yucatán que limita con el mar Caribe y que es conocida por sus playas, los numerosos centros turísticos y la vida nocturna.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card" style="width: 100%;">
                                <p class="card-type"><i class="fas fa-medal"></i> Popular</p>
                                <figure><img src="img/cdcarmen.webp" class="card-img-top" alt="..."></figure>
                                <div class="card-body">
                                    <h5 class="card-title">02. Ciudad Del Carmen</h5>
                                    <p class="card-text" data-section="top-destinations" data-value="cd-carmen-description">Ciudad del Carmen es una ciudad del sureste de México. Se ubica en la Isla del Carmen, entre el golfo de México y la Laguna de Términos, un área protegida con delfines y tortugas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card" style="width: 100%;">
                                <p class="card-type"><i class="fas fa-medal"></i> Popular</p>
                                <figure><img src="img/cozumel.webp" class="card-img-top" alt="..."></figure>
                                <div class="card-body">
                                    <h5 class="card-title">03. Cozumel</h5>
                                    <p class="card-text" data-section="top-destinations" data-value="cozumel-description">Cozumel es una isla mexicana en el Caribe en su mayoría no desarrollada y es un puerto popular para cruceros, famosa por sus sitios de buceo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card" style="width: 100%;">
                                <p class="card-type"><i class="fas fa-medal"></i> Popular</p>
                                <figure><img src="img/merida.jpg" class="card-img-top" alt="..."></figure>
                                <div class="card-body">
                                    <h5 class="card-title">04. Mérida</h5>
                                    <p class="card-text" data-section="top-destinations" data-value="merida-description">Mérida, la animada capital del estado de Yucatán en México, tiene una rica herencia maya y colonial.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card" style="width: 100%;">
                                <p class="card-type"><i class="fas fa-medal"></i> Popular</p>
                                <figure><img src="img/veracruz.webp" class="card-img-top" alt="..."></figure>
                                <div class="card-body">
                                    <h5 class="card-title">05. Veracruz</h5>
                                    <p class="card-text" data-section="top-destinations" data-value="veracruz-description">Es uno de los puertos más antiguos y grandes del país, fundado en el siglo XVI por colonizadores españoles.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card" style="width: 100%;">
                                <p class="card-type"><i class="fas fa-medal"></i> Popular</p>
                                <figure><img src="img/villahermosa.webp" class="card-img-top" alt="..."></figure>
                                <div class="card-body">
                                    <h5 class="card-title">06. Villahermosa</h5>
                                    <p class="card-text" data-section="top-destinations" data-value="villahermosa-description">Villahermosa es sede del Parque-Museo La Venta, un museo al aire libre a un costado del lago con artefactos de la civilización olmeca, entre ellos altares y cabezas de piedra.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- TODO: ready reserve --}}
    <div class="ready__reserve">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <img src="img/ready_reserve.jpg" class="card-img-top" alt="reserva">
                        <label for="">Haz click en el siguiente botón para reservar:</label>
                        <a href="#/" class="btn-ready">RESERVAR HOTEL</a>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    {{-- TODO:APP --}}
    <div class="app">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-7 col-xs-12">
                    <div class="info-app">
                        <p class="subtittle-app">NUESTRA APP</p>
                        <p class="tittle-app">
                            Descarga Ahora
                        </p>
                    </div>
                    <div class="description-app">
                        <p class="sub-sub-app">
                            Navega y descubre nuevas oportunidades desde la palma de tu mano.
                        </p>
                        <p>
                            Descarga nuestra app y encuentra más ofertas para cotizar tus hoteles favoritos.
                        </p>
                        <p class="download-app">
                            <a href="https://play.google.com/store?hl=es_MX&gl=US" target="_blank"><img
                                    src="img/playstore.png" alt="appstore"></a>
                            <a href="https://www.apple.com/mx/app-store/" target="_blank"><img src="img/appstore.png"
                                    alt="applestore"></a>
                            {{-- <a href="https://consumer.huawei.com/es/campaign/appgallery/" target="_blank"><img src="img/appgalery.png" alt=""></a> --}}
                            <a class="qr"><img src="img/qr-yoci.png" alt="codeqr"></a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-xs-12">
                    <div class="image">
                        <img src="img/app.png" alt="app yoci viajes">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- TODO: flayer --}}
    <div class="flayer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="img/flayers/tarjet.png" alt="pay">
                </div>
            </div>
        </div>
    </div>
    

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

    {{-- js --}}
    <script src="js/libs/swiper/swiper-bundle.min.js"></script>
    <script src="js/pages/main.js"></script>
    <script src="js/pages/components.js"></script>
    <script src="js/pages/index.js"></script>
    <script src="js/libs/b5/bootstrap.bundle.min.js"></script>

</body>

</html>
