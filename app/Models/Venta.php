<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Venta extends Model
{
    use HasFactory;
    
    protected $casts = [
        'fecha' => 'datetime'
    ];
    
    protected $fillable = [
        'cliente_id',
        'total',
        'fecha',
        // 'empleado_id',  
        'estatus'
    ];
    
    public $timestamps = false;
    
    public function detalle_ventas() {
        return $this->hasMany(Detalle_venta::class, 'venta_id');
    }

    public function cliente() {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }
    
    public function empleado() {  // Agrega esta relación
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }
}