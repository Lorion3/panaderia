<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Proveedor extends Model
{
    //
    use HasFactory;
    protected $table = 'proveedores';
    protected $fillable = [
    'contacto',
    'empresa',
    'imagen',
    'estado',
    'ciudad',
    'correo',
    'colonia',
    'codigo_postal',
    'calle',
    'numero'
];
    public $timestamps = false;
    public function productos()
    {
        return $this->hasMany(Producto::class, 'proveedor_id');
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::class, 'proveedor_id');
    }
}
