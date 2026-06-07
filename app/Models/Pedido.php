<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pedido extends Model
{
    use HasFactory;
    
    protected $casts = [
        'fecha' => 'datetime'
    ];
    
    protected $fillable = [
        'proveedor_id',
        'empleado_id',
        'fecha',
        'total',
        'estatus'
    ];

    public $timestamps = false;
    
    public function proveedor() {
        return $this->belongsTo(Proveedor::class, 'proveedor_id');
    }

    public function detalle_pedidos() {
        return $this->hasMany(Detalle_pedido::class, 'pedido_id');
    }

    public function empleado() {
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }
}