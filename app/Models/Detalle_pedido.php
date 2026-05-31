<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Pedido;
use App\Models\Producto;
use illuminate\Database\Eloquent\Relations\BelongsTo;



class Detalle_Pedido extends Model
{
    //
    use HasFactory;
    protected $table = 'detalle_pedidos';
    public $timestamps = false;

    protected $fillable = [
    'pedido_id',
    'producto_id',
    'cantidad',
    'impuesto',
    'precio',
    'descuento'
];

    public function pedido(){
        return $this->belongsTo(Pedido::class,'pedido_id');
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }

}
