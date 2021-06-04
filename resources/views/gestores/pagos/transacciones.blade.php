@extends('templates.pagina-menu-botones')

@section('imagen-opc')
{{ asset('img/Gestor_Pagos.png') }}
@endsection

@section('cuerpo')
<!--    Contenedor con las opciones que tenemos en el gestor de pago     -->
<div class="container-fluid" style="margin-bottom: 5%;">
    <div class="row justify-content-center">
        <div class="col">
            <a href="transaccion/realizar-pago"><img src="{{ asset('img/Iconos Gestor Pagos/Realizar pago.png') }}" class="botones-navegacion" alt="Responsive image" width="40%"></a>
            <p>Realizar pago</p>
        </div>
        <div class="col">
            <a href="transaccion/generar-adeudo"><img src="{{ asset('img/Iconos Gestor Pagos/Generar adeudo.png') }}" class="botones-navegacion" alt="Responsive image" width="40%"></a>
            <p>Generar adeudo</p>
        </div>
    </div>
</div>
@endsection