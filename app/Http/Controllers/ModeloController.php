<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModeloController extends Controller
{
    public function search(Request $request){
        $search = $request->post('search');
    }
}
