<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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
Route::get('/home', [HomeController::class, 'index']);

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

// Rutas con resource controller, genera automáticamente las rutas para un CRUD completo
Route::resource('departamentos', AreaController::class)
    ->parameters(['departamentos' => 'area'])
    ->names('areas');