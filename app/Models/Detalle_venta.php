<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detalle_Venta extends Model
{

    protected $table = 'detalle_ventas'; 
    public $timestamps = false;

    function Venta(){
        return $this->belongsTo(Venta::class,'venta_id');
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
