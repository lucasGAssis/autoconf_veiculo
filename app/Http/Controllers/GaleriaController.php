<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    public function show(){

    return view('veiculo.galeria.galeria');
    }
}
