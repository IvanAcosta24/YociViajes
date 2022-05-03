@extends('layouts.master')
@section('titulo','Yoci Viajes | Nosotros')
@section('contenido')

{{-- TODO:history --}}
<div class="info-yoci">
    <div class="container">
        <p class="tittle-info">
            {{__('Sobre Nosotros')}}
        </p>
        <div class="bar"></div>
        <div class="row">
            <div class="col-lg-7">
                <div class="info-history">
                    <p>Yoci Viajes es una agencia minorista, fundada en la ciudad de Cancún Quintana Roo en el año
                        2021 en el mes de Mayo.
                        <br> La intención principal de Yoci Viajes es que todos los mexicanos puedan viajar y
                        disfrutar de los diferentes destinos de México ofreciendo los mejores precios del mercado.
                        <br> Al día de hoy Yoci Viajes sigue consolidandose en el mercado planteandose que en el
                        2024 sea una agencia líder en el mercado turístico.
                        <br> Contamos con proveedores de gran prestigio a nivel nacional y a nivel mundial como lo
                        son Record Vacation, Imacop Tour, Hotel Beds, Expedia, Grupo Xcaret, entre otros. Trabajamos
                        todos los días para poder brindar el mejor servicio, el mejor precio y la mejor atencion.
                    </p>
                </div>
                <div class="row mv">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Nuestra Musión
                                </h5>
                                <p class="card-text">Ofrecer servicios turísticos al que estén al alcance del
                                    mercado mexicano y satisfacer el deseo de los clientes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    Nuestra Visión
                                </h5>
                                <p class="card-text">Ser agencia líder en el 2024 en servicios turísticos en la
                                    península de Yucatán.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <figure><img src="img/yoci1.jpg" alt=""></figure>
            </div>
        </div>
    </div>
</div>

{{-- TODO:objetivos --}}
<div class="obj-general">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12">
                <img src="img/obj-general.svg" alt="">
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12 info-obj">
                <p class="tittle-obj">
                    Nuestros Objetivos
                </p>
                <div class="bar-obj"></div>

                <ul class="list-obj">
                    <li><i class="fas fa-check-circle"></i> <label>Posicionar a Yoci Viajes en el 2024 como una de
                            las principales agencias de viajes en la península de Yucatán.</label></li>
                    <li><i class="fas fa-check-circle"></i> <label>Aumentar las utilidades a un 30% para diciembre
                            del 2022 y un 50% para el 2023.</label></li>
                    <li><i class="fas fa-check-circle"></i> <label>Realizar contenido de mercadotecnia para que la
                            agencia se pueda dar a conocer.</label></li>
                    <li><i class="fas fa-check-circle"></i> <label>Apertura sucursal en la ciudad de Mérida.</label>
                    </li>
                    <li><i class="fas fa-check-circle"></i> <label>Mejorar el manejo de atracción de clientes y
                            cierre de ventas.</label></li>
                    <li><i class="fas fa-check-circle"></i> <label>Crear pagina web que permita a los clientes
                            reservar sus viajes.</label></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="ventajas">
    <div class="container">
        <p class="tittle-ventajas">
            Ventajas de usar nuestro servicio
        </p>
        <div class="bar"></div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <span><i class="fas fa-hotel"></i></span>
                    </div>
                    <div class="card-body">
                        <h5>
                            HOTELES
                        </h5>
                        <p class="card-text">Encuentra más de cientos de hoteles nacionales para alojarte.
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <span><i class="fas fa-bed"></i></span>
                    </div>
                    <div class="card-body">
                        <h5>
                            HABITACIONES
                        </h5>
                        <p class="card-text">Consulta y reserva las mejores habitaciones de los hoteles de tú preferencia.
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <span><i class="fas fa-route"></i></span>
                    </div>
                    <div class="card-body">
                        <h5>
                            TOURS
                        </h5>
                        <p class="card-text">Contamos con los mejores destinos y tours nacionales para divertirte.
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <span><i class="fas fa-plane"></i></span>
                    </div>
                    <div class="card-body">
                        <h5>
                            VUELOS
                        </h5>
                        <p class="card-text">Viaja con las mejores aerolineas de México.
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <span><i class="fas fa-bus"></i></span>
                    </div>
                    <div class="card-body">
                        <h5>
                            TRANSLADO
                        </h5>
                        <p class="card-text">El servicio de translado cuenta con las mejores comodidades para tu viaje.
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <span><i class="fas fa-hand-holding-usd"></i></span>
                    </div>
                    <div class="card-body">
                        <h5>
                            PRECIO
                        </h5>
                        <p class="card-text">Tenemos las mejores promociones a los mejores precios.
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <span><i class="fas fa-money-check"></i></span>
                    </div>
                    <div class="card-body">
                        <h5>
                            PAGOS EN LÍNEA
                        </h5>
                        <p class="card-text">Realiza tus pagos en línea con tarjeta de crédito con la mejor seguridad.
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="card">
                    <div class="card-header">
                        <span><i class="fas fa-headset"></i></span>
                    </div>
                    <div class="card-body">
                        <h5>
                            ATENCIÓN AL CLIENTE
                        </h5>
                        <p class="card-text">Respondemos todas tus dudas con el mejor trato.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- TODO:politicas --}}
<div class="politics-yoci">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-6 col-md-6 col-xs-12 info-poli">
                <p class="tittle-poli">Políticas de Yoci Viajes</p>
                <div class="bar-poli"></div>

                <ul class="list-poli">
                    <li><i class="fas fa-asterisk"></i> <label>Brindar la mejor atención al cliente respondiendo siempre a sus preguntas.</label></li>
                    <li><i class="fas fa-asterisk"></i> <label>Brindar soluciones de viajes a los clientes.</label></li>
                    <li><i class="fas fa-asterisk"></i> <label>Fomentar la confianza a los clientes para que reserven con Yoci Viajes.</label></li>
                    <li><i class="fas fa-asterisk"></i> <label>Apertura sucursal en la ciudad de Mérida.</label>
                    </li>
                    <li><i class="fas fa-asterisk"></i> <label>Seguir los procedimientos correctos evitando malos entendidos con ls clientes y con los compañeros de trabajo.</label></li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12">
                <img src="img/politics.svg" alt="">
            </div>
        </div>
    </div>
</div>

{{-- TODO: flayer --}}
<div class="flayer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img src="img/flayers/tarjet.png" alt="">
            </div>
        </div>
    </div>
</div>

{{-- TODO: proveedores --}}
<div class="proveedores">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="images">
                    <span><img src="img/proveedores/expedia.png" alt=""></span>
                    <span><img src="img/proveedores/hotelbeds.png" alt=""></span>
                    <span><img src="img/proveedores/rv.png" alt=""></span>
                    <span><img src="img/proveedores/tour_corporation.png" alt=""></span>
                    <span><img src="img/proveedores/grupo-xcaret.png" alt=""></span>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')



@endpush