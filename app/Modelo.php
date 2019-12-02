<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    protected $table = "modelo";
    public function marca(){
        return $this->hasOne(Marca::class);
    }

    public function veiculo(){
        return $this->belongsTo(Modelo::class);
    }
}

