<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cidade;

class Estado extends Model
{
    protected $table = "estado";

    protected $fillable = [
        "nome",
    ];

    public function cidades(){
        return $this->hasMany(Cidade::class, 'estadoId', 'id');
    }
}
