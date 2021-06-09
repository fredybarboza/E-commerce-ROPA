@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Nuevo Producto</h1>
@stop

@section('content')
 <form action="{{route('productos.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" name="nombre" class="form-control"> 
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Descripcion</label>
        <textarea class="form-control" name="descripcion" ></textarea> 
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Cantidad Inicial</label>
        <input type="number" name="cantidad"  class="form-control"> 
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Precio de compra</label>
        <input type="number" name="precio_compra"  class="form-control"> 
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Precio de venta</label>
        <input type="number" name="precio_venta"  class="form-control"> 
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Imagen del producto</label><br>
        <input type="file" name="file" accept="image/*"><br>
        @error('file')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <button type="submit">Guardar</button>
 </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop