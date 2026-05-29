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


    public function detalle_venta()
    {
        return $this->hasMany(Detalle_venta::class, 'empleado_id');
    }

}
