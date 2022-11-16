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
    return view('welcome');
});

Route::get('/crear_sesion', function () {

    session(['key' => 'hola']);

    return "se creo la sesion con exito";
});

Route::get('/ver_sesiones', function () {

    dd(session()->all());
});
