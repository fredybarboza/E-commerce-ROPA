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

      <form action="{{route('productos.destroy',$p)}}" class="formulario-eliminar" method="POST">
      <div class="btn-group">
      <a class="btn btn-primary" href="{{route('productos.edit',$p)}}">Editar</a>
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Eliminar</button>
      </div>
      </form>
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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @if (session('eliminar') == 'ok')
  <script>
    Swal.fire(
    'Eliminado!',
    'Su archivo se ha eliminado.',
    'success'
    )
  </script>
  @endif
  
  <script>
  $('.formulario-eliminar').submit(function(e)
  {
    e.preventDefault();

    Swal.fire({
      title: '¿Estas seguro?',
      text: "No podras revertir esto!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: '¡Si, Eliminar!'
      }).then((result) => {
      if (result.isConfirmed) {
        this.submit();
      }
    })
  });
  </script>

@stop