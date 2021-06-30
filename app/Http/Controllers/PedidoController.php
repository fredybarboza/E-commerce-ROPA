<?php

namespace App\Http\Controllers;
use App\Models\Pedido;
use App\Models\Producto;
use App\Models\DetallePedido;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::where('id_usuario', auth()->user()->id)->where('estado', 1)->get();
        return view('pedidos', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalle = DetallePedido::where('id_pedido', $id)->get();
        foreach($detalle as $d){
            $detalle = DetallePedido::select('productos.nombre','detalle_pedidos.id_producto' ,'detalle_pedidos.cantidad', 'detalle_pedidos.subtotal')
                  ->join('productos', 'detalle_pedidos.id_producto', '=', 'productos.id')
                  ->where('id_pedido', $id)
                  ->get();
        }
        return view('lista', compact('detalle'));
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
    public function destroy($id)
    {
        //
    }
}
