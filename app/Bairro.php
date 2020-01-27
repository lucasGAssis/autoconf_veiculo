<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cidade;
use App\Endereco;

class Bairro extends Model
{
    protected $table = "bairro";

    public function cidade(){
        return $this->belongsTo(Cidade::class, 'id', 'cidadeId');
    }
    public function endereco(){
        return $this->belongsTo(Endereco::class, 'id', 'enderecoId');
    }
}
