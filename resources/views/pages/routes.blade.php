@extends('layouts.master')
@section('titulo','Yoci Viajes | Circuitos')
@section('contenido')

{{-- TODO: section hotels --}}
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title__section">
                    <p class="subtitle">
                        CIRCUITOS
                    </p>
                    <p class="title">
                        Esta semana viaja por los mejores circuitos
                    </p>
                </div>
                <div class="bar"></div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper circuite">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="circuito">
                                        <div class="card">
                                            <p class="title__circuite">
                                                Circuito Chihuahua (Tren Chepe incluido) -
                                            </p>
                                            <p class="description__circuite">
                                                Viaja por el maravilloso Estado de Chihuahua conociendo los atractivos
                                                más. <br>
                                                importantes de este bello estado. Conocerás el pueblo mágico de Creel y
                                                la belleza
                                                que se encuentra en él. <br>
                                                A continuación, nos dirigiremos al Divisadero a bordo del majestuoso y
                                                famoso Tren
                                                Chepe en donde verás la hermosa Naturaleza que rodea a este bello
                                                estado. <br> En el
                                                Divisadero tendrás una de las vistas más impactantes, donde también
                                                podrás realizar
                                                actividades adicionales (no incluidas) para completar esta maravillosa
                                                experiencia.

                                            </p>
                                            <a href="{{url('quote')}}" class="cotizar">Quiero cotizar</a>
                                        </div>
                                        <figure>
                                            <img src="img/train-chepe.jpg" alt="chiuauua">
                                        </figure>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="circuito">
                                        <div class="card">
                                            <p class="title__circuite">
                                                Circuito Chiapas -
                                            </p>
                                            <p class="description__circuite">
                                                Conoce el corazón de Chiapas como siempre imaginaste. <br />
                                                La belleza y el resplandor de la selva Lacandona te recibirán con su
                                                grandeza presentándote sus tesoros naturales como cascadas y lagunas,
                                                una aventura que te harán sentir las ventas del Cañón del Sumidero. <br>
                                                También visitarás las zonas arqueológicas de Palenque para descubrir los
                                                misterios Mayas que aun prevalecen hasta nuestros tiempos.
                                                Además, visitarás el pueblo mágico de Chiapa de Corzo para completar
                                                esta mágica travesía.

                                            </p>
                                            <a href="" class="cotizar">Quiero cotizar</a>
                                        </div>
                                        <figure>
                                            <img src="img/chiapas.jpg" alt="chiapas">
                                        </figure>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="circuito">
                                        <div class="card">
                                            <p class="title__circuite">
                                                Circuito Oaxaca -
                                            </p>
                                            <p class="description__circuite">
                                                El estado de Oaxaca incluye toda una gama de lenguas y grupos que se originaron en la región, además de la gastronomía, la topografía y la prosperidad marítima que lo convierten en una visita obligada una y otra vez. Rica en historia y cultura, Oaxaca es un destino fascinante donde se encuentran antiguas civilizaciones, arquitectura colonial y tradiciones vivas. Su cultura y el entusiasmo de su gente son las principales razones para viajar, para sumergirse en el universo de Oaxaca.

                                            </p>
                                            <a href="" class="cotizar">Quiero cotizar</a>
                                        </div>
                                        <figure>
                                            <img src="img/oaxaca.webp" alt="oaxaca">
                                        </figure>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="circuito">
                                        <div class="card">
                                            <p class="title__circuite">
                                                Mini circuito Querétaro -
                                            </p>
                                            <p class="description__circuite">
                                                Vive este circuito de una manera única y romántica con tu persona favorita. <br>
                                                Realizarás la ruta Arte, Queso y Vino. Visitaremos un rancho quesero y aprenderemos desde el cuidado de los animales hasta como se obtiene el producto final, seguida por una rica degustación de quesos, continuando así a la visita de uno de los viñedos más famosos de Querétaro donde aprenderemos como se lleva a cabo la fermentación de las uvas y su proceso de elaboración seguido de una pequeña degustación de este delicioso producto. Continuaremos hacia el Pueblo Mágico de San Sebastián de Bernal, famoso por su imponente peña reconocida como el “tercer Monolito más grande del mundo.
                                            </p>
                                            <a href="" class="cotizar">Quiero cotizar</a>
                                        </div>
                                        <figure>
                                            <img src="img/queretaro.jpg" alt="bernal">
                                        </figure>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="circuito">
                                        <div class="card">
                                            <p class="title__circuite">
                                                Circuito por Yucatán -
                                            </p>
                                            <p class="description__circuite">
                                                Conoce Yucatán como siempre quisiste. Disfrutarás de un City Tour por Mérida en donde descubrirás lugares mas icónicos de esta bella ciudad. <br>
                                                También conocerás las famosas Ruinas de Chichén Itzá donde aprenderás de su historia y te maravillarás por estas impresionantes ruinas. <br>
                                                Visitarás los cenotes de Santa Barbará para descubrir los 3 tipos de cenotes que existen. Sin duda este circuito estará acompañado de magia, misticismo y naturaleza. <br>
                                            </p>
                                            <a href="" class="cotizar">Quiero cotizar</a>
                                        </div>
                                        <figure>
                                            <img src="img/chichen.webp" alt="chichen">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <br><br>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
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
                <img src="img/flayers/tarjet.png" alt="">
            </div>
        </div>
    </div>
</div>

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
