<?php

namespace App\Http\Controllers;
use App\Models\DetallePedido;
use App\Models\Pedido;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function destroy($id_pedido)
    {
        $pedido = Pedido::where('id',$id_pedido)->where('id_usuario', auth()->user()->id)->get();
        if($pedido->count()!=null){
        $pedido = Pedido::find($id_pedido);
        $pedido->delete();
        $detalle = DetallePedido::where('id_pedido',$id_pedido)->get();
        foreach($detalle as $d){
            $d->delete();
        }
        }
        else{
            return "ERROR";
        }
    }
}
