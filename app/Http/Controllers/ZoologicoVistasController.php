<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZoologicoVistasController extends Controller
{
    public function Raton()
    {
        return view("zoologico.raton");
    }

    public function Gato()
    {
        return view("zoologico.gato");
    }

    public function Perro()
    {
        return view("zoologico.perro");
    }

    public function Principal()
    {
        return view("zoologico.principal");
    }
}
