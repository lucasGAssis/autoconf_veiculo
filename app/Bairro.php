<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cidade;
use App\Endereco;

class Bairro extends Model
{
    protected $table = "bairro";

    /*protected $fillable = [
        "nome",
        "cidadeId"
    ];*/

    public function cidade(){
        return $this->belongsTo(Cidade::class);
    }
    public function enderecos(){
        return $this->hasMany(Endereco::class, 'bairroId', 'id');
    }
}
