@extends('templates.pagina')

@section('estilos')
<link rel="stylesheet" type="text/css" href="../css/estilos_home.css">
@endsection

@section('logout')
<a style="margin-left: 90%; display: inline;" href="{{route('login.salir')}}"><img class="botones-navegacion" src="{{asset(img/cerrar-session)}}"></a>
@endsection

@section('cuerpo')
<!--    Contenedor con las opciones que tenemos en el home (Gestor alumnos, Gestor Pagos, etc)      -->
<div class="container-fluid">
    <div class="row align-items-start">
        <p id="bienvenida">Te damos la bienvenida {{auth()->user()->username}}</p>
    </div>
    <div class="row justify-content-center">
        <div class="col">
            <a href="{{route('maestro.consultar')}}"><img src="../img/Gestor_Maestros.png" class="botones-navegacion" width="50%" alt="Responsive image"></a>
            <p>Consultar información de maestros</p>
        </div>
        <div class="col">
            <a href="../gestores/cal-as"><img src="../img/Gestor_Calificaciones_Asistencia.png" class="botones-navegacion" width="50%" alt="Responsive image"></a>
            <p>Gestor de Alumnos</p>
        </div>
    </div>
</div>
@endsection