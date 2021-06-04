@extends('templates.pagina-menu-botones')

@section('imagen-opc')
"{{ asset('img/Gestor_Pagos.png') }}"
@endsection

@section('cuerpo')
<!--    Contenedor con las opciones que tenemos en el gestor de pago     -->
<div class="container-fluid" style="margin-top: 5%;">
    <div class="row justify-content-center">
        <div class="col">
            <a href="pagos/transaccion"><img src="../img/Iconos Gestor Pagos/Transaccion.png" class="botones-navegacion" alt="Responsive image" width="50%"></a>
            <p>Transaccion</p>
        </div>
        <div class="col">
            <a href="pagos/gestion-pagos"><img src="../img/Iconos Gestor Pagos/Gestionar informacion de pago.png" class="botones-navegacion" alt="Responsive image" width="50%"></a>
            <p>Gestionar informacion de Pago</p>
        </div>
        <div class="col">
            <a href="pagos/reportes"><img src="../img/Iconos Gestor Pagos/Generar reporte mensual.png" class="botones-navegacion" alt="Responsive image" width="50%"></a>
            <p>Generar reporte mensual</p>
        </div>
    </div>
</div>
@endsection