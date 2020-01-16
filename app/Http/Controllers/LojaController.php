<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LojaStore;
use App\Loja;
use App\Http\Requests\LojaUpdate;

class LojaController extends Controller
{
    public function index(Request $request){

        $busca = $request->query('busca');
        $busca = isset($busca) ? $request->query('busca') : '';
        
        if(!empty($busca)){
            $lojas = Loja::where('nome', 'like', '%'.$busca.'%')
                    ->orWhere('id', '=', $busca)->paginate(2);
  
        }else{
            $lojas = Loja::paginate(3);
        }
        return view('loja.index', compact('lojas', 'busca')); 

    }

    public function create(){
        return view('loja.create');
    }

    public function store(LojaStore $request){

        $request->merge([
            'cnpj' => str_replace(['.', '/','-'], '', $request->cnpj),
        ]);

        $loja = Loja::insert($request->except(['_token', '_method']));

        return redirect()->route('loja');
    }

    public function edit(Request $request, $id){
        $loja = Loja::find($id);

        return view('loja.edit', compact('loja'));
    }

    public function update(LojaUpdate $request, $id){
        $loja = Loja::find($id);
        $request->merge([
            'cnpj' => str_replace(['.', '/','-'], '', $request->cnpj),
        ]);

        $loja->update($request->except(['_token', '_method']));

        return redirect()->route('loja');    
    }

    public function destroy(Request $request, $id){

        $loja = Loja::find($id);

        $loja->delete();

        return redirect()->route('loja');
    }
}

