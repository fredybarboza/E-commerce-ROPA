@extends('layouts.app')

@section('content')

<div class="card-columns">
    <div class="card">
        <img class="card-img-top" src="{{asset($producto->url_img)}}" alt="">
    </div>
    <div class="card" style="padding: 10px">
        <div>
            <b style="font-size: 20px;">{{$producto->nombre}}</b>
        </div>
        <h5><small> <b style="color: gray"> {{$producto->descripcion}}</b> </small></h5>
        <hr>
        <form action="/formulario-de-pago" method="GET">
        @csrf
        <div class="form-group">
        <input type="number" value="{{$producto->id}}" name="id_producto" class="form-control" placeholder="" hidden>
            <div class="input-group mb-3" style="width: 200px;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Cantidad</span>
                </div>
                <input type="number" name="cantidad" class="form-control" placeholder="" required>
            </div>
         
        </div>
        <a ></a>
        <button type="submit" class="btn btn-danger" name="accion" value="add"><i class="fas fa-cart-arrow-down"></i>Add</button>
        <button type="submit" class="btn btn-dark" name="accion" value="comprar">Comprar</button>
        </form>
        
    </div>
</div>

@endsection