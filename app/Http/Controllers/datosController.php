<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class datosController extends Controller
{
    //controlador es una clase
    public function datos()
    {
        return view('datos');
    }
}
