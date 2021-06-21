@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
<h1>Editar Producto</h1>
@stop

@section('content')
 <div class="container">
 <hr>
    <form action="{{route('productos.update',$producto)}}"method="POST">
    @csrf
    @method('PUT')
    
    <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" name="nombre" class="form-control" value="{{$producto->nombre}}"> 
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Descripcion</label>
        <textarea class="form-control" name="descripcion" >{{$producto->descripcion}}</textarea> 
    </div>
    
    <div class="form-group">
    <div class="Col" style="margin-right: 10px;">
        <label for="exampleInputEmail1">Cantidad Inicial</label>
        <input type="number" name="cantidad"  class="form-control" value="{{$producto->cantidad_stock}}"> 
    </div>

    </div>
    <div class="form-group" style="margin-right: 10px;">
        <label for="exampleInputEmail1">Precio de venta</label>
        <input type="number" name="precio_venta"  class="form-control" value="{{$producto->precio_venta}}"> 
    </div>
    <a href="/dashboard/productos" class="btn btn-danger" tabindex="5">Cancelar</a>
    <button class="btn btn-primary" type="submit">Guardar</button>
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop