<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Hola desde el controlador de puestos@index";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Hola desde el controlador de puestos@create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Hola desde el controlador de puestos@store";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Hola desde el controlador de puestos@show, puesto: $id";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Hola desde el controlador de puestos@edit, puesto: $id";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Hola desde el controlador de puestos@update, puesto: $id";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Hola desde el controlador de puestos@destroy, puesto: $id";
    }
}
