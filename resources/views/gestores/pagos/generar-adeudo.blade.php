@extends('templates.pagina-menu-botones')

@section('imagen-opc')
{{ asset('img/Gestor_Pagos.png') }}
@endsection

@section('operacion', 'Generar Adeudo')

@section('cuerpo')
<!--    Contenedor con todos los inputs del formulario para registrar un nuevo aluno  -->
<div class="container" style="margin-top: 2%;">
  <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
              así conseguimos dividir en 2 columnas a los inputs del formulario               -->
  <div class="row row-cols-2">
      <div class="col">
        <div class="input-group input-group-lg mb-4">
            <label class="input-group-text" for="inputGroupSelect01">Concepto</label>
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
              <span class="input-group-text">Monto del adeudo</span>
              <input type="number" class="form-control" aria-label="Monto del adeudo">
          </div>
      </div>
      <div class="col">
        <div class="input-group input-group-lg mb-4">
            <label class="input-group-text" for="inputGroupSelect01">Pagado</label>
            <select class="form-select" id="inputGroupSelect01">
              <option selected>Seleccione...</option>
              <option value="S">Si</option>
              <option value="N">No</option>
            </select>
          </div>
      </div>       
    <div class="col">
      <div class="input-group input-group-lg mb-4">
          <span class="input-group-text">Fecha de adeudo</span>
          <input type="date" class="form-control" aria-label="Fecha de adeudo">
      </div>
    </div>
    <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Número de control</span>
                <input type="text" class="form-control" placeholder="Número de control..." aria-label="Nombre">
            </div>
        </div>
  </div>

  <div class="col" style="margin-top: 3%;">  
      <button type="button" class="btn btn-dark" style="padding-inline: 2%;" onclick="validar();">ACEPTAR</button>
  </div>
</div>
@endsection