@extends('templates.pagina-menu-botones')

@section('imagen-opc')
{{ asset('img/Gestor_Pagos.png') }}
@endsection

@section('operacion', 'Realizar Pago')

@section('header-scripts')
<script src="{{asset('js/jquery.min.js')}}"></script>
@endsection

@section('cuerpo')
<h1>Realizar Pagos</h1>
@if (\Session::has('error'))
    <div class="alert alert-danger">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div>
@endif
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
@csrf
<div class="container">
  <div class="input-group input-group-lg mb-4">
    <label class="input-group-text" for="inputGroupSelect01">Tipo de pago</label>
    <select class="form-select" id="inputGroupSelect01" name="tipo">
      <option selected disabled>Seleccione...</option>
      <option value=1>Pago por primera vez</option>
      <option value=2>Pago al adeudo</option>
    </select>
  </div>
</div>

<form action="{{route('registrar.pago')}}" method="POST" accept-charset="utf-8" id="primer_pago" hidden="true">
  @csrf
  <div class="container" style="margin-top: 2%;">
    <div class="row row-cols-2">
      <div class="col">
        <div class="input-group input-group-lg mb-4">
          <label class="input-group-text">Concepto</label>
          <select class="form-select" id="concepto" name="concepto" required>
            <option disabled>Seleccione...</option>
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
        <div class="input-group input-group-lg mb-4">
          <span class="input-group-text">Precio del concepto</span>
          <input type="number" placeholder="$" aria-label="Adeudo total" class="form-control" id="concepto_precio"
            disabled>
        </div>
      </div>
    </div>

    <div class="row row-cols-2">
      <div class="col">
        <div class="input-group input-group-lg mb-4">
          <span class="input-group-text" id="labelNcontrol" disabled>Número de control</span>
          <input type="text" class="form-control" placeholder="Número de control..." name="numero_control" required>
        </div>
      </div>
      <div class="col">
        <div class="input-group input-group-lg mb-4">
          <span class="input-group-text">Fecha de pago</span>
          <input type="date" class="form-control" name="fecha" min="2018-01-01" max = "<?php echo date("Y-m-d",strtotime(date("Y-m-d")));?>" required>
        </div>
      </div>
      <div class="col">
        <div class="input-group input-group-lg mb-4">
          <span class="input-group-text">Monto</span>
          <input type="number" class="form-control" placeholder="$" name="monto" min="1" required>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="form-floating">
        <span class="input-group-text">Descripción</span>
        <textarea class="form-control" placeholder="Ingrese descripción..."
          name="descripcion" id="floatingTextarea"></textarea>
      </div>
    </div>

    <div class="col" style="margin-top: 3%;" id="boton_primer_pago">
      <button type="submit" class="btn btn-dark" style="padding-inline: 2%;">ENVIAR PAGO</button>
    </div>
  </div>
</form>

<form action="{{route('registrar.pago.adeudo')}}" method="POST" accept-charset="utf-8" id="pago" hidden="true">
  @csrf
  <div class="container" style="margin-top: 2%;">
    <div class="row row-cols-2">
      <div class="col">
        <div class="input-group input-group-lg mb-4">
          <span class="input-group-text" id="labelNcontrol" disabled>Número de control</span>
          <input type="text" class="form-control" placeholder="Número de control..." name="pago_adeudo_numero_control" required>
        </div>
      </div>
      <div class="col-1">
        <div>
          <img src="{{asset('img/lupa.png')}}" width="60px" class="botones-navegacion"
            onclick="hacer_peticion()">
        </div>
      </div>

      <div class="col">
        <div class="input-group input-group-lg mb-4">
          <label class="input-group-text">Adeudos</label>
          <select class="form-select" id="adeudos" name="adeudos" required>
            <option selected disabled></option>
          </select>
        </div>
      </div>

      <div class="col">
        <div class="input-group input-group-lg mb-4" id="adeudo_precio">
          <span class="input-group-text">Precio del adeudo</span>
          <input type="number" placeholder="$" aria-label="Adeudo total" class="form-control" disabled id="caja_precios">
        </div>
      </div>

      <div class="col">
        <div class="input-group input-group-lg mb-4">
          <span class="input-group-text">Fecha de pago</span>
          <input type="date"  class="form-control" name="pago_adeudo_fecha" min="2018-01-01" max = "<?php echo date("Y-m-d",strtotime(date("Y-m-d")));?>" required>
        </div>
      </div>

      <div class="col">
        <div class="input-group input-group-lg mb-4">
          <span class="input-group-text">Monto</span>
          <input type="number" class="form-control" placeholder="$" name="pago_adeudo_monto" min="1" required>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="form-floating">
        <span class="input-group-text">Descripción</span>
        <textarea class="form-control" placeholder="Ingrese descripción..."
          name="pago_adeudo_descripcion" id="floatingTextarea"></textarea>
      </div>
    </div>

    <div class="col" style="margin-top: 3%;" id="boton_primer_pago">
      <button type="submit" class="btn btn-dark" style="padding-inline: 2%;">ENVIAR PAGO</button>
    </div>
  </div>
</form>

@endsection

@section('scripts')
  <script src={{asset('js\ocultar-inputs-pagos.js')}}></script>
  <script>
    function hacer_peticion(){
    var select_adeudos = $("#adeudos");
    $.ajax({
        url: '/consultar/adeudos/alumno',
        method: 'POST',
        data:{
            _token: $('input[name="_token"]').val(),
            numero_control: $('input[name="pago_adeudo_numero_control"]').val()
        },
        beforeSend: function () 
                {
                    select_adeudos.prop('disabled', true);
                }
    }).done(function(res){
        select_adeudos.prop('disabled', false);
        let adeudos = JSON.parse(res);
        select_adeudos.find('option').remove();
        select_adeudos.append('<option selected disabled>Seleccionar...</option>');
        for (let index = 0; index < adeudos.length; index++) {
            let texto = adeudos[index].concepto+" Fecha: "+adeudos[index].fecha_adeudo;
            select_adeudos.append('<option value="' + adeudos[index].id_adeudo + '">' + 
            (texto).charAt(0).toUpperCase() + texto.slice(1) + '</option>');
        }
        select_adeudos.change(function(){
            let precio_adeudo = document.getElementById("caja_precios");
            for (let index = 0; index < adeudos.length; index++) {
                if(select_adeudos.val() == adeudos[index].id_adeudo){
                    precio_adeudo.value = adeudos[index].monto_adeudo;
                }
            }
        });
    });
}
  </script>
@endsection