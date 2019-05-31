@extends('layout.master')
@section('content')
    <!-- PARALLAX HOME-->
    <section>
        <div class="container-fluid pd-0 h-100 no-padding">
            <div class="row wine-container no-margin">
                <div class="col-md12 no-padding w-100">
                    <div class="row">
                        <div class="col-md-6 no-padding bottle">
                            <img class="bottle-img" src="{{$data['img']}}">

                        </div>
                        <div class="col-md-6 no-padding">

                            <div class="details">


                                <div class="col-md-6 col-md-offset-3 text-center pd-3">

                                    <img class="wine-leaves" src="{{asset('images/carousel/leafs_down.png')}}">

                                    <p class="wine-text"><span class="wine-header"> Tipo:</span> {{$data['tipo']}}</p>
                                    <p><span class="wine-header">Variedades:</span></p>
                                    <p class="wine-text">{{$data['variedades']}}</p>
                                    <p><span class="wine-header">Crianza:</span></p>
                                    <p class="wine-text">{{$data['crianza']}}</p>
                                    <p><span class="wine-header">Cata:</span></p>
                                    <p class="wine-text">{{$data['cata']}}</p>
                                    <p class="wine-text"><span class="wine-header">Otras Variantes:</span> {{$data['variantes']}}</p>

                                    <img class="wine-leaves" src="{{asset('images/carousel/leafs_up.png')}}">
                                </div>
                                <div class="col-md-3"></div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="wine-separator row pd-4 text-center">
                <h3>¿Quieres mas opciones?</h3>
            </div>

            <div class="wine-selector row pd-2">
                <div class="col-md-3 prev text-right">
                    <img class="arrows" src="{{asset('images/carousel/wines/back.png')}}">
                </div>
                <div id="slick-images" class="col-md-6 wine-background">
                    <div class="wine-slider-container">
                        <div class="wine-hover"><center><a href="{{route('catalogo.valdepenasGranReserva')}}"> <img class="wine-slider-image" src="{{asset('images/carousel/wines/valde_granreserva.png')}}"></a></center></div>
                        <div class="wine-hidden"><center><img class="wine-slider-name" src="{{asset('images/carousel/wines/valde_granreserva_name.png')}}"></center></div>
                    </div>
                    <div class="wine-slider-container">
                        <div class="wine-hover"><center><a href="{{route('catalogo.valdepenasReserva')}}"> <img class="wine-slider-image" src="{{asset('images/carousel/wines/valde_reserva.png')}}"></a></center></div>
                        <div class="wine-hidden"><center><img class="wine-slider-name" src="{{asset('images/carousel/wines/valde_reserva_name.png')}}"></center></div>
                    </div>
                    <div class="wine-slider-container">
                        <div class="wine-hover"><center><a href="{{route('catalogo.valdepenasRoble')}}"> <img class="wine-slider-image" src="{{asset('images/carousel/wines/valde_roble.png')}}"></a></center></div>
                        <div class="wine-hidden"><center><img class="wine-slider-name" src="{{asset('images/carousel/wines/valde_roble_name.png')}}"></center></div>
                    </div>
                    <div class="wine-slider-container">
                        <div class="wine-hover"><center><a href="{{route('catalogo.valdepenasCrianza')}}"> <img class="wine-slider-image" src="{{asset('images/carousel/wines/valde_crianza.png')}}"></a></center></div>
                        <div class="wine-hidden"><center><img class="wine-slider-name" src="{{asset('images/carousel/wines/valde_crianza_name.png')}}"></center></div>
                    </div>
                    <div class="wine-slider-container">
                        <div class="wine-hover"><center><a href="{{route('catalogo.riberaCrianza')}}"> <img class="wine-slider-image" src="{{asset('images/carousel/wines/ribera_crianza.png')}}"></a></center></div>
                        <div class="wine-hidden"><center><img class="wine-slider-name" src="{{asset('images/carousel/wines/ribera_crianza_name.png')}}"></center></div>
                    </div>
                    <div class="wine-slider-container">
                        <div class="wine-hover"><center><a href="{{route('catalogo.riberaRoble')}}"> <img class="wine-slider-image" src="{{asset('images/carousel/wines/ribera_roble.png')}}"></a></center></div>
                        <div class="wine-hidden"><center><img class="wine-slider-name" src="{{asset('images/carousel/wines/ribera_roble_name.png')}}"></center></div>
                    </div>
                    <div class="wine-slider-container">
                        <div class="wine-hover"><center><a href="{{route('catalogo.cavaBrut')}}"> <img class="wine-slider-image" src="{{asset('images/carousel/wines/cava.png')}}"></a></center></div>
                        <div class="wine-hidden"><center><img class="wine-slider-name" src="{{asset('images/carousel/wines/cava_name.png')}}"></center></div>
                    </div>
                    <div class="wine-slider-container">
                        <div class="wine-hover"><center><a href="{{route('catalogo.cavaBrutRose')}}"> <img class="wine-slider-image" src="{{asset('images/carousel/wines/cava_rose.png')}}"></a></center></div>
                        <div class="wine-hidden"><center><img class="wine-slider-name" src="{{asset('images/carousel/wines/cava_rose_name.png')}}"></center></div>
                    </div>
                    <div class="wine-slider-container">
                        <div class="wine-hover"><center><a href="{{route('catalogo.riojaCrianza')}}"> <img class="wine-slider-image" src="{{asset('images/carousel/wines/rioja_crianza.png')}}"></a></center></div>
                        <div class="wine-hidden"><center><img class="wine-slider-name" src="{{asset('images/carousel/wines/rioja_crianza_name.png')}}"></center></div>
                    </div>
                    <div class="wine-slider-container">
                        <div class="wine-hover"><center><a href="{{route('catalogo.riojaGranSeleccion')}}"> <img class="wine-slider-image" src="{{asset('images/carousel/wines/rioja_granseleccion.png')}}"></a></center></div>
                        <div class="wine-hidden"><center><img class="wine-slider-name" src="{{asset('images/carousel/wines/rioja_gransel_name.png')}}"></center></div>
                    </div>
                    <div class="wine-slider-container">
                        <div class="wine-hover"><center><a href="{{route('catalogo.toroRoble')}}"> <img class="wine-slider-image" src="{{asset('images/carousel/wines/toro.png')}}"></a></center></div>
                        <div class="wine-hidden"><center><img class="wine-slider-name" src="{{asset('images/carousel/wines/toro_name.png')}}"></center></div>
                    </div>
                    <div class="wine-slider-container">
                        <div class="wine-hover"><center><a href="{{route('catalogo.jumillaApasionado')}}"> <img class="wine-slider-image" src="{{asset('images/carousel/wines/jumilla.png')}}"></a></center></div>
                        <div class="wine-hidden"><center><img class="wine-slider-name" src="{{asset('images/carousel/wines/jumilla_name.png')}}"></center></div>
                    </div>
                    <div class="wine-slider-container">
                        <div class="wine-hover"><center><a href="{{route('catalogo.ruedaVerdejo')}}"> <img class="wine-slider-image" src="{{asset('images/carousel/wines/rueda.png')}}"></a></center></div>
                        <div class="wine-hidden"><center><img class="wine-slider-name" src="{{asset('images/carousel/wines/rueda_name.png')}}"></center></div>
                    </div>

                </div>
                <div class="col-md-3 next">
                    <img class="arrows" src="{{asset('images/carousel/wines/next.png')}}">
                </div>

            </div>

            <div class="wine-separator row pd-0 text-center">
                <br>
            </div>

        </div>
    </section>
    @include('partials.footer')
@endsection