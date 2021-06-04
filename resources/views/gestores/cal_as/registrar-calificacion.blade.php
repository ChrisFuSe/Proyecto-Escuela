@extends('templates.pagina-menu-botones')

@section('estilos')
<style> 
    table { border: 1px solid black; 
            border-collapse: collapse; 
            width: 5000x;} 
    td { border: 1px solid black;} 
</style> 
@endsection

@section('operacion', 'Registrar Calificación')


@section('imagen-opc')
{{ asset('img/Gestor_Calificaciones_Asistencia.png') }}
@endsection

@section('cuerpo')
 <!--    Contenedor con todos los inputs del formulario para registrar un nuevo usuario  -->
 <div class="container">
    <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                   así conseguimos dividir en 2 columnas a los inputs del formulario               -->
       <div class="row row-cols-3">
           <div class="col">
               <div class="input-group input-group-lg mb-4">
                   <span class="input-group-text">Grupo:</span>
                   <input type="text" class="form-control" placeholder="Grupo..." aria-label="Grupo" >
                 </div>
           </div>
           <div class="col">
               <div class="input-group input-group-lg mb-4">
                   <span class="input-group-text">Nivel:</span>
                   <input type="text" class="form-control" placeholder="Nivel..." aria-label="Nivel">
               </div>
           </div>
           
           <div class="col">
               <div class="input-group input-group-lg mb-4">
                   <span class="input-group-text">Evaluación:</span>
                   <input type="text" class="form-control" placeholder="Evaluación..." aria-label="Evaluación">
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

   <div class="col" style="margin-top: 3%;">
     <div class="btn-real" style="display: inline; padding-right: 5%;">
         <button type="button" class="btn btn-dark" style="padding-inline: 2%;">Guardar Datos</button>
     </div> 
   </div>
@endsection