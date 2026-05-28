<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //
    public $timestamos = false;
    function Provedor(){
        return $this->hasMany(Proveedor::class,'proveedor_id');
    }
}
