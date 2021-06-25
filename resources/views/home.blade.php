@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col">
      <div class="card-columns">
        @foreach($productos as $p)
          <div class="card" style="padding: 5px;">
            <a href="/view-product/{{$p->id}}"><img class="card-img-top" src="{{asset($p->url_img)}}" alt=""></a>
            <a href="" style="color: gray;"><b>{{$p->nombre}} | {{$p->descripcion}} </b></a><br>
            <a href="" style="color: black;"> <b>GS. {{$p->precio_venta}}</b> </a>
          </div>
        @endforeach
      </div>
    </div>
  </div>

</div>

@endsection




