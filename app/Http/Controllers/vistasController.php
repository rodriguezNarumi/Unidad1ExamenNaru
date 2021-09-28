<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vistasController extends Controller
{
    //controlador es una clase
    public function vistas()
    {
        return view('vistas');
    }
}
