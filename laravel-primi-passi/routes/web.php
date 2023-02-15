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
    
    $titolo = 'Hello World';

    return view('home', compact('titolo'));
})->name('home');


Route::get('/primaPagina', function (){

    $titolo = 'Questa è la pagina 2 ';

    return view('primaPagina', compact('titolo'));
})->name('primaPagina');

Route::get('/secondaPagina', function (){

    $titolo = 'Questa è la pagina 3';

    return view('secondaPagina', compact('titolo'));
})->name('secondaPagina');
