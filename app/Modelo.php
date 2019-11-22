<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    public function marcaModelo(){
        return $this->hasMany(Marca::class);
    }
}
