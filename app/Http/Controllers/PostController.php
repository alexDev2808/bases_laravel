<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "Hola desde el controlador de posts@index";
    }

    public function create()
    {
        return "Hola desde el controlador de posts@create";
    }

    public function store(Request $request)
    {
        return "Hola desde el controlador de posts@store";
    }

    public function show($post)
    {
        return "Hola desde el controlador de posts@show, post: $post";
    }

    public function edit($post)
    {
        return "Hola desde el controlador de posts@edit, post: $post";
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
