<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    public function modelo(){
        return $this->hasOne(Modelo::class);
    }
}
