<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/listado', function () {
    return view('listado');
});
Route::get('/reserva', function () {
    return view('reserva');
});