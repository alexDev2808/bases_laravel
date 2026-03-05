<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return route('coloboradores.show', ['id_colaborador' => 123]);
});

// El orden de las rutas es importante, las rutas más específicas deben ir antes que las rutas más generales o dinamicas
Route::get('/cursos/informacion', function () {
    return "Bienvenido a la información de los cursos";
});

// Recuperar parámetros de la URL
Route::get('/cursos/{curso}', function ($curso) {
    return "Bienvenido al curso de $curso";
});

// Ruta con parámetros opcionales
Route::get('/cursos/{curso}/estudiantes/{estudiante?}', function( $curso, $estudiante = null ) {
    if( $estudiante ) {
        return "Bienvenido al curso de $curso, estudiante $estudiante";
    } else {
        return "Bienvenido al curso de $curso, estudiante invitado";
    }
});

// Proteger rutas con expresiones regulares
Route::get('/ejercicios/{numero}/categoria/{categoria}', function ($numero, $categoria) {
    return "Ejercicio número $numero, categoría $categoria";
})->where([
    'numero' => '[0-9]+', 
    'categoria' => '[a-z]+'
]);

Route::get('/rutas/{ruta}', function ($ruta) {
    return "Ruta programacion: $ruta";
})->whereIn('ruta', ['php', 'javascript', 'python']);

// Definir un patrón global para un parámetro => AppServiceProvider.php
Route::get('/usuarios/{id}', function ($id) {
    return "Usuario con ID: $id";
})->where('id', '[0-9]+');


// Ruta con nombre para generar URLs
Route::get('/colaboradores/{id_colaborador}', function ($id_colaborador) {
    return "Colaborador con ID: $id_colaborador";
})->name('coloboradores.show');


// CRUD completo
Route::get('/posts', function() {
    return "Mostrar todos los posts";
});
Route::get('/posts/create', function() {
    return "Formulario para crear un nuevo post";
});
Route::post('/posts', function() {
    return "Guardar un nuevo post";
});
Route::get('/posts/{post}', function($post) {
    return "Mostrar el post: $post";
});
Route::get('/posts/{post}/edit', function($post) {
    return "Formulario para editar el post: $post";
});
Route::put('/posts/{post}', function($post) {
    return "Actualizar el post: $post";
});
Route::delete('/posts/{post}', function($post) {
    return "Eliminar el post: $post";
});