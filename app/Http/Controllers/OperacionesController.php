<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    public function Suma()
    {
        return view("operaciones.suma");
    }

    public function Multiplicacion()
    {
        return view("operaciones.multiplicacion");
    }

    public function Exponente()
    {
        return view("operaciones.exponente");
    }

    public function Salir()
    {
        return view("operaciones.salir");
    }

    public function Menu()
    {
        return view("operaciones.menu");
    }

}
