<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    // public function index()
    // {
    //     return "Hola desde el controlador de home@index";
    // }

    public function __invoke()
    {
        return view('welcome');
    }
}
