@extends('templates.pagina-menu-botones')

@section('imagen-opc')
{{ asset('img/Gestor_Calificaciones_Asistencia.png') }}
@endsection

@section('cuerpo')
<!--    Contenedor con las opciones que tenemos en el gestor de calificaciones y asistencia     -->
<div class="container-fluid" style="margin-top: 5%;">
    <div class="row row-cols-3 justify-content-center">
        <div class="col">
            <a href="cal_as/calificaciones"><img src="../img/Iconos Gestor Calificaciones Asistencias/Gestionar calificaciones.png" class="botones-navegacion" alt="Responsive image" width="50%"></a>
            <p>Gestionar calificaciones</p>
        </div>
        <div class="col">
            <a href="alumnos/consultar"><img src="../img/Iconos Gestor Calificaciones Asistencias/Consultar_Estudiante.png" class="botones-navegacion" alt="Responsive image" width="50%"></a>
            <p>Consultar información de alumnos</p>
        </div>
        <div class="col">
            <a href="cal_as/asistencia"><img src="../img/Gestor_Calificaciones_Asistencia.png" class="botones-navegacion" alt="Responsive image" width="50%"></a>
            <p>Gestionar asistencia</p>
        </div>
    </div>
</div>
@endsection