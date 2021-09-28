<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class instalacionController extends Controller
{
    //controlador es una clase
    public function instalacion()
    {
        return view('instalacion');
    }
}