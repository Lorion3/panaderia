<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Detalle_Venta extends Model
{
use HasFactory;
    protected $table = 'detalle_ventas'; 
    public $timestamps = false;
protected $fillable = [
    'venta_id',
    'producto_id',
    'empleado_id',
    'impuesto',
    'cantidad',
    'precio',
    'descuento'
];

    public function venta(){
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
