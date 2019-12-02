<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $table = "veiculo";
    public function modelo(){
        return $this->hasOne(Modelo::class);
    }
}
