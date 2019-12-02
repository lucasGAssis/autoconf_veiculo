<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VeiculoStore;
use App\Marca;
use App\Modelo;

class VeiculoController extends Controller
{
    public function index(Request $request){
        return view('veiculo.index');
    }

    public function create(Request $request){
        $marcas = Marca::all();
        $modelos = Modelo::all();
        return view('veiculo.create', compact('marcas'), compact('modelos'));
    }

    public function store(VeiculoStore $request){
        dd($request);
    }

    public function edit(Request $request){
        return view('veiculo.edit');
    }

    public function update(Request $request){
        
    }

    public function destroy(Request $request){
        //return view('veiculo.delete');
    }

    public function show(Request $request){
        return view('veiculo.show');
    }
}
