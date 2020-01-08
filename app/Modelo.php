<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    protected $table = "modelo";
    
    protected $fillable = [
        "nome",
        "marcaId"
    ];

    public function marca(){
        return $this->hasOne(Marca::class, 'id', 'marcaId');
    }

    public function veiculo(){
        return $this->belongsTo(Modelo::class);
    }
}

