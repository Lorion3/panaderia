<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empleado extends Model
{
    protected $fillable = [
     'nombre',
     'apellido',
     'correo',
     'contrasena',
     'rol',
     'imagen',
     'usuario',
     'telefono',
     'estatus'];

     protected $hidden = ['contrasena'];
    //
    use HasFactory;
    public $timestamps = false;
    public function pedidos(){
        return $this->hasMany(Pedido::class,'empleado_id');
    }


    public function detalle_ventas()
    {
        return $this->hasMany(Detalle_venta::class, 'empleado_id');
    }


    public function scopeActivo($query)
    {
        return $query->where('estatus', 'activo');
    }
}
