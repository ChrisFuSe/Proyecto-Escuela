@extends('templates.pagina-menu-botones')

@section('imagen-opc')
{{ asset('img/Gestor_Pagos.png') }}
@endsection

@section('operacion', 'Consultar pago')

@section('cuerpo')
<!--    Contenedor con todos los inputs del formulario para registrar un nuevo usuario  -->
<form action="{{route('consultar.pagos')}}" method="POST" accept-charset="utf-8">
    @csrf
<div class="container" style="margin-top: 3%;">
    <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                así conseguimos dividir en 2 columnas a los inputs del formulario               -->
    <div class="row">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Buscar pago</span>
                <input type="text" class="form-control" name="numero_control" placeholder="Número de control..." aria-label="Número de control">
                <button type="submit" style="padding-inline: 2%;"><img src="{{ asset('img/lupa.png') }}" alt="Responsive image"
                        width="50%" class="botones-navegacion"></button>
            </div>
        </div>
    </div>
    @if(empty($pagos))
    <p></p>
    @else
    <div class="row">
    <div class="col">
          <div class="input-group input-group-lg mb-4">
              <label class="input-group-text" for="inputGroupSelect01">Pagos</label>
              <select class="form-select" id="inputGroupSelect01" name="num_referencia">
              @foreach($pagos as $pago)
                <option selected>Seleccione un pago...</option>
                <option>$pago->num_referencia</option>
                @endforeach
              </select>
            </div>
        </div>
    </div>
</form>
    <form action="{{route('consultar.datos',$pagos->num_referencia)}}" method="GET" accept-charset="utf-8">
    <div class="row row-cols-2">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Monto</span>
                <label type="text" name="monto" class="form-control">{{$datos->monto}}</label>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Fecha de pago:</span>
                <label type="text" name="fecha_pago" class="form-control">{{$datos->fecha_pago}}</label>
              </div>
        </div>
    </div>
    <div class="row">
    <div class="col ">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Descripción</span>   
            </div>  
        </div>
        <div class="form-floating">
            <textarea class="form-control" name="descripcion" placeholder="Leave a comment here" id="floatingTextarea">{{$datos->descripcion}}</textarea> 
            <label type="hidden" name="id_adeudo" class="form-control"> 
        </div>
    </div>  
</div>
    </form>
@endif
@endsection