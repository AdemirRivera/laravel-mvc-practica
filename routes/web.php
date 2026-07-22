<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'hola mundo';
    // return view('welcome');
});

// Route::get('/contacto', function(){
//     return 'view contacto';
// });

// Route::post('/contacto', function(){
//     return 'error contacto';
// });

Route::match(['get', 'post'], '/contacto', function(){
    return 'view contacto';
});