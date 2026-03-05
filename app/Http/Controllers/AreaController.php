<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Hola desde el controlador de areas@index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Hola desde el controlador de areas@create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Hola desde el controlador de areas@store";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Hola desde el controlador de areas@show, area: $id";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Hola desde el controlador de areas@edit, area: $id";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Hola desde el controlador de areas@update, area: $id";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Hola desde el controlador de areas@destroy, area: $id";
    }
}
