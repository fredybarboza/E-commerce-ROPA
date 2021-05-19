@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Asignar Rol</h1>
@stop

@section('content')

    @if(session('info'))
      <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
      </div>
    @endif

 <div class="card">
    <div class="card-body">
        <p class="h5">Nombre:</p>
        <p class="form-control">{{$user->name}}</p>
        
        
        <h2>Roles</h2>
        <!--LARAVEL COLLECTIVE-->

            <div class="car">
                <div class="card-body">
                
                    {!! Form::model($user, ['route' => ['usuarios.update', $user], 'method' => 'put']) !!}

                        @foreach($roles as $role)
                            <div>
                                <label>
                                    <!--{!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                                    {{$role->name}}-->
                                    {!! Form::radio('role', $role->id, $role->id == $r ? true : false) !!} <span>{{$role->name}}</span>
                                </label>
                            </div>
                        @endforeach
                                {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}
                </div>
            </div>

        <!--END LARAVEL COLLECTIVE-->


        <!--<form action="{{route('usuarios.update',$user)}}" method="POST">
        @csrf
        @method('PUT')
        
            <div class="form-check">
                <input class="form-check-input" type="radio" name="role" id="flexRadioDefault1" value="1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Administrador
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="role" id="flexRadioDefault2" value="2">
                <label class="form-check-label" for="flexRadioDefault2">
                    Empleado
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>-->
        
 
 </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop