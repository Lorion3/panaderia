<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Producto extends Model
{
    //
    use HasFactory;
    public $timestamps = false;
    protected $table = 'productos';
    protected $fillable = [
    'proveedor_id',
    'nombre',
    'categoria',
    'precio',
    'estatus',
    'imagen1',
    'imagen2',
    'imagen3',
    'descripcion',
    'existencia'
];

    public function proveedor()
    {
        
        return $this->belongsTo(Proveedor::class, 'proveedor_id');
    }

    public function detalle_ventas()
    {
        return $this->hasMany(Detalle_venta::class, 'producto_id');
    }


    public function detalle_pedidos()
    {
        return $this->hasMany(Detalle_pedido::class, 'producto_id');
    }

    
}
