<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Veiculo;
use App\Galeria;
use Validator;


class VeiculoController extends Controller
{
    public function search(Request $request){

        // validação
        $validator = Validator::make($request->all(), [
            'cnpj' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => false, 'errors' => $validator->messages()]);
        }

        $veiculos = DB::table('veiculo')
            ->join('lojas', 'lojas.id', '=', 'veiculo.lojaId')
            ->join('modelo', 'modelo.id', '=', 'veiculo.modeloId')
            ->join('marca', 'marca.id', '=', 'modelo.marcaId')
            ->join('galerias', 'veiculo.id', '=', 'galerias.veiculoId')
            ->where('galerias.ordem', '=', 0)
            ->where('lojas.cnpj', $request->cnpj)
            ->select(
            'veiculo.id',
            'veiculo.anomodelo',
            'veiculo.anofabricacao',
            'lojas.nome as loja_nome',
            'marca.nome as marca_nome',
            'modelo.nome as modelo_nome',
            'galerias.path as fotos'
            )->get();
            
        return response()->json($veiculos);
    }
    public function getVeiculo(Request $request, $id){
        $veiculo = Veiculo::find($id);
        $veiculos = DB::table('veiculo')
        ->join('lojas', 'lojas.id', '=', 'veiculo.lojaId')
        ->join('modelo', 'modelo.id', '=', 'veiculo.modeloId')
        ->join('marca', 'marca.id', '=', 'modelo.marcaId')
        ->where('veiculo.id', $veiculo->id)
        ->select(
        'veiculo.id',
        'veiculo.anomodelo',
        'veiculo.anofabricacao',
        'lojas.nome as loja_nome',
        'marca.nome as marca_nome',
        'modelo.nome as modelo_nome')->get();
        $galerias = Galeria::where('veiculoId', $veiculo->id)->select(
            'galerias.path as fotos'
            )->get();
        return response()->json([$veiculos, $galerias]);
    }
}
