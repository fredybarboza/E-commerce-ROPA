@extends('layouts.app')

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">DIRECCION ENTREGA</th>
      <th scope="col">FECHA</th>
      <th scope="col">TOTAL</th>
      <th scope="col">DETALLE</th>
    </tr>
  </thead>
  <tbody>
  @foreach($pedidos as $p)
    <tr>
      <td>{{$p->id}}</td>
      <td>{{$p->direccion}}</td>
      <td>{{$p->updated_at}}</td>
      <td>{{$p->total}}</td>
      <td>
        <a href="{{route('pedidos.show', $p->id)}}" class="btn btn-link">Ver</a>
      </td>
    </tr>
  @endforeach 
  </tbody>
</table>
@endsection