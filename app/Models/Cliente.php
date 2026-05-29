<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    public $timestamps = false;
    function Venta(){
        return $this->hasMany(Venta::class,'cliente_id');
    }

    
}
