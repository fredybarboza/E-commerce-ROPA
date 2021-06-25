@extends('layouts.app')

@section('content')

<div class="card-columns">
    <div class="card">
        <img class="card-img-top" src="{{asset($producto->url_img)}}" alt="">
    </div>
    <div class="card" style="padding: 10px">
        <div>
            <b style="font-size: 20px;">{{$producto->nombre}} | </b><button class="btn btn-dark"><i class="fas fa-cart-arrow-down">Add</i></button>
        </div>
        <h5><small> <b style="color: gray"> {{$producto->descripcion}}</b> </small></h5>
        <hr>
        <form action="/formulario-de-pago" method="GET">
        @csrf
        <div class="form-group">
        
            <div class="input-group mb-3" style="width: 200px;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Cantidad</span>
                </div>
                <input type="number" name="cantidad" class="form-control" placeholder="" required>
            </div>
         
        </div>
        <button class="btn btn-danger" type="submit">Comprar</button>
        </form>
        
    </div>
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11">
    Swal.fire(
  'Good job!',
  'You clicked the button!',
  'success'
)
</script>

@endsection