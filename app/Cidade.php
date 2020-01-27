<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Estado;
use App\Bairro;
class Cidade extends Model
{
    protected $table = "cidade";

    public function estado(){
        return $this->hasOne(Estado::class, 'id', 'estadoId');
    }
    public function bairro(){
        return $this->belongsTo(Bairro::class, 'id', 'bairroId');
    }
}
