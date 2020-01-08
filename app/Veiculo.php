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
}