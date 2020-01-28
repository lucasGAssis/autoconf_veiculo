<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Estado;
use App\Bairro;
class Cidade extends Model
{
    protected $table = "cidade";

    protected $fillable = [
        "nome",
        "estadoId"
    ];

    public function estado(){
        return $this->belongsTo(Estado::class);
    }
    public function bairros(){
        return $this->hasMany(Bairro::class, 'cidadeId', 'id');
    }
}
