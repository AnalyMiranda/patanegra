<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('age-validation');
});
Route::get('/index', function () {
    return view('index');
});



Route::group(['prefix'=>'vinos','as'=>'catalogo.'], function(){

    Route::get('/valdepenas-gran-reserva', 'WinesController@valdepenasGranReserva')->name('valdepenasGranReserva');
    Route::get('/valdepenas-reserva', 'WinesController@valdepenasReserva')->name('valdepenasReserva');
    Route::get('/valdepenas-roble', 'WinesController@valdepenasRoble')->name('valdepenasRoble');
    Route::get('/valdepenas-crianza', 'WinesController@valdepenasCrianza')->name('valdepenasCrianza');
    Route::get('/valdepenas-sauvignon', 'WinesController@valdepenasSauvignon')->name('valdepenasSauvignon');
    Route::get('/ribera-del-duero-crianza', 'WinesController@riberaCrianza')->name('riberaCrianza');
    Route::get('/ribera-del-duero-roble', 'WinesController@riberaRoble')->name('riberaRoble');
    Route::get('/cava-brut', 'WinesController@cavaBrut')->name('cavaBrut');
    Route::get('/cava-brut-rose', 'WinesController@cavaBrutRose')->name('cavaBrutRose');
    Route::get('/rioja-crianza', 'WinesController@riojaCrianza')->name('riojaCrianza');
    Route::get('/rioja-gran-seleccion', 'WinesController@riojaGranSeleccion')->name('riojaGranSeleccion');
    Route::get('/toro-roble', 'WinesController@toroRoble')->name('toroRoble');
    Route::get('/jumilla-apasionado', 'WinesController@jumillaApasionado')->name('jumillaApasionado');
    Route::get('/rueda-verdejo', 'WinesController@ruedaVerdejo')->name('ruedaVerdejo');


});
