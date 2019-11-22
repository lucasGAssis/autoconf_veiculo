<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    public function veiculoModelo(){
        return $this->hasMany(Modelo::class);
    }
}
