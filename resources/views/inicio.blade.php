<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
</head>
<body>
    Hola mundo desde mi inicio {{$nombre}} {{$apellido}}
    <h1>{{$elementos[5]}}</h1>
    <a href="{{route('perro')}}">Salir</a>

    <?php
    for ($i=0; $i < count($elementos); $i++) {
        echo $elementos[$i] . "<br>";
    }
?>

@foreach ($elementos as $elemento)

{{$elemento}} <br>

@if ($elemento == 2)
    <h1>Esto es un número</h1>
@else
    <h1>Esto es otra cosa</h1>
@endif

@endforeach
</body>
</html>
