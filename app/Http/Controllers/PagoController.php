<?php

namespace App\Http\Controllers;
use App\Models\Pedido;
use App\Models\DetallePedido;
use App\Models\Producto;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function index(Request $request){
        //VALIDACIÓN DE STOCK
        $i = 0;
        $pedido = Pedido::where('estado', 0)->where('id_usuario', auth()->user()->id)->get();
        $producto = Producto::find($request->id_producto);
        if($pedido->count()==null){
            if($request->cantidad<=$producto->cantidad_stock){
                $i = 0;
            }
            else{
                $i = 1;
            }
        }
        else{
            foreach($pedido as $p){
                $pedido_id = $p->id;
            }
            $detallePedido = DetallePedido::find($pedido_id);
            $s = $detallePedido->cantidad + $request->cantidad;
            if($s>$producto->cantidad_stock){
                $i = 1;
            }
        }

        if($i==0){
        if($request->accion=="add"){
             $producto = Producto::find($request->id_producto);
             $precio = $producto->precio_venta;
             $total = $precio * $request->cantidad;
             $pedido = Pedido::where('estado', 0)->where('id_usuario', auth()->user()->id)->get();
             


             //Carrito Nuevo
             if($pedido->count()==null){
                Pedido::create([
                    'id_usuario' => auth()->user()->id,
                    'total' => $total
                ]);
                $last = Pedido::all()->last();
                $id = $last->id;
                
                DetallePedido::create([
                    'id_pedido' => $id,
                    'id_producto' => $request->id_producto,
                    'cantidad' => $request->cantidad,
                    'subtotal' => $total
                ]);
                return redirect()->route('cart.index');
             }
             else{//Agregar al carrito existente
               foreach($pedido as $p){ 
                   $id_pedido = $p->id;  
                   $t = $p->total;
                   $r = $total + $t;
                   $p->total = $r;
                   $p->save();
               }
               //Agregar a producto existente
               $pedidoDetalle = DetallePedido::where('id_pedido', $id_pedido)->where('id_producto', $request->id_producto)->get();
               if($pedidoDetalle->count()==null){
                DetallePedido::create([
                    'id_pedido' => $id_pedido,
                    'id_producto' => $request->id_producto,
                    'cantidad' => $request->cantidad,
                    'subtotal' => $total
                ]);
                
               }
               
               else{
                   
                   foreach($pedidoDetalle as $d){
                    $exist = $d->cantidad;
                    $existSubTotal = $d->subtotal;
                    $newExist = $exist + $request->cantidad;
                       $d->cantidad = $newExist;
                       $d->subtotal = $existSubTotal + $total;
                       $d->save();
                   }
               }

               return redirect()->route('cart.index');
             }
        }
        else{
            if($request->accion=="comprar"){//VALIDACIÓN DE CANTIDAD EN STOCK
                $producto = Producto::find($request->id_producto);
                if($request->cantidad<=$producto->cantidad_stock){
                $id_producto = $request->id_producto;
                $cantidad = $request->cantidad;
                $id_usuario = auth()->user()->id;
                $nombre = $producto->nombre;
                $p = $producto->precio_venta;
                $t = $p * $cantidad;
                return view('tarjeta.index', compact('id_producto', 'cantidad', 'id_usuario', 'nombre', 't','p'));
                }
                else{
                    return "Sin Stock";
                }
            }
        }
    }
    else{
        return "Cantidad no disponible en stock";
    }
    }

    public function pagoCarrito(){
        $pedido = Pedido::where('estado', 0)->where('id_usuario', auth()->user()->id)->get();
        foreach($pedido as $p){
            $id = $p->id;
        }

        $pedidoDetalle = DetallePedido::where('id_pedido', $id)->get();
        $i = 0;
        foreach($pedidoDetalle as $d){
            $producto = Producto::find($d->id_producto);
            if($d->cantidad>$producto->cantidad_stock){
                $i = $i + 1;
            }
        }
        if($i==0){
        return view('tarjeta.carrito');
        }
        else{
            return "Error de stock";
        }
    }



}
