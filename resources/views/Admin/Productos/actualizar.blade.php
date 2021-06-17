@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    
@stop

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">DESCRIPCION</th>
      <th scope="col">CANTIDAD</th>
      <th scope="col">PRECIO DE VENTA</th>
      <th scope="col">ACCION</th>
    </tr>
  </thead>
  <tbody>
  @foreach($productos as $p)
    <tr>
    <td>{{$p->id}}</td>
      <td>{{$p->nombre}}</td>
      <td>{{$p->descripcion}}</td>
      <td>{{$p->cantidad_stock}}</td>
      <td>{{$p->precio_venta}}</td>
      <td>
      <div class="btn-group">
      <a class="btn btn-primary" href="{{route('productos.edit',$p)}}">Editar</a>
      <button class="btn btn-danger">Eliminar</button>
      </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop