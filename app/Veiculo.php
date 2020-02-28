<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $table = "veiculo";

    protected $fillable = [
        "placa",
        "chassi",
        "modeloId",
        "anoFabricacao",
        "anoModelo"
    ];

    public $timestamps = true;
    
    public function modelo(){
        return $this->hasOne(Modelo::class, 'id', 'modeloId');
    }
    public function loja(){
        return $this->hasOne(Loja::class, 'id', 'lojaId');
    }

    public function galeria(){
        return $this->hasMany(Galeria::class, 'id', 'veiculoId');
    }
}