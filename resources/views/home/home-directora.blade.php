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
    <div class="row row-cols-3 justify-content-center">
        <div class="col">
            <a href="../gestores/maestros"><img src="../img/Gestor_Maestros.png" class="botones-navegacion" width="48%" alt="Responsive image"></a>
            <p>Gestor de Maestros</p>
        </div>
        <div class="col">
            <a href="../gestores/pagos"><img src="../img/Gestor_Pagos.png" class="botones-navegacion" width="48%" alt="Responsive image" ></a>
            <p>Gestor de Pagos</p>
        </div>
        <div class="col">
            <a href="../gestores/grupos"><img src="../img/Gestor_Grupos.png" class="botones-navegacion" width="73%" alt="Responsive image" aria-label="Gestor Grupos"></a>
            <p>Gestor de Grupos</p>
        </div>
        <div class="col">
            <a href="../gestores/alumnos"><img src="../img/Gestor_Alumnos.png" class="botones-navegacion" width="48%" alt="Responsive image"></a>
            <p>Gestor de Alumnos</p>
        </div>
        <div class="col">
            <a href="../gestores/usuarios"><img src="../img/Gestor_Usuarios.png" class="botones-navegacion" width="48%" alt="Responsive image"></a>
            <p>Gestor de Usuarios</p>
        </div>
    </div>
</div>
@endsection