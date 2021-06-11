@extends('templates.pagina-menu-botones')

@section('imagen-opc')
{{ asset('img/Gestor_Pagos.png') }}
@endsection

@section('operacion', 'Realizar Pago')

@section('header-scripts')
<meta name="_token" content="{{ csrf_token() }}">
<script src="{{asset('js/jquery.min.js')}}"></script>
@endsection

@section('cuerpo')
<form action="{{route('registrar.pago')}}" method="POST" accept-charset="utf-8">
  @csrf
  <!--    Contenedor con todos los inputs del formulario para registrar un nuevo aluno  -->
  <div class="container" style="margin-top: 2%;">
    <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                así conseguimos dividir en 2 columnas a los inputs del formulario               -->

    <div class="input-group input-group-lg mb-4">
      <label class="input-group-text" for="inputGroupSelect01">Tipo de pago</label>
      <select class="form-select" id="inputGroupSelect01" name="tipo">
        <option selected disabled value="0">Seleccione...</option>
        <option value=1>Pago por primera vez</option>
        <option value=2>Pago al adeudo</option>
      </select>
    </div>
  <div id="cuerpo" hidden="true">
      <div class="col">
        <div class="input-group input-group-lg mb-4" hidden="true" id="concepto">
          <label class="input-group-text">Concepto</label>
          <select class="form-select">
            <option selected disabled>Seleccione...</option>
              @if(empty($conceptos))
              @else
              @foreach ($conceptos as $concepto)
              <option value="{{$concepto->id_concepto}}">{{$concepto->id_concepto}}</option>
              @endforeach
              @endif
          </select>
        </div>
      </div>

      <div class="col">
        <div class="input-group input-group-lg mb-4" hidden="true" id="concepto_precio">
          <span class="input-group-text">Precio del concepto</span>
          <input type="number" placeholder="$" aria-label="Adeudo total" class="form-control" disabled>
        </div>
      </div>

      <div class="row row-cols-2">
        <div class="col">
          <div class="input-group input-group-lg mb-4">
            <span class="input-group-text" id="labelNcontrol" disabled>Número de control</span>
            <input type="text" class="form-control" onKeyUp="habilitar();" placeholder="Número de control..."
              aria-label="Numero">
          </div>
        </div>
        <div class="col-1">
          <div>
            <img src="{{asset('img/lupa.png')}}" width="60px" class="botones-navegacion" hidden="true" id="lupa">
          </div>
        </div>

        <div class="col" id="adeudo" hidden="true" id="adeudo">
          <div class="input-group input-group-lg mb-4">
            <label class="input-group-text">Adeudos</label>
            <select class="form-select">
              <option selected disabled>Seleccione...</option>
            </select>
          </div>
        </div>

        <div class="col">
          <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Fecha de pago</span>
            <input type="date" class="form-control" aria-label="Fecha de pago">
          </div>
        </div>

        <div class="col">
          <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Monto</span>
            <input type="number" class="form-control" placeholder="$" aria-label="Monto">
          </div>
        </div>
      </div>

      <div class="col">
        <div class="input-group input-group-lg mb-4" id="adeudo_precio" hidden="true">
          <span class="input-group-text">Precio del adeudo</span>
          <input type="number" placeholder="$" aria-label="Adeudo total" class="form-control" disabled>
        </div>
      </div>
      
      <div class="row">
        <div class="form-floating">
          <span class="input-group-text">Descripción</span>
          <textarea class="form-control" placeholder="Ingrese descripción..." id="floatingTextarea"></textarea>
        </div>
      </div>

      <div class="col" style="margin-top: 3%;">
        <button type="submit" class="btn btn-dark" style="padding-inline: 2%;" onclick="validar();">FINALIZAR</button>
      </div>
    </div>
  </div>
</form>

<script src={{asset('js\ocultar-inputs-pagos.js')}}></script>
<script src={{asset('js\obtener-precio-concepto.js')}}></script>

@endsection