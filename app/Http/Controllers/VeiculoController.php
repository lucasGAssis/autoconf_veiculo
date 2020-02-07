<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\VeiculoStore;
use App\Marca;
use App\Modelo;
use App\Veiculo;
use App\Loja;

class VeiculoController extends Controller
{
    public function index(Request $request){
        $busca = $request->query('busca');
        $busca = isset($busca) ? $request->query('busca') : '';
        
        if(!empty($busca)){
            $veiculos = Veiculo::where('placa', 'like', '%'.$busca.'%')->orWhereHas('modelo', function($query) use ($busca){
              $query->where('nome', 'like', '%'.$busca.'%')->orWhereHas('marca', function($query) use ($busca){
                  $query->where('nome', 'like', '%'.$busca.'%');
              });  
            })->paginate(1);
        }else{
            $veiculos = Veiculo::paginate(1);
        }
        return view('veiculo.index', compact('veiculos', 'busca')); 

    }

    public function create(Request $request){

        $marcas = Marca::all();
        $modelos = collect([]);
        $lojas = Loja::all();
        return view('veiculo.create', compact('marcas', 'modelos', 'lojas'));
    }

    public function store(VeiculoStore $request){

        $request->merge([
            'placa' => preg_replace("/[^a-zA-Z0-9]+/", "", $request->placa)
        ]);
   
        $novo = new Veiculo;

            $novo->placa = $request->placa;
            $novo->chassi = $request->chassi;
            $novo->anoFabricacao = $request->anoFabricacao;
            $novo->anoModelo = $request->anoModelo;
            $novo->modeloId = $request->modeloId;
            $novo->lojaId = $request->lojaId;
            $novo->save();

        return redirect()->route('veiculo');
    }

    public function edit(Request $request, $id){

        $veiculo = Veiculo::find($id);
        $marcas = Marca::all();
        $lojas = Loja::all();
        $modelos = Modelo::where('marcaId', $veiculo->modelo->marca->id)->get();

        return view('veiculo.edit', compact('marcas', 'modelos', 'veiculo', 'lojas'));
    }

    public function update(Request $request, $id){

        $veiculo = Veiculo::find($id);

        $request->merge([
            'placa' => preg_replace("/[^a-zA-Z0-9]+/", "", $request->placa)
        ]);
        $veiculo->update($request->except(['_token', '_method', 'marcaId']));

        return redirect()->route('veiculo');
    }

    public function destroy(Request $request, $id){

        $veiculo = Veiculo::find($id);

        $veiculo->delete();

        return redirect()->route('veiculo');
    }

    public function show(Request $request){
        
        return view('veiculo.show');
    }
}
