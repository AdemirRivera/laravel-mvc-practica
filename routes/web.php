<?php

use Illuminate\Support\Facades\Route;

// -> Ruta por defecto - GET
Route::get('/', function () {
    return 'hola mundo';
    // return view('welcome');
});

// -> Ruta contacto - GET
// Route::get('/contacto', function(){
//     return 'view contacto';
// });

// -> Ruta contacto - POST
// Route::post('/contacto', function(){
//     return 'error contacto';
// });

// -> Ruta contacto - GET y POST
Route::match(['get', 'post'], '/contacto', function () {
    return 'view contacto';
});

// -> Ruta cursos - GET
Route::get('/cursos/informacion', function () {
    return 'bienvenido al curso de informatica';
});

// -> Ruta cursos con parámetro - GET
// Route::get('/cursos/{curso}', function ($curso) {
//     return 'bienvenido al curso ' . $curso;
// });

// -> Ruta cursos con parámetro con expresión regular - GET
// Route::get('/cursos/{curso}', function ($curso) {
//     return 'El curso digitado es: ' . $curso;
// })->where('curso', '[A-Za-z]+');

// -> Ruta con expresión regular mediante whereAlpha - GET
// Route::get('/cursos/{curso}', function ($curso) {
//     return 'El curso digitado es: ' . $curso;
// })->whereAlpha('curso');

// -> Ruta con expresión regular mediante whereIn - GET
// Route::get('/cursos/{curso}', function ($curso) {
//     return 'El curso digitado es: ' . $curso;
// })->whereIn('curso', ['html', 'css', 'javascript']);

Route::get('/cursos/{id}', function ($id) {
    return 'El id digitado es: ' . $id;
});

// -> Ruta cursos con parámetro y subruta opcional - GET
// Route::get('/cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
//     if ($categoria) {
//         return 'bienvenido al curso ' . $curso . ' y tu categoria es ' . $categoria;
//     }
//     return 'bienvenido al curso ' . $curso;
// })->where([
//             'curso' => '[A-Za-z]+',
//             'categoria' => '[A-Za-z]+'
//         ]);