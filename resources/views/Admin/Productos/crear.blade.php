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
    <div class="row g-3">
    <div class="Col" style="margin-right: 10px;">
        <label for="exampleInputEmail1">Cantidad Inicial</label>
        <input type="number" name="cantidad"  class="form-control"> 
    </div>
    <div class="form-group" style="margin-right: 10px;">
        <label for="exampleInputEmail1">Precio de compra</label>
        <input type="number" name="precio_compra"  class="form-control"> 
    </div>
    <div class="form-group" style="margin-right: 10px;">
        <label for="exampleInputEmail1">Precio de venta</label>
        <input type="number" name="precio_venta"  class="form-control"> 
    </div>
    </div>
    <div class="row g-3">
    <div class="form-group" style="margin-right: 10px;">
        <label for="exampleInputEmail1">Imagen del producto</label><br>
        <input type="file" name="file" id="file" accept="image/*"><br>
        @error('file')
            <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="card">
        <img id="imagepreview" src="" alt="">
    </div>
    </div>
    <button class="btn btn-primary" type="submit">Guardar</button>
 </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> 

    document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("imagepreview").setAttribute('src', event.target.result);
            };

            reader.readAsDataURL(file);
            var img = document.getElementById('imagepreview');
            img.style.height = '200px';
            img.style.width = '250px';

        }
    </script>
@stop