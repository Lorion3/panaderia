<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
<<<<<<< HEAD
    public $timestamps = false;
=======
    public $timestamos = false;

>>>>>>> 1625d6f1af05b39ee934ae9da5d18f660d568757
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'proveedor_id');
    }
}
