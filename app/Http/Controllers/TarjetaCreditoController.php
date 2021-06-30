<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarjetaCreditoController extends Controller
{
    public function index(){
        return view('tarjeta.index');
    }
}
