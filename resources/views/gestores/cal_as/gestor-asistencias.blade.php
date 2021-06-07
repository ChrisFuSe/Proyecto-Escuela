@extends('templates.pagina-menu-botones')

@section('imagen-opc')
{{ asset('img/Gestor_Calificaciones_Asistencia.png') }}
@endsection

@section('cuerpo')
<!--    Contenedor con las opciones que tenemos en el gestor de calificaciones y asistencia     -->
<div class="container-fluid" style="margin-top: 2%;">
    <div class="row row-cols-3 justify-content-center">
        <div class="col">
            <a href="asistencia/registrar"><img src="{{ asset('img/Iconos Gestor Calificaciones Asistencias/Registrar asistencias.png') }}" class="botones-navegacion" alt="Responsive image" width="40%"></a>
            <p>Registrar Asistencias</p>
        </div>
        <div class="col">
            <a href="asistencia/modificar"><img src="{{ asset('img/Iconos Gestor Calificaciones Asistencias/Modificar asistencias.png') }}" class="botones-navegacion" alt="Responsive image" width="40%"></a>
            <p>Modificar Asistencias</p>
        </div>
        <div class="col">
            <a href="asistencia/consultar"><img src="{{ asset('img/Iconos Gestor Calificaciones Asistencias/consultar_asistencias.png') }}" class="botones-navegacion" alt="Responsive image" width="40%"></a>
            <p>Consultar Asistencias</p>
        </div>
    </div>
</div>
@endsection