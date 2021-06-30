@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">ID USUARIO</th>
      <th scope="col">TOTAL</th>
      <th scope="col">FECHA</th>
      <th scope="col">ACCIÓN</th>
    </tr>
  </thead>
  <tbody>
   @foreach($pedidos as $p)
    <tr>
      <td>{{$p->id}}</td>
      <td>{{$p->id_usuario}}</td>
      <td>{{$p->total}}</td>
      <td>{{$p->created_at}}</td>
      <td><a href="/dashboard/pedidos/{{$p->id_usuario}}" class="btn btn-primary">Detalles</a></td>
    </tr>
   @endforeach
    </tr>
  </tbody>
</table>
</div>
   
    

@stop