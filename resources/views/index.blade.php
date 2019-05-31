@extends('layout.master')
    @section('content')
        @include('partials.navbar')
        <!-- PARALLAX HOME-->
        <section>
            <div class="container-fluid pd-0">
                <div class="row">
                    <div class="pd-0 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <img class="w-100" src="./images/home/home_guia.png" alt="Pata Negra">
                    </div>

                </div>
            </div>
        </section>
        <!-- LO QUE BUSCAMOS -->
        <section id="buscamos">
            <div class="container-fluid pd-0">
                <div class="row">
                    <div class="hidden-xs col-md-2 col-lg-2"></div>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="box-buscamos">
                            <h2>LO QUE BUSCAMOS</h2>
                            <img src="{{asset('/images/buscamos/linetext.png')}}">
                            <p class="font-light">Buscamos nuevas formas de conseguir lo que deseamos, buscamos hacerlo sin complicaciones, no hay dramas, sólo momentos simples que nos hacen vibrar. </p>
                            <p class="font-light">Buscamos que los maridajes se den entre grandes amigos, y que la única etiqueta que hay que seguir en la vida es creer en lo que nos hace felices, y actuar de manera congruente.</p>
                        </div>
                        <div class="box-historia">
                            <img class="img-nuestra-historia" src="./images/buscamos/buscamos_historia.png">
                            <p class="font-light">De nuestra historia podemos decir que García Carrión en una empresa líder mundial en la elaboración de vinos de alta calidad. Conocimiento adquirido que ha permitido innovar y lanzar al mercado <span class="pathway">Vinos Pata Negra, la única marca en el mercado que arropa 8 Denominaciones de Origen.</span></p>
                            <p class="font-light">El propósito es ofrecer lo mejor del vino español, buscando la máxima amplitud de opciones para que nuestro consumidor experimente, innove en la mejor forma de disfrutarlo.</p> 
                            <p class="">Sin reglas preestablecidas.</p>
                            <p class="">En Pata Negra nuestro legado, es el momento que inspiramos en tu vida.</p>
                        </div>
                    </div>
                    <div class="box-wine-right hidden-xs col-md-2 col-lg-2">
                        <img class="img-box-wine-right" src="./images/buscamos/buscamos_wine2.png">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid pd-0">
                <div class="row">
                    <div class="box-wine-left hidden-xs col-md-2 col-lg-2">    
                        <img class="img-box-wine-left" src="./images/buscamos/buscamos_wine1.png">
                    </div>
                </div>
            </div>        
        </section>
        <div>
        <!-- LO QUE BUSCAMOS \ VIDEO-->
        <section>
            <div class="container-fluid pd-0">
                <div class="row">
                    <video class="w-100" autoplay controls>
                        <source src="./images/buscamos/patanegra_sitio_vidcomp.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </section>
        <!-- DENOMINACIONES DE ORIGEN-->
        <section id="denominaciones">
            <div class="container-fluid pd-0">
                <div class="row">
                    <div class="box-deno-left hidden-xs col-md-2 col-lg-2">
                        <img class="img-deno-left" src="./images/denominaciones/8do_spot2.png">
                    </div>
                    <div class="col-xs-12 col-md-8 col-lg-8">
                        <div>
                            <img class="w-100" src="./images/denominaciones/8do_title.png">
                            <div class="box-conoce">
                                <a href="#"><h3>Conoce más ></h3></a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden-xs col-md-2 col-lg-2">
                        <img class="w-100" src="./images/denominaciones/8do_spot1.png">
                    </div>
                </div>
            </div>
        </section>
        <!-- ENCUENTRA -->
        <section id="encuentra">
            <div class="container-fluid pd-0">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <img class="w-100" src="./images/encuentra/pleca_yellow.png">
                    </div>
                </div>  
                
                <div class="row">
                    <div class="col-xs-hidden col-md-2 col-lg-2">

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div>
                                <h3>Encuentra tu vino</h3>
                                <hr>
                                <p>8 denominaciones de origen</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="box-wine-encuentra">
                                    <img class="w-100" src="./images/encuentra/valde_granreser.png">
                                    <img class="w-100 back-hover" src="./images/encuentra/valde_granreser_overr.png">    
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="box-wine-encuentra">
                                    <img class="w-100" src="./images/encuentra/valde_reserva.png">
                                    <img class="w-100 back-hover" src="./images/encuentra/valde_reserva_over.png">    
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="box-wine-encuentra">
                                    <img class="w-100" src="./images/encuentra/valde_roble.png">
                                    <img class="w-100 back-hover" src="./images/encuentra/valde_roble_over.png">    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="box-wine-encuentra">
                                    <img class="w-100" src="./images/encuentra/valde_crianza.png">
                                    <img class="w-100 back-hover" src="./images/encuentra/valde_crianza_over.png">    
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="box-wine-encuentra">
                                    <img class="w-100" src="./images/encuentra/valde_sauvignon.png">
                                    <img class="w-100 back-hover" src="./images/encuentra/valde_sauvignon_over.png">    
                                </div>    
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="box-wine-encuentra">
                                    <img class="w-100" src="./images/encuentra/ribera_crianza.png">
                                    <img class="w-100 back-hover" src="./images/encuentra/ribera_crianza_over.png">    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="box-wine-encuentra">
                                    <img class="w-100" src="./images/encuentra/ribera_roble.png">
                                    <img class="w-100 back-hover" src="./images/encuentra/ribera_roble_over.png">    
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="box-wine-encuentra">
                                    <img class="w-100" src="./images/encuentra/cava.png">
                                    <img class="w-100 back-hover" src="./images/encuentra/cava_over.png">    
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="box-wine-encuentra">
                                    <img class="w-100" src="./images/encuentra/cava_rose.png">
                                    <img class="w-100 back-hover" src="./images/encuentra/cava_rose_over.png">    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="box-wine-encuentra">
                                    <img class="w-100" src="./images/encuentra/rioja_crianza.png">
                                    <img class="w-100 back-hover" src="./images/encuentra/rioja_crianza_over.png">    
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="box-wine-encuentra">
                                    <img class="w-100" src="./images/encuentra/rioja_gransel.png">
                                    <img class="w-100 back-hover" src="./images/encuentra/rioja_gransel_over.png">    
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="box-wine-encuentra">
                                    <img class="w-100" src="./images/encuentra/toro.png">
                                    <img class="w-100 back-hover" src="./images/encuentra/toro_over.png">    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="hidden-xs"></div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="box-wine-encuentra">
                                    <img class="w-100" src="./images/encuentra/jumilla_.png">
                                    <img class="w-100 back-hover" src="./images/encuentra/jumilla_over.png">    
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="box-wine-encuentra">
                                    <img class="w-100" src="./images/encuentra/rueda.png">
                                    <img class="w-100 back-hover" src="./images/encuentra/rueda_over.png">    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--MARIDAJES-->
        <section>
            <div class="container-fluid pd-0">
                <div class="row">
                    <div class="col-xs-12 back-title-maridajes">
                        <!-- Esto cuando me de tiempo lo pongo con codigo columna por columna de color-->
                        <!-- <p>BUSCAMOS LOS MEJORES MARIDAJES</p>-->
                    </div>
                </div>
            </div>
        </section>
        <section id="maridajes">
            <div class="container-fluid pd-0">
                <div class="row">
                    <div class="col-maridaje col-xs-12 col-md-2">
                        <div class="box-maridaje">
                            <img class="img-maridaje" src="./images/maridajes/1_costillas.png">
                            <img class="img-maridaje maridaje-hover" src="./images/maridajes/1_costillas_over.png">    
                        </div>
                    </div>
                    <div class="col-maridaje col-xs-12 col-md-7">
                        <div class="box-maridaje">
                            <img class="img-maridaje" src="./images/maridajes/2_ternera.png">
                            <img class="img-maridaje maridaje-hover" src="./images/maridajes/2_ternera_over.png">    
                        </div>    
                    </div>
                    <div class="col-maridaje col-xs-12 col-md-3">
                        <div class="box-maridaje">
                            <img class="img-maridaje" src="./images/maridajes/3_macarrones.png">
                            <img class="img-maridaje maridaje-hover" src="./images/maridajes/3_macarrones_over.png">    
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-maridaje col-xs-12 col-md-3">
                        <div class="box-maridaje">
                            <img class="img-maridaje" src="./images/maridajes/4_hamburguesa.png">
                            <img class="img-maridaje maridaje-hover" src="./images/maridajes/4_hamburguesa_over.png">    
                        </div>
                    </div>
                    <div class="col-maridaje col-xs-12 col-md-7">
                        <div class="box-maridaje">
                            <img class="img-maridaje" src="./images/maridajes/5_carne.png">
                            <img class="img-maridaje maridaje-hover" src="./images/maridajes/5_carne_over.png">    
                        </div>    
                    </div>
                    <div class="col-maridaje col-xs-12 col-md-2">
                        <div class="box-maridaje">
                            <img class="img-maridaje" src="./images/maridajes/6_camaron.png">
                            <img class="img-maridaje maridaje-hover" src="./images/maridajes/6_camaron_over.png">    
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-maridaje col-xs-12 col-md-2">
                        <div class="box-maridaje">
                            <img class="img-maridaje" src="./images/maridajes/7_tinga.png">
                            <img class="img-maridaje maridaje-hover" src="./images/maridajes/7_tinga_over.png">    
                        </div>
                    </div>
                    <div class="col-maridaje col-xs-12 col-md-7">
                        <div class="box-maridaje">
                            <img class="img-maridaje" src="./images/maridajes/8_tamales.png">
                            <img class="img-maridaje maridaje-hover" src="./images/maridajes/8_tamales_over.png">    
                        </div>    
                    </div>
                    <div class="col-maridaje col-xs-12 col-md-3">
                        <div class="box-maridaje">
                            <img class="img-maridaje" src="./images/maridajes/9_fruitcake.png">
                            <img class="img-maridaje maridaje-hover" src="./images/maridajes/9_fruitcake_over.png">    
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-maridaje col-xs-12 col-md-3">
                        <div class="box-maridaje">
                            <img class="img-maridaje" src="./images/maridajes/10_mole.png">
                            <img class="img-maridaje maridaje-hover" src="./images/maridajes/10_mole_over.png">    
                        </div>
                    </div>
                    <div class="col-maridaje col-xs-12 col-md-7">
                        <div class="box-maridaje">
                            <img class="img-maridaje" src="./images/maridajes/11_pastor.png">
                            <img class="img-maridaje maridaje-hover" src="./images/maridajes/11_pastor_over.png">    
                        </div>    
                    </div>
                    <div class="col-maridaje col-xs-12 col-md-2">
                        <div class="box-maridaje">
                            <img class="img-maridaje" src="./images/maridajes/12_serrano.png">
                            <img class="img-maridaje maridaje-hover" src="./images/maridajes/12_serrano_over.png">    
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="box-maridaje">
                            <img class="img-maridaje" src="./images/maridajes/13_trufas.png">
                            <img class="img-maridaje maridaje-hover" src="./images/maridajes/13_trufas_over.png">    
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="box-maridaje">
                            <img class="img-maridaje" src="./images/maridajes/14_ceviche.png">
                            <img class="img-maridaje maridaje-hover" src="./images/maridajes/14_ceviche_over.png">    
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- PARALLAX -->
        <section>
            <div class="container-fluid pd-0">
                <div class="row red-back">
                    <div class="col-xs-12">
                        <img class="top-pleca w-100" src="./images/parallax/parallax_top.png">
                    </div>
                    <div class="col-xs-12">
                        <div class="img-parallax"></div>
                    </div>
                    <div class="col-xs-12">
                        <img class="bottom-pleca w-100" src="./images/parallax/parallax_bottom.png">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid pd-0">
                <div class="row center-block">
                    <div class="box-couple col-xs-12">    
                        <img class="img-box-couple" src="./images/parallax/parallax_couple.png">
                    </div>
                </div>
            </div>        
        </section>
        <!-- CONOCE MAS -->
        <section id="conoce">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <div>
                            <h2>CONOCIENDO MAS</h2>
                            <p>Para disfrutar del vino no hay que ser un experto. Aunque cuànto màs aprendes de algo, màs lo disfrutamos, ¿no crees?</p>
                            <p>Aquì te compartimos curiosidades, datos, tips, y mas para que tu experiencia con Pata Negra sea aùn mejor.</p>
                        </div>
                        <!-- Trigger/Open The Modal -->
                        <div style="cursor: pointer" id="myBtn">- ¿CÒMO ABRIR UNA BOTELLA?</div>

                        <!-- The Modal -->
                        <div id="myModal" class="modal">

                            <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <p>Cortar la cápsula que cubre el tapón o el corcho, limpiar la boca de la botella, introducir el gusano o tirabuzón por el centro del corcho sin atravesarlo, retirar el corcho con cuidado.</p>
                            </div>

                        </div>
                        <ul>
                            
                            <a><li>UNA VEZ QUE ABRÌ LA BOTELLA, ¿CÒMO DEBO RESERVARLA?</li></a>
                            <a><li>¿CUÀNTAS CALORÌAS TIENE UNA BOTELLA DE VINO?</li></a>
                            <a><li></li></a>
                            <a><li></li></a>
                            <a><li></li></a>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        @include('partials.footer')
    @endsection