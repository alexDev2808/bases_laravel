<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $etiqueta = "Laravel";
        $etiquetaHTML = "<strong>Laravel</strong>";
        $posts = [
            ['id' => 1, 'titulo' => 'Primer post', 'contenido' => 'Contenido del primer post'],
            ['id' => 2, 'titulo' => 'Segundo post', 'contenido' => 'Contenido del segundo post'],
            ['id' => 3, 'titulo' => 'Tercer post', 'contenido' => 'Contenido del tercer post'],
        ];

        return view('posts.index', compact('posts', 'etiqueta', 'etiquetaHTML'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        return "Hola desde el controlador de posts@store";
    }

    public function show($post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit($post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $post)
    {
        return "Hola desde el controlador de posts@update, post: $post";
    }

    public function destroy($post)
    {
        return "Hola desde el controlador de posts@destroy, post: $post";
    }
}
