<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rutasController extends Controller
{
    //controlador es una clase
    public function rutas()
    {
        return view('rutas');
    }
}
