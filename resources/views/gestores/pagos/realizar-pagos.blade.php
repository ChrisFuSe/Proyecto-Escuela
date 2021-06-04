@extends('templates.pagina-menu-botones')

@section('imagen-opc')
{{ asset('img/Gestor_Pagos.png') }}
@endsection

@section('operacion', 'Realizar Pago')

@section('cuerpo')
<!--    Contenedor con todos los inputs del formulario para registrar un nuevo aluno  -->
<div class="container" style="margin-top: 2%;">
    <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                así conseguimos dividir en 2 columnas a los inputs del formulario               -->
    <div class="row row-cols-2">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Número de control</span>
                <input type="text" class="form-control" placeholder="Número de control..." aria-label="Numero">
            </div>
        </div>
        <div class="col">
          <div class="input-group input-group-lg mb-4">
              <label class="input-group-text" for="inputGroupSelect01">Adeudos</label>
              <select class="form-select" id="inputGroupSelect01">
                <option selected>Seleccione...</option>
                <option value="1">Uno</option>
                <option value="2">Dos</option>
                <option value="3">Tres</option>
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
              <span class="input-group-text">Adeudo total</span>
              <input type="number" placeholder="$" aria-label="Adeudo total" class="form-control">
            </div>
      </div>
      <div class="col">
        <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Monto</span>
            <input type="number" class="form-control" placeholder="$" aria-label="Monto">
        </div>
     </div>
    </div>
    <div class="row">
      <div class="form-floating">
          <span class="input-group-text">Descripción</span>
          <textarea class="form-control" placeholder="Ingrese descripción..." id="floatingTextarea"></textarea>
      </div>
    </div>

    <div class="col" style="margin-top: 3%;">  
        <button type="button" class="btn btn-dark" style="padding-inline: 2%;" onclick="validar();">FINALIZAR</button>
    </div>
</div>
@endsection