<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Venta extends Model
{
    //
    use HasFactory;
    protected $casts = [
    'fecha' => 'datetime'
];
protected $fillable = [
    'cliente_id',
    'total',
    'fecha',
    'vendedor_id',
    'estatus'
];
    public $timestamps = false;
    public function Detalle_ventas(){
        return $this->hasMany(Detalle_venta::class,'venta_id');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }
}
