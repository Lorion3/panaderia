<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //
    protected $table = 'proveedores';
<<<<<<< HEAD
    public $timestamps = false;
    public function productos()
    {
        return $this->hasMany(Producto::class, 'proveedor_id');
=======
    public $timestamos = false;
    public function productos()
    {
        return $this->hasMany(Proveedor::class, 'proveedor_id');
>>>>>>> 1625d6f1af05b39ee934ae9da5d18f660d568757
    }
}
