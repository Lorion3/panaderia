<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    public $timestamos = false;

    public function proveedor()
    {
        return $this->hasMany(Proveedor::class, 'proveedor_id');
    }

    public function detalle_ventas()
    {
        return $this->hasMany(Detalle_venta::class, 'producto_id');
    }


    public function detalle_pedidos()
    {
        return $this->hasMany(Detalle_pedido::class, 'id_producto');
    }

    
}
