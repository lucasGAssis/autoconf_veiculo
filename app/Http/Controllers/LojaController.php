<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LojaStore;
use App\Loja;

class LojaController extends Controller
{
    public function index(){
        return view('loja.index');
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

    public function edit(){
        return view('loja.edit');
    }

    public function update(){
    
    }

    public function destroy(){
    
    }
}

