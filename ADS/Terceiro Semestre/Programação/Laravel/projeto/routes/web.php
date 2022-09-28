<?php

use Illuminate\Support\Facades\Route;


Route::get('/customer', function () {
    return view('mdb.mdb-home');
});

Route::get('/moto', function () {
    return view('mdb.mdb-moto');
});

Route::get('/carro', function () {
    return view('mdb.mdb-carro');
});

Route::get('/somos', function () {
    return view('mdb.mdb-somos');
});

Route::get('/contato', function () {
    return view('mdb.mdb-contato');
});