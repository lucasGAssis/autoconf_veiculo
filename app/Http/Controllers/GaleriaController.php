<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veiculo;
use App\Galeria;

class GaleriaController extends Controller
{
    public function show(Request $request, $id){
        $veiculo = Veiculo::find($id);
        $galerias = Galeria::where("veiculoId", $veiculo->id)->get();
    return view('veiculo.galeria.galeria', compact('veiculo', 'galerias'));
    }

    public function save(Request $request, $id){
        $veiculo = Veiculo::find($id);
        for($i = 0; $i < count($request->allFiles()['image']); $i++){
            $file = $request->allFiles()['image'][$i];
            $image = new Galeria;
            $image->veiculoId = $veiculo->id;
            $image->path = $file->store('veiculo/'.$veiculo->id);
            $image->ordem = $i;
            $image->save();
            unset($image);
        }
        return redirect()
                    ->route('veiculo')
                    ->with('success', 'Produto Atualizado com sucesso');
    }
}
