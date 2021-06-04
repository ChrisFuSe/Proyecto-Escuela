@extends('templates.pagina-menu-botones')

@section('imagen-opc')
{{ asset('img/Gestor_Calificaciones_Asistencia.png') }}
@endsection

@section('cuerpo')
<!--    Contenedor con las opciones que tenemos en el gestor de calificaciones     -->
<div class="container-fluid" style="margin-top: 5%;">
    <div class="row row-cols-3 justify-content-center">
        <div class="col">
            <a href="calificaciones/registrar"><img src="{{ asset('img/Iconos Gestor Calificaciones Asistencias/Ingresar calificacion.png') }}" class="botones-navegacion" alt="Responsive image" width="50%"></a>
            <p>Ingresar calificaciones</p>
        </div>
        <div class="col">
            <a href="calificaciones/modificar"><img src="{{ asset('img/Iconos Gestor Calificaciones Asistencias/Modificar calificacion.png') }}" class="botones-navegacion" alt="Responsive image" width="50%"></a>
            <p>Modificar calificación</p>
        </div>
    </div>
</div>
@endsection