@extends('templates.pagina')

@section('estilos')
<link rel="stylesheet" type="text/css" href="../css/estilos_home.css">
@endsection

@section('logout')
<a style="margin-left: 90%; display: inline;" href="{{route('login.salir')}}"><img style="position: absolute; margin-top:-3%;" width="4%" class="botones-navegacion" src="{{asset('img/cerrar-sesion.png')}}"></a>
@endsection

@section('cuerpo')
<!--    Contenedor con las opciones que tenemos en el home (Gestor alumnos, Gestor Pagos, etc)      -->
<div class="container-fluid">
    <div class="row align-items-start">
        <p id="bienvenida">Te damos la bienvenida {{auth()->user()->username}}</p>
    </div>
    <div class="row row-cols-3 justify-content-center" style="margin-top: 3%;">
        <div class="col">
            <a href="{{route('maestro.consultar')}}"><img src="../img/Gestor_Maestros.png" class="botones-navegacion" width="50%" alt="Responsive image"></a>
            <p>Consultar información de maestros</p>
        </div>
        <div class="col">
            <a href="/gestores/alumnos/consultar"><img src="../img/Iconos Gestor Calificaciones Asistencias/Consultar_Estudiante.png" class="botones-navegacion" alt="Responsive image" width="50%"></a>
            <p>Consultar información de alumnos</p>
        </div>
        <div class="col">
            <a href="/gestores/grupos/consultarE"><img src="../img/Gestor_Calificaciones_Asistencia.png" class="botones-navegacion" width="50%" alt="Responsive image"></a>
            <p>Gestor Grupos</p>
        </div>
    </div>
</div>
@endsection