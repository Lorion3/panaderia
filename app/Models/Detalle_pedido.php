<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalle_Pedido extends Model
{
    //
    protected $table = 'detalle_pedidos';
    public $timestamps = false;
    function Pedido(){
        return $this->belongsTo(Pedido::class,'pedido_id');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }

}
