<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
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
