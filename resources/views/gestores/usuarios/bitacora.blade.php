@extends('templates.pagina-menu-botones')

@section('imagen-opc')
"{{ asset('img/Gestor_Usuarios.png') }}"
@endsection

@section('operacion', 'Bitácora')

@section('cuerpo')
<!--    Tabla -->
<div class="container" style="margin-top: 3%;">

  <table class="table table-striped " style="margin-top: 5%;" width="80%">
    <thead>
      <tr>
        <th class="table-primary" scope="col">ID del movimiento</th>
        <th class="table-primary" scope="col">Movimiento</th>
        <th class="table-primary" scope="col">información antigua</th>
        <th class="table-primary" scope="col">información nueva</th>
        <th class="table-primary" scope="col">Descripción</th>
        <th class="table-primary" scope="col">Tabla</th>
        <th class="table-primary" scope="col">Fecha y hora</th>
        <th class="table-primary" scope="col">Nombre del usuario</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="table-info" scope="row">1</td>
        <td class="table-info"></td>
        <td class="table-info"></td>
        <td class="table-info"></td>
        <td class="table-info"></td>
        <td class="table-info"></td>
        <td class="table-info"></td>
        <td class="table-info"></td>

      </tr>
      <tr>
        <td class="table-light" class="table-info" scope="row">2</td>
        <td class="table-light"></td>
        <td class="table-light"></td>
        <td class="table-light"></td>
        <td class="table-light"></td>
        <td class="table-light"></td>
        <td class="table-light"></td>
        <td class="table-light"></td>
      </tr>
      <tr>
        <td class="table-info" class="table-info" scope="row">3</td>
        <td class="table-info"></td>
        <td class="table-info"></td>
        <td class="table-info"></td>
        <td class="table-info"></td>
        <td class="table-info"></td>
        <td class="table-info"></td>
        <td class="table-info"></td>
      </tr>
      <tr>
        <td class="table-light" class="table-info" scope="row">4</td>
        <td class="table-light"></td>
        <td class="table-light"></td>
        <td class="table-light"></td>
        <td class="table-light"></td>
        <td class="table-light"></td>
        <td class="table-light"></td>
        <td class="table-light"></td>
      </tr>
    </tbody>
  </table>


</div>



@endsection