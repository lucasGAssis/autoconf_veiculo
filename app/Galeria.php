<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $fillable = [
        "veiculoId"
    ];
    public function veiculo(){
        return $this->hasOne(Veiculo::class, 'veiculoId', 'id');
    }
}
