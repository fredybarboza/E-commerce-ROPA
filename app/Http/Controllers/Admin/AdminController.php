<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\DetallePedido;

class AdminController extends Controller
{
    public function index(){
        
        $pedidos = Pedido::where('entregado', false)->get();

        return view('admin.dashboard', compact('pedidos'));
    }

    public function createView(){
        return view('admin.productos.crear');
    }

    public function pedidoDetalle($id_usuario){
        $i=0;
        $pedidos = Pedido::where('entregado', false)->where('estado',0)->where('id_usuario', $id_usuario)->get();
        $c = $pedidos->count();

        foreach($pedidos as $p){
            if($i==0){
                $id_pedido1 = $p->id;
                $dir1 = $p->direccion;
                $cel1 = $p->celular;
                $total1 = $p->total;
                $i++;
            }
            else{
                if($i==1){
                    $id_pedido2 = $p->id;
                    $dir2 = $p->direccion;
                    $cel2 = $p->celular;
                    $total2 = $p->total;
                    $i++; 
                }
            }
        }

        $detalle1 = DetallePedido::where('id_pedido', $id_pedido1)->get();
        if($c>=2){
        $detalle2 = DetallePedido::where('id_pedido', $id_pedido2)->get();
        return view('admin.detalle', compact('c','pedidos','id_pedido1', 'id_pedido2','dir1', 'dir2', 'cel1','cel2','total1','total2','detalle1', 'detalle2'));
        }
        else{
            return view('admin.detalle', compact('c','pedidos','id_pedido1','detalle1','dir1', 'cel1','total1'));
        }
        
        
    }

    public function confirmarEntrega($id_pedido){
        $pedido = Pedido::find($id_pedido);
        $pedido->entregado = true;
        $pedido->save();
        return redirect('/dashboard');
    }
}
