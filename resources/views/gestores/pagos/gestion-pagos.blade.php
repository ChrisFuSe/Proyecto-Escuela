@extends('templates.pagina-menu-botones')

@section('imagen-opc')
{{ asset('img/Gestor_Pagos.png') }}
@endsection

@section('cuerpo')
<!--    Contenedor con las opciones que tenemos en el gestor de pago     -->
<div class="container-fluid" style="margin-bottom: 5%;">
    <div class="row justify-content-center">
        <div class="col">
            <a href="gestion-pagos/consultar-eliminar"><img src="{{ asset('img/Iconos Gestor Pagos/Consultar pagos.png') }}" class="botones-navegacion" alt="Responsive image" width="40%"></a>
            <p>Consultar y eliminar pagos</p>
        </div>
        <div class="col">
            <a href="gestion-pagos/editar"><img src="{{ asset('img/Iconos Gestor Pagos/Modificar pago.png') }}" class="botones-navegacion" alt="Responsive image" width="40%"></a>
            <p>Modificar pagos</p>
        </div>
    </div>
</div>
@endsection