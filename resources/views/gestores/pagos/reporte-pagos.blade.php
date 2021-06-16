@extends('templates.pagina-menu-botones')

@section('imagen-opc')
{{ asset('img/Gestor_Pagos.png') }}
@endsection

@section('operacion','Reporte de Pago')

@section('cuerpo')
 <!--    Contenedor con todos los inputs del formulario para registrar un nuevo usuario  -->
 <div class="container">
  <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                 así conseguimos dividir en 2 columnas a los inputs del formulario               -->
     <div class="row row-cols-2">
         <div class="col">
             <div class="input-group input-group-lg mb-4">
                 <span class="input-group-text" for="inputGroupSelect01">Seleccionar un mes</span>
                 
                 <select class="form-select" id="inputGroupSelect01">
                   <option selected>Seleccione...</option>
                   <option value="1">Enero</option>
                   <option value="2">Febrero</option>
                   <option value="3">Marzo</option>
                   <option value="4">Abril</option>
                   <option value="5">Mayo</option>
                   <option value="6">Junio</option>
                   <option value="7">Julio</option>
                   <option value="8">Agosto</option>
                   <option value="9">Septiembre</option>
                   <option value="10">Octubre</option>
                   <option value="11">Noviembre</option>
                   <option value="12">Diciembre</option>
                 </select>
               </div>
         </div>
         <div class="col">

         </div>
         
         <div class="col">
             <div class="input-group input-group-lg mb-4">
                 <span class="input-group-text">Pagos totales</span>
                 <input type="text" class="form-control" placeholder="Pagos realizados..." aria-label="Pagos realizados">
             </div>
         </div>


     </div>      
 </div>

 <!--    Contenedor con todos los inputs del formulario para registrar un nuevo usuario  -->
 <div class="container">
     
         <table class="table table-striped " style="margin-top: 2%;" width="80%">
             <thead>
               <tr >
                 <th class="table-primary" scope="col">N° de referencia</th>
                 <th class="table-primary" scope="col">ID Adeudo</th>
                 <th class="table-primary" scope="col">Monto</th>
                 <th class="table-primary" scope="col">Fecha</th>
                 <th class="table-primary" scope="col">Descripción</th>
                 
               </tr>
             </thead>
             <tbody>
               <tr>
                  <td class="table-info" scope="row">1</td>
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
                 
               </tr>
               <tr>
                 <td class="table-info" class="table-info" scope="row">3</td>
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
                 
               </tr>
             </tbody>
           </table>       
 </div> 
       <div class="col" style="margin-top: 1%;">
         <button type="button" class="btn btn-dark" style="padding-inline: 2%;" onclick="validar();">IMPRIMIR</button>
     </div>
@endsection