<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'id_usuario',
        'total',
        'entregado',
        'estado',
        'created_at',
        'direccion',
        'barrio',
        'celular'
    ];
}
