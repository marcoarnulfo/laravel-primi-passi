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
    //Creo delle variabili
    $page_title = 'Hello world';
    // le passo alla view
    return view('welcome', compact('page_title'));
})->name('home');


Route::get('/cars', function () {

    $data = [
        'page_title' => 'Cars to sell',
        'description' => 'Compra la tua auto',
        'cars' => [
            'Audi A3',
            'BMW M4',
            'Ferrari f430'
        ],
    ];

    return view('cars', $data);
})->name('cars');
