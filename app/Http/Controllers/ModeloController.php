<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo;

class ModeloController extends Controller
{
    public function search(Request $request){
        $modelos = Modelo::where('marcaId', $request->marcaId)->get();
        return response()->json($modelos);
    }
}
