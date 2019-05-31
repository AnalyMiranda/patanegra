<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WinesController extends Controller
{
    public function valdepenasGranReserva(){

        $data = [

            "tipo" => "tinto",
            "variedades" => "Tempranillo, Mazuelo, Graciano.",
            "crianza" => "18 meses, Alertnando Roble americano y frances, posterior afinado en botella.",
            "cata" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "variantes" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "img" => asset('images/carousel/encuentra_valde_granreserva.png')

        ];

        return view('wines.wine',compact('data'));
    }

    public function valdepenasReserva(){

        $data = [

            "tipo" => "tinto",
            "variedades" => "Tempranillo, Mazuelo, Graciano.",
            "crianza" => "18 meses, Alertnando Roble americano y frances, posterior afinado en botella.",
            "cata" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "variantes" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "img" => asset('images/carousel/encuentra_valde_reserva.png')

        ];

        return view('wines.wine',compact('data'));
    }

    public function valdepenasRoble(){

        $data = [

            "tipo" => "tinto",
            "variedades" => "Tempranillo, Mazuelo, Graciano.",
            "crianza" => "18 meses, Alertnando Roble americano y frances, posterior afinado en botella.",
            "cata" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "variantes" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "img" => asset('images/carousel/encuentra_valde_roble.png')

        ];

        return view('wines.wine',compact('data'));
    }

    public function valdepenasCrianza(){

        $data = [

            "tipo" => "tinto",
            "variedades" => "Tempranillo, Mazuelo, Graciano.",
            "crianza" => "18 meses, Alertnando Roble americano y frances, posterior afinado en botella.",
            "cata" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "variantes" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "img" => asset('images/carousel/encuentra_valde_crianza.png')

        ];
        return view('wines.wine',compact('data'));
    }

    //falto este
    public function valdepenasSauvignon(){

        $data = [

            "tipo" => "tinto",
            "variedades" => "Tempranillo, Mazuelo, Graciano.",
            "crianza" => "18 meses, Alertnando Roble americano y frances, posterior afinado en botella.",
            "cata" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "variantes" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "img" => asset('images/carousel/encuentra_valde_sauvignon.png')

        ];
        return view('wines.wine',compact('data'));
    }

    public function riberaCrianza(){

        $data = [

            "tipo" => "tinto",
            "variedades" => "Tempranillo, Mazuelo, Graciano.",
            "crianza" => "18 meses, Alertnando Roble americano y frances, posterior afinado en botella.",
            "cata" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "variantes" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "img" => asset('images/carousel/encuentra_ribera_crianza.png')

        ];
        return view('wines.wine',compact('data'));
    }

    public function riberaRoble(){

        $data = [

            "tipo" => "tinto",
            "variedades" => "Tempranillo, Mazuelo, Graciano.",
            "crianza" => "18 meses, Alertnando Roble americano y frances, posterior afinado en botella.",
            "cata" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "variantes" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "img" => asset('images/carousel/encuentra_ribera_roble.png')

        ];
        return view('wines.wine',compact('data'));
    }

    public function cavaBrut(){

        $data = [

            "tipo" => "tinto",
            "variedades" => "Tempranillo, Mazuelo, Graciano.",
            "crianza" => "18 meses, Alertnando Roble americano y frances, posterior afinado en botella.",
            "cata" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "variantes" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "img" => asset('images/carousel/encuentra_cava.png')

        ];
        return view('wines.wine',compact('data'));
    }

    public function cavaBrutRose(){

        $data = [

            "tipo" => "tinto",
            "variedades" => "Tempranillo, Mazuelo, Graciano.",
            "crianza" => "18 meses, Alertnando Roble americano y frances, posterior afinado en botella.",
            "cata" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "variantes" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "img" => asset('images/carousel/encuentra_cava_rose.png')

        ];
        return view('wines.wine',compact('data'));
    }

    public function riojaCrianza(){

        $data = [

            "tipo" => "tinto",
            "variedades" => "Tempranillo, Mazuelo, Graciano.",
            "crianza" => "18 meses, Alertnando Roble americano y frances, posterior afinado en botella.",
            "cata" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "variantes" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "img" => asset('images/carousel/encuentra_rioja.png')

        ];
        return view('wines.wine',compact('data'));
    }

    public function riojaGranSeleccion(){

        $data = [

            "tipo" => "tinto",
            "variedades" => "Tempranillo, Mazuelo, Graciano.",
            "crianza" => "18 meses, Alertnando Roble americano y frances, posterior afinado en botella.",
            "cata" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "variantes" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "img" => asset('images/carousel/encuentra_riojagransel.png')

        ];
        return view('wines.wine',compact('data'));
    }

    public function toroRoble(){

        $data = [

            "tipo" => "tinto",
            "variedades" => "Tempranillo, Mazuelo, Graciano.",
            "crianza" => "18 meses, Alertnando Roble americano y frances, posterior afinado en botella.",
            "cata" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "variantes" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "img" => asset('images/carousel/encuentra_toro.png')

        ];
        return view('wines.wine',compact('data'));
    }

    public function jumillaApasionado(){

        $data = [

            "tipo" => "tinto",
            "variedades" => "Tempranillo, Mazuelo, Graciano.",
            "crianza" => "18 meses, Alertnando Roble americano y frances, posterior afinado en botella.",
            "cata" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "variantes" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "img" => asset('images/carousel/encuentra_jumilla.png')

        ];
        return view('wines.wine',compact('data'));
    }

    public function ruedaVerdejo(){

        $data = [

            "tipo" => "tinto",
            "variedades" => "Tempranillo, Mazuelo, Graciano.",
            "crianza" => "18 meses, Alertnando Roble americano y frances, posterior afinado en botella.",
            "cata" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "variantes" => "Aromas a frutos rojos y balsamicos, con ligeros matices de roble.",
            "img" => asset('images/carousel/encuentra_rueda.png')

        ];
        return view('wines.wine',compact('data'));
    }



}
