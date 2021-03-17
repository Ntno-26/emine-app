<?php

use Illuminate\Support\Facades\Route;

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
    return view('vistaprincipal/index');
});

Route::get('/nosotros', function(){
    return view('vistaprincipal/nosotros');
});

Route::get('/noticias', function () {
    return view('vistaprincipal/noticias');
});

Route::get('/cursos', function () {
    return view('vistaprincipal/cursos');
});

Route::get('/pac2020', function () {
    return view('vistaprincipal/pac2020');
});

Route::get('/poa2021', function () {
    return view('vistaprincipal/poa2021');
});

Route::get('/galeria', function () {
    return view('vistaprincipal/galeria');
});

Route::get('/lotaip2019', function () {
    return view('vistaprincipal/lotaip2019');
});

Route::get('/lotaip2020', function () {
    return view('vistaprincipal/lotaip2020');
});

Route::get('/rendicion_2018', function () {
    return view('vistaprincipal/rendicion_2018');
});

Route::get('/rendicion_2019', function () {
    return view('vistaprincipal/rendicion_2019');
});

Route::get('/contacto', function () {
    return view('vistaprincipal/contacto');
});
