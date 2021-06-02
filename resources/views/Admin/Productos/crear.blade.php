@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')
 <form action="">
    <div class="form-group">
        <label for="exampleInputEmail1">Descripcion</label>
        <input type="text" class="form-control"> 
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Cantidad Inicial</label>
        <input type="number" class="form-control"> 
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Imagen del producto</label><br>
        <input type="file"  name="file" accept="image/*">
    </div>
 </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop