<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Empleado extends Authenticatable
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
        'estatus'
    ];

    protected $hidden = ['contrasena'];
    
    use HasFactory;
    public $timestamps = false;

    // Relaciones existentes
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

    public function getAuthPassword()
    {
        return $this->contrasena;
    }

    
    public function esMaster()
    {
        return $this->rol === 'master';
    }

    public function esBase()
    {
        return $this->rol === 'base';
    }
}