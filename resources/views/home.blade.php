@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <h3>Cargar Imagen</h3>
            <form action="/image" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            <input type="file" name="file" accept="image/*">
            @error('file')
            <br>
            <small class="text-danger">{{$message}}</small>
            @enderror
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
            <hr>
           @section('contenido')
            <div class="container">
            <div class="row">
            <div class="col">
            <div class="card-columns">
            @foreach($files as $f)
            <div class="card">
            <img class="card-img-top" src="{{asset($f->url)}}">
            
            </div>

            @endforeach
            </div>
            </div>
            </div>
            </div>
            @endsection
        </div>
    </div>
</div>
@endsection
