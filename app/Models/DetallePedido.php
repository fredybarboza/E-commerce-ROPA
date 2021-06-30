<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_pedido';
    public $incrementing = false;
    protected $fillable = [
        'id_pedido',
        'id_producto',
        'cantidad',
        'subtotal'
    ];
}
