<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //
    protected $table = 'proveedores';
    public $timestamos = false;
    public function productos()
    {
        return $this->hasMany(Proveedor::class, 'proveedor_id');
    }
}
