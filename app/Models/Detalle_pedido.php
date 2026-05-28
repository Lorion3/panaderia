<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalle_pedido extends Model
{
    //
    protected $table = 'detalle_ventas';
    public $timestamps = false;
    function Pedido(){
        return $this->hasMany(Pedido::class,'pedido_id');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }


}
