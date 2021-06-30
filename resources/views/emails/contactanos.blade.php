<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactanos</title>
</head>
<body>
    <h3>
    Correo Electronico
    </h3>
    <p><strong>Nombre:</strong> {{$contacto['name']}}</p>
    <p><strong>Apellido:</strong> {{$contacto['apellido']}}</p>
    <p><strong>Correo:</strong> {{$contacto['correo']}}</p>
    <p><strong>Numero de Telefono:</strong>{{$contacto['telefono']}}</p>
    <p><strong>Mensaje:</strong> {{$contacto['mensaje']}}</p>
    
</body>
</html>