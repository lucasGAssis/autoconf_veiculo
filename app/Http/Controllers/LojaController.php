<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LojaController extends Controller
{
    public function index(){
        return view('loja.index');
    }

    public function create(){
        return view('loja.create');
    }

    public function store(){
    
    }

    public function edit(){
        return view('loja.edit');
    }

    public function update(){
    
    }

    public function destroy(){
    
    }
}

