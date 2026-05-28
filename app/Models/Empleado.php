<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    public $timestamps = false;
    function Pedido(){
        return $this->hasMany(Pedido::class,'empleado_id');
    }

    public function detalle_pedido()
    {
        return $this->hasMany(Detalle_pedido::class, 'empleado_id');
    }

}
