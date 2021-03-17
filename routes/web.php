<?php

use App\Http\Controllers\Auth\RegisterController;
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
Route::get('/forgot', function () {
    return view('usuario/forgot-password');
});

/*USUARIO */
Route::get('/login', function () {
    return view('usuario/login');
});

Route::get('/register', function () {
    return view('usuario/register');
});

Route::get('/usuarios_view', function () {
    return view('usuario/mostrarUsuario');
});

/*DASHBOARD*/
Route::get('/admin', function () {
    return view('dashboard/index_dashboard');
});

/*Indicadores */
Route::get('/indicador_create', function () {
    return view('indicador/CrearIndicador');
});

Route::get('/indicador_view', function () {
    return view('indicador/VerIndicador');
});

Route::get('/evaluar_view', function () {
    return view('evaluar/EvaluarView');
});

/*Areas*/
Route::get('/areas_view', function () {
    return view('area/MostrarArea');
});

Route::get('/areas_create', function () {
    return view('area/CrearArea');
});

Route::get('/database', function () {
    return view('usuario/database');
});

Route::post('/user', [RegisterController::class, 'store'])->name('usuario.store');
