<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vistasBladeController extends Controller
{
    //controlador es una clase
    public function vistasBlade()
    {
        return view('vistasBlade');
    }
}
