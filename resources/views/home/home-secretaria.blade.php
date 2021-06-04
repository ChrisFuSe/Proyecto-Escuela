@extends('templates.pagina')

@section('estilos')
<link rel="stylesheet" type="text/css" href="../css/estilos_home.css">
@endsection

@section('cuerpo')
<!--    Contenedor con las opciones que tenemos en el home (Gestor alumnos, Gestor Pagos, etc)      -->
<div class="container-fluid">
    <div class="row align-items-start">
        <p id="bienvenida">Te damos la bienvenida </p>
    </div>
    <div class="row justify-content-center" style="margin-top: 6%;">
        <div class="col">
            <a href="../gestores/maestros"><img src="../img/Gestor_Maestros.png" class="botones-navegacion" width="50%" alt="Responsive image"></a>
            <p>Gestor de Maestros</p>
        </div>
        <div class="col">
            <a href="../gestores/pagos"><img src="../img/Gestor_Pagos.png" class="botones-navegacion" width="50%" alt="Responsive image"></a>
            <p>Gestor de Pagos</p>
        </div>
        <div class="col">
            <a href="../gestores/alumnos"><img src="../img/Gestor_Alumnos.png" class="botones-navegacion" width="50%" alt="Responsive image"></a>
            <p>Gestor de Alumnos</p>
        </div>
        <div class="col">
            <a href="../gestores/cal-as"><img src="../img/Gestor_Calificaciones_Asistencia.png" class="botones-navegacion" width="50%" alt="Responsive image"></a>
            <p>Gestor de Alumnos</p>
        </div>
    </div>
</div>
@endsection