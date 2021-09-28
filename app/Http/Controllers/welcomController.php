<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomController extends Controller
{
    //controlador es una clase
    public function __invoke()
    {
        return view('vistaprincipal');
    }
}
