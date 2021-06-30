@extends('layouts.app')

@section('content')
<div class="container">
@if(count($detalle) >= 1)
<table class="table">
  <thead>
    <tr>
      <th scope="col">PRODUCTO</th>
      <th scope="col">CANTIDAD</th>
      <th scope="col">SUBTOTAL</th>
    </tr>
  </thead>
  <tbody>
  @foreach($detalle as $d)
    <tr>
      <td>{{$d->nombre}}</td>
      <td>{{$d->cantidad}}</td>
      <td>{{$d->subtotal}}</td>
    </tr>
  @endforeach 
  </tbody>
</table>
@else
<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">LO SENTIMOS :(</h4>
  <p>No es posible visualizar el detalle en este momento</p>
  <hr>
  <p class="mb-0">TiendaOnline.com</p>
</div>
@endif
</div>
@endsection