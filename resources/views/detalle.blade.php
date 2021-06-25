@extends('layouts.app')

@section('content')

<div class="card-columns">
    <div class="card">
        <img class="card-img-top" src="{{asset($producto->url_img)}}" alt="">
    </div>
    <div class="card" style="padding: 10px">
        <h3 style="margin: 5px;"><b>{{$producto->nombre}}</b></h3>
        <h5><small> <b style="color: gray"> {{$producto->descripcion}}</b> </small></h5>
        <hr>
        <form action="">
        <div class="form-group">
        
            <div class="input-group mb-3" style="width: 200px;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Cantidad</span>
                </div>
                <input type="number" class="form-control" placeholder="" aria-label="">
            </div>
         
        </div>
        <a href=" {{route('tarjeta.index')}} " class="btn btn-danger" type="submit">Comprar</a>
        <button class="btn btn-primary">Añadir alcarrito</button>
        </form>
    </div>
</div>

<script>
    
</script>

@endsection