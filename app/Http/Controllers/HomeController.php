<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index()
    // {
    //     return "Hola desde el controlador de home@index";
    // }

    public function __invoke()
    {
        return "Hola desde el controlador de home, método __invoke";
    }
}
