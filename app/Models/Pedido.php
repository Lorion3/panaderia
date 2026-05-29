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

    public function detalle_pedidos()
    {
        return $this->hasMany(Detalle_pedido::class, 'pedido_id');
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }
}
