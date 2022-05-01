@extends('layouts.master')
@section('titulo','Hoteles | Familiares')
@section('contenido')

    {{-- TODO: section hotels --}}
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title__section">
                        <p class="subtitle">
                            ELIGE TU DESTINO
                        </p>
                        <p class="title">
                            Encuentra el hotel ideal para ti y tu familia
                        </p>
                    </div>
                    <div class="bar"></div>

                    <div class="hotels">
                        <ul class="tabs__hotel">
                            <li><a href="#hotel1"><i class="fas fa-map-marker-alt"></i> Cancún</a></li>
                            <li><a href="#hotel2"><i class="fas fa-map-marker-alt"></i> Rivera Maya<span> | Playa de Carmen</span></a></li>
                            <li><a href="#hotel3"><i class="fas fa-map-marker-alt"></i> Los Cabos</a></li>
                            <li><a href="#hotel4"><i class="fas fa-map-marker-alt"></i> Puerto Vallarta</a></li>
                            <li><a href="#hotel5"><i class="fas fa-map-marker-alt"></i> Mazatlán</a></li>
                        </ul>
                
                        <div class="tabs__container">
                            <article id="hotel1">
                                <p class="result">Hoteles en Cancún, Quintana Roo. (5)</p>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="card">
                                                <p class="card-type"><i class="fas fa-male"></i><i class="fas fa-child"></i><i class="fas fa-female"></i> <span>Familiar</span></p>
                                                <figure><img src="img/hotels/AllRitmo2.jpg" class="card-img-top" alt="..."></figure>
                                                
                                                <div class="card-body">
                                                    <h5 class="card-title">All Ritmo Cancún</h5>
                                                    <p class="card-text"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half-alt"></i></p>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">ALOJAMIENTO</li>
                                                        <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> Cancún, Quintana Roo</li>
                                                        <li class="list-group-item"></li>
                                                    </ul>
                                                    <a href="#" class="btn__see">Reservar <i class="fas fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                
                            <article id="hotel2">
                                <p class="result">Hoteles en Rivera Maya | Playa del Carmen. (5)</p>
                                <div class="container">
                                    <div class="row">        
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="card">
                                                <p class="card-type"><i class="fas fa-male"></i><i class="fas fa-child"></i><i class="fas fa-female"></i> <span>Familiar</span></p>
                                                <figure><img src="img/hotels/AllRitmo2.jpg" class="card-img-top" alt="..."></figure>
                                                
                                                <div class="card-body">
                                                    <h5 class="card-title">All Ritmo</h5>
                                                    <p class="card-text"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half-alt"></i></p>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">ALOJAMIENTO</li>
                                                        <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> Playa del carmen</li>
                                                        <li class="list-group-item"></li>
                                                    </ul>
                                                    <a href="#" class="btn__see">Reservar <i class="fas fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                
                            <article id="hotel3">
                                <p class="result">Hoteles en Los Cabos, Baja California Sur. (Sin resultados)</p>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="card">
                                                <p class="card-type"><i class="fas fa-male"></i><i class="fas fa-child"></i><i class="fas fa-female"></i> <span>Familiar</span></p>
                                                <figure><img src="img/hotels/AllRitmo2.jpg" class="card-img-top" alt="..."></figure>
                                                
                                                <div class="card-body">
                                                    <h5 class="card-title">All Ritmo Cancún</h5>
                                                    <p class="card-text"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half-alt"></i></p>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">ALOJAMIENTO</li>
                                                        <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> Cancún, Quintana Roo</li>
                                                        <li class="list-group-item"></li>
                                                    </ul>
                                                    <a href="#" class="btn__see">Reservar <i class="fas fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                
                            <article id="hotel4">
                                <p class="result">Hoteles en Puerto Vallarta, Jalisco. (Sin resultados)</p>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="card">
                                                <p class="card-type"><i class="fas fa-male"></i><i class="fas fa-child"></i><i class="fas fa-female"></i> <span>Familiar</span></p>
                                                <figure><img src="img/hotels/AllRitmo2.jpg" class="card-img-top" alt="..."></figure>
                                                
                                                <div class="card-body">
                                                    <h5 class="card-title">All Ritmo Cancún</h5>
                                                    <p class="card-text"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half-alt"></i></p>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">ALOJAMIENTO</li>
                                                        <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> Cancún, Quintana Roo</li>
                                                        <li class="list-group-item"></li>
                                                    </ul>
                                                    <a href="#" class="btn__see">Reservar <i class="fas fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                
                            <article id="hotel5">
                                <p class="result">Hoteles en Mazatlán, Sinaloa. (Sin resultados)</p>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <div class="card">
                                                <p class="card-type"><i class="fas fa-male"></i><i class="fas fa-child"></i><i class="fas fa-female"></i> <span>Familiar</span></p>
                                                <figure><img src="img/hotels/AllRitmo2.jpg" class="card-img-top" alt="..."></figure>
                                                
                                                <div class="card-body">
                                                    <h5 class="card-title">All Ritmo Cancún</h5>
                                                    <p class="card-text"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half-alt"></i></p>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">ALOJAMIENTO</li>
                                                        <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> Cancún, Quintana Roo</li>
                                                        <li class="list-group-item"></li>
                                                    </ul>
                                                    <a href="#" class="btn__see">Reservar <i class="fas fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
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