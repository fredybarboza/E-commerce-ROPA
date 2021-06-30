@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
    
    @if(count($pedidos) < 2)
    <div class="card">
        <div class="card-header">
            ID PEDIDO: {{$id_pedido1}} <br>
            DIRECCION: {{$dir1}} <br>
            CELULAR: {{$cel1}} <br>
            TOTAL: {{$total1}} <br>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">PRODUCTO</th>
                        <th scope="col">CANTIDAD</th>
                        <th scope="col">SUBTOTAL</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($detalle1 as $d)
                    <tr>
                        <td>{{$d->id_producto}}</td>
                        <td>{{$d->cantidad}}</td>
                        <td>{{$d->subtotal}}</td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
            <a href="/dashboard/pedidos/confirmar/{{$id_pedido1}}" class="btn btn-primary">Confirmar</a>
        </div>
    </div>
      

      
    @else
    <!--PEDIDO 1-->
    <div class="card">
        <div class="card-header">
            ID PEDIDO: {{$id_pedido1}} <br>
            DIRECCION: {{$dir1}} <br>
            CELULAR: {{$cel1}} <br>
            TOTAL: {{$total1}} <br>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">PRODUCTO</th>
                        <th scope="col">CANTIDAD</th>
                        <th scope="col">SUBTOTAL</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($detalle1 as $d)
                    <tr>
                        <td>{{$d->id_producto}}</td>
                        <td>{{$d->cantidad}}</td>
                        <td>{{$d->subtotal}}</td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
            <a href="/dashboard/pedidos/confirmar/{{$id_pedido1}}" class="btn btn-primary">Confirmar</a>
        </div>
    </div>
    <!--PEDIDO 2-->
    <div class="card">
        <div class="card-header">
            ID PEDIDO: {{$id_pedido2}} <br>
            DIRECCION: {{$dir2}} <br>
            CELULAR: {{$cel2}} <br>
            TOTAL: {{$total2}} <br>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">PRODUCTO</th>
                        <th scope="col">CANTIDAD</th>
                        <th scope="col">SUBTOTAL</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($detalle2 as $d)
                    <tr>
                        <td>{{$d->id_producto}}</td>
                        <td>{{$d->cantidad}}</td>
                        <td>{{$d->subtotal}}</td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
            <a href="/dashboard/pedidos/confirmar/{{$id_pedido2}}" class="btn btn-primary">Confirmar</a>
        </div>
    </div>
    @endif
  
   
   
   
    

@stop