@extends('templates.pagina-menu-botones')

@section('imagen-opc')
{{ asset('img/Gestor_Pagos.png') }}
@endsection

@section('cuerpo')
<!--    Contenedor con las opciones que tenemos en el gestor de pago     -->
<div class="container-fluid" style="margin-top: 5%;">
    <div class="row justify-content-center">
        <div class="col">
            <a  href="reportes/reporte-pagos"><img src="{{ asset('img/Iconos Gestor Pagos/Reportes de pagos.png') }}" class="botones-navegacion" alt="Responsive image" width="40%"></a>
            <p>Generación de reportes de pagos</p>
        </div>
        <div class="col">
            <a href="reportes/reporte-atrasos"><img src="{{ asset('img/Iconos Gestor Pagos/Reportes de atrasos.png') }}" class="botones-navegacion" alt="Responsive image" width="40%"></a>
            <p>Generación de reportes de deudas</p>
        </div>
    </div>
</div>
@endsection