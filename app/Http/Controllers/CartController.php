<?php

namespace App\Http\Controllers;
use App\Models\Pedido;
use App\Models\Producto;
use App\Models\DetallePedido;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedido = Pedido::where('estado', 0)->where('id_usuario', auth()->user()->id)->get();
        $i = 0;
        foreach($pedido as $p){
            $id = $p->id;
            $total = $p->total;
        }
        $pedidoDetalle = DetallePedido::where('id_pedido', $id)->get();
        if($pedido->count()==null){
            $i = 1;
            return view('cart', compact('i'));
        }
        else{
            foreach($pedido as $p){
                $id = $p->id;
                $total = $p->total;
            }
            $pedidoDetalle = DetallePedido::where('id_pedido', $id)->get();
            return view('cart', compact('pedidoDetalle', 'total','i'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pedido = Pedido::where('entregado', false)->where('id_usuario', auth()->user()->id)->get();
        if($pedido->count()<2){//CONTROL DE PEDIDOS MAX:2
        
        if($request->metodocompra=="1"){//COMPRA DIRECTA
            $producto = Producto::find($request->id_producto);
        $precio = $producto->precio_venta;
        $total = $precio * $request->cantidad;
        $producto = Producto::find($request->id_producto);
        
        Pedido::create([
            'id_usuario' => auth()->user()->id,
            'total' => $total,
            'estado' => 1,
            'direccion' => $request->direccion,
            'barrio' => $request->barrio,
            'celular' => $request->celular
        ]);
        $last = Pedido::all()->last();
        $id = $last->id;
        DetallePedido::create([
            'id_pedido' => $id,
            'id_producto' => $request->id_producto,
            'cantidad' => $request->cantidad,
            'subtotal' => $total
        ]);
        $producto->cantidad_stock = $producto->cantidad_stock - $request->cantidad;
        $producto->save();
        return redirect()->route('pedidos.index');
        }
        else{
            if($request->metodocompra=="2"){//COMPRACARRITO
                $pedido = Pedido::where('estado', 0)->where('id_usuario', auth()->user()->id)->get();
                
                foreach($pedido as $p){
                    $idp = $p->id;
                }
                $pedidoDetalle = DetallePedido::where('id_pedido', $idp)->get();

                foreach($pedidoDetalle as $dp){
                    $product = Producto::find($dp->id_producto);
                    $n1 = $product->cantidad_stock;
                    $n2 = $dp->cantidad;
                    $r = $n1 - $n2;
                    $product->cantidad_stock = $r;
                    $product->save();
                }
                
                foreach($pedido as $p){
                    $p->estado = 1;
                    $p->direccion = $request->direccion;
                    $p->celular = $request->celular;
                    $p->barrio = $request->barrio;
                    $id = $p->id;
                    $p->save();
                }

            }
                
        }
      }
      else{
          return "Supero el maximo de pedidos";
      }
    }
    
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}
