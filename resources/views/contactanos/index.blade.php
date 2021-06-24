<link rel="stylesheet" href="css/contacto.css">

@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="logo">Contacta <span>Nos</span></h3>

        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <h3 class="titulo">Envia tu mensaje</h3>
                
                <form action="{{ route('contactanos.store') }}" method="POST" class="color-font">
                    @csrf
                    <p>
                        <label>Nombre</label>
                        <input type="text" name="name">
                    </p>
                    @error('name')
                          <strong><p>{{ $message }}</p></strong>
                    @enderror
                    <p>
                        <label>Apellido</label>
                        <input type="text" name="apellido">
                    </p>
                    <p>
                        <label>Correo Electronico</label>
                        <input type="email" name="correo">
                    </p>
                    @error('correo')
                          <strong><p>{{ $message }}</p></strong>
                    @enderror
                    <p>
                        <label>Numero de telefono</label>
                        <input type="tel" name="telefono">
                    </p>
                    <p class="block">
                       <label>Mensaje</label> 
                        <textarea name="mensaje" rows="3"></textarea>
                    </p>
                    @error('mensaje')
                          <strong><p>{{ $message }}</p></strong>
                    @enderror
                    <p class="block">
                        <button class="btn-success btn" type="submit">
                            Enviar
                        </button>
                    </p>
                </form>
            </div>
            <div class="contact-info">
                <div class="fonts">
                    <h4>Mas Info</h4>
                    <ul>
                        <li><i class="fas fa-phone"></i>0972-689-342</li>
                        <li><i class="fas fa-envelope-open-text"></i> contact@ecommerce.com</li>
                    </ul>
                    <p>Direccion:</p>
                    <p>Coronel Bogado</p>
                    <p>Itapua Paraguay</p>
                    <p><a href="">Ecommerce-ropa.com</a></p>
                </div>
            </div>

        </div>

    </div>

    @if (session('info'))
    <script>
        alert("{{session('info')}}")
    </script>
    @endif
    
@endsection