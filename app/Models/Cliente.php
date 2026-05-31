<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Cliente extends Model
{
    //
    protected $fillable = ['nombre',
    'apellido_paterno',
    'apellido_materno',
    'telefono',
    'contrasena',
    'usuario',
    'correo',
    'estatus',
    'imagen',
    'direccion'];

protected $hidden = ['contrasena'];
    use HasFactory;
    public $timestamps = false;

    //_____________________________________________

    public function scopeActivo($query)
    {
        return $query->where('estatus', 'activo');
    }
    
    function ventas(){
        return $this->hasMany(Venta::class,'cliente_id');
    }

    
}
