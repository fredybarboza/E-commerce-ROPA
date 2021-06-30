@extends('layouts.app')

@section('content')
<div class="container">
@if($i == 0)
<h4>CARRO DE COMPRAS</h4>
<hr>
<b>TOTAL: {{$total}}</b>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Producto</th>
      <th scope="col">Cantidad</th>
      <th scope="col">SubTotal</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
  @foreach($pedidoDetalle as $d)
    <tr>
      <td>{{$d->id_producto}}</td>
      <td>{{$d->cantidad}}</td>
      <td>{{$d->subtotal}}</td>
      <td><a href="" class="btn btn-danger"><i class="far fa-trash-alt"></i></a></td>
    </tr>
  @endforeach
      
   </tbody>
   </table>
   <a class="btn btn-primary" href="/formulario-de-pago-carrito">Pagar Todo</a>
   @else
   <div class="alert alert-primary" role="alert">
      Carrito Vacio
   </div>
   @endif
</div>

@endsection




