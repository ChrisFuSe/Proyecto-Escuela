@extends('templates.pagina-menu-botones')

@section('imagen-opc')
{{ asset('img/Gestor_Pagos.png') }}
@endsection

@section('operacion','Reporte de deudas')

@section('cuerpo')
<!--    Contenedor con todos los inputs del formulario para registrar un nuevo usuario  -->
<div class="container" style="margin-top: 1%;">
  <center>
      <table class="table table-striped " style="margin-top: 3%;" width="80%">
          <thead>
            <tr >
              <th class="table-primary" scope="col">Número de control</th>
              <th class="table-primary" scope="col">Alumno</th>
              <th class="table-primary" scope="col">Meses de atraso</th>
              <th class="table-primary" scope="col">Monto por pagar</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="table-info" scope="row">1</td>
              <td class="table-info"></td>
              <td class="table-info"></td>
              <td class="table-info"></td>
              
              
            </tr>
            <tr>
              <td class="table-light" class="table-info" scope="row">2</td>
              <td class="table-light"></td>
              <td class="table-light"></td>
              <td class="table-light"></td>
              
            </tr>
            <tr>
              <td class="table-info" class="table-info" scope="row">3</td>
                  <td class="table-info"></td>
                  <td class="table-info"></td>
                  <td class="table-info"></td>
                  
            </tr>
            <tr>
              <td class="table-light" class="table-info" scope="row">4</td>
              <td class="table-light"></td>
              <td class="table-light"></td>
              <td class="table-light"></td>
              
            </tr>
          </tbody>
        </table>
  
      </center>
</div>

<div class="container">
  <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                 así conseguimos dividir en 2 columnas a los inputs del formulario               -->
     <div class="row row-cols-2">
         <div class="col">
             <div class="input-group input-group-lg mb-4">
                 <span class="input-group-text">Cantidad de alumnos con deudas</span>
                 <input type="number" class="form-control" placeholder="" aria-label="$$" >
               </div>
          </div>
          <div class="col">
          </div>

     </div>      
 </div>
@endsection