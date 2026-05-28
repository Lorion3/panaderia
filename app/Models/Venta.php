<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    //
    public $timestamps = false;
    function Detalle_venta(){
        return $this->hasMany(Detalle_venta::class,'id_venta');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }
}
