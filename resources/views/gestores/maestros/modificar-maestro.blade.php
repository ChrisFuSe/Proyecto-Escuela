@extends('templates.pagina-menu-botones')

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css\dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css\responsive.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
@endsection

@section('header-scripts')
    <script src="{{asset('js\jquery-3.5.1.js')}}"></script>
    <script src="{{asset('js\jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js\dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('js\dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('js\responsive.bootstrap5.min.js')}}"></script>
@endsection

@section('imagen-opc')
"{{ asset('img/Gestor_Maestros.png') }}"
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@endsection

@section('operacion', 'Modificar Maestro')

@section('cuerpo')
<body> 
     <header>
     <h3 class='text-center'></h3>
     </header>    
      
    <div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btnNuevo" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">library_add</i></button>    
            </div>    
        </div>    
    </div>    
    <br>  

    <div class="container caja">
        <div class="row">
            <div class="col-lg-12">
            <div class="table-responsive">        
                <table id="tablaUsuarios" class="table table-striped table-bordered table-condensed" style="width:100%" >
                    <thead class="text-center">
                        <tr>
                            <th>User_Id</th>
                            <th>userName</th>
                            <th>FirstName</th>                                
                            <th>LastName</th>  
                            <th>Gender</th>
                            <th>Password</th>
                            <th>Status</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>                           
                    </tbody>        
                </table>               
            </div>
            </div>
        </div>  
    </div>   

<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formUsuarios">    
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">User Name:</label>
                    <input type="text" class="form-control" id="username">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">First Name</label>
                    <input type="text" class="form-control" id="first_name">
                    </div> 
                    </div>    
                </div>
                <div class="row"> 
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Last Name</label>
                    <input type="text" class="form-control" id="last_name">
                    </div>               
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Gender</label>
                    <input type="text" class="form-control" id="gender">
                    </div>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="form-group">
                        <label for="" class="col-form-label">Password</label>
                        <input type="text" class="form-control" id="password">
                        </div>
                    </div>    
                    <div class="col-lg-3">    
                        <div class="form-group">
                        <label for="" class="col-form-label">Status</label>
                        <input type="number" class="form-control" id="status">
                        </div>            
                    </div>    
                </div>                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>
</body>
</html>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );

        tablaUsuarios = $('#tablaUsuarios').DataTable({  
    "ajax":{            
        "url": "bd/crud.php", 
        "method": 'POST', //usamos el metodo POST
        "data":{opcion:opcion}, //enviamos opcion 4 para que haga un SELECT
        "dataSrc":""
    },
    "columns":[
        {"data": "user_id"},
        {"data": "username"},
        {"data": "first_name"},
        {"data": "last_name"},
        {"data": "gender"},
        {"data": "password"},
        {"data": "status"},
        {"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEditar'><i class='material-icons'>edit</i></button><button class='btn btn-danger btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div></div>"}
    ]
});     

var fila; //captura la fila, para editar o eliminar
//submit para el Alta y Actualización
$('#formUsuarios').submit(function(e){                         
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    username = $.trim($('#username').val());    
    first_name = $.trim($('#first_name').val());
    last_name = $.trim($('#last_name').val());    
    gender = $.trim($('#gender').val());    
    password = $.trim($('#password').val());
    status = $.trim($('#status').val());                            
        $.ajax({
          url: "bd/crud.php",
          type: "POST",
          datatype:"json",    
          data:  {user_id:user_id, username:username, first_name:first_name, last_name:last_name, gender:gender, password:password ,status:status ,opcion:opcion},    
          success: function(data) {
            tablaUsuarios.ajax.reload(null, false);
           }
        });			        
    $('#modalCRUD').modal('hide');											     			
});
        
 

//para limpiar los campos antes de dar de Alta una Persona
$("#btnNuevo").click(function(){
    opcion = 1; //alta           
    user_id=null;
    $("#formUsuarios").trigger("reset");
    $(".modal-header").css( "background-color", "#17a2b8");
    $(".modal-header").css( "color", "white" );
    $(".modal-title").text("Alta de Usuario");
    $('#modalCRUD').modal('show');	    
});

//Editar        
$(document).on("click", ".btnEditar", function(){		        
    opcion = 2;//editar
    fila = $(this).closest("tr");	        
    user_id = parseInt(fila.find('td:eq(0)').text()); //capturo el ID		            
    username = fila.find('td:eq(1)').text();
    first_name = fila.find('td:eq(2)').text();
    last_name = fila.find('td:eq(3)').text();
    gender = fila.find('td:eq(4)').text();
    password = fila.find('td:eq(5)').text();
    status = fila.find('td:eq(6)').text();
    $("#username").val(username);
    $("#first_name").val(first_name);
    $("#last_name").val(last_name);
    $("#gender").val(gender);
    $("#password").val(password);
    $("#status").val(status);
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white" );
    $(".modal-title").text("Editar Usuario");		
    $('#modalCRUD').modal('show');		   
});
<!--    "{{route('llenar.profesor')}}" Contenedor con todos los inputs del formulario para registrar un nuevo maestro  action="editar.php?table=profesores"-->
    @if(empty($profesor))
    <p></p>
    @else
    <div class="cuerpo_form" style="width: 98%; margin: 10px;"> 
         <table id="example" class="table table-striped dt-responsive nowrap" style="width:100%">
             <thead>
               <tr>
               <th class="table-primary" scope="col"></th>
                 <th class="table-primary" scope="col">Acciones</th>
                 <th class="table-primary" scope="col">ID</th>
                 <th class="table-primary" scope="col">RFC</th>
                 <th class="table-primary" scope="col">Nombres</th>
                 <th class="table-primary" scope="col">Apellido P</th>
                 <th class="table-primary" scope="col">Apellido M</th>
                 <th class="table-primary" scope="col">Estado</th>
                 <th class="table-primary" scope="col">ciudad</th>
                 <th class="table-primary" scope="col">calle</th>
                 <th class="table-primary" scope="col">numero</th>
                 <th class="table-primary" scope="col">colonia</th>
                 <th class="table-primary" scope="col">codigo postal</th>
                 <th class="table-primary" scope="col">correo</th>
                 <th class="table-primary" scope="col">telefono</th>
                 <!--<th class="table-primary" scope="col">Eliminar</th> -->
               </tr>
             </thead>
             <tbody>
             @foreach($profesor as $profesores)
               <tr>
                  <td class="table-info" scope="col"></td>
                  <td class="table-info" scope="col">
                  <form action="{{route('editar.profesor',$profesores->id_profesor)}}" method="GET">
                  <button type="submit" class="btn btn-info"><img src="{{ asset('img\pencil-square.svg') }}" alt="Bootstrap" ...></button>
                  </form>
                  <form action="{{route('eliminar.profesor',$profesores->id_profesor)}}" method="GET">
                  <button type="submit" class="btn btn-danger"><img src="{{ asset('img\x-circle.svg') }}" alt="Bootstrap" ...></button>
                  </form>
                  </td>
                  <td class="table-info" scope="col">{{$profesores->id_profesor}}</td>
                  <td class="table-info" scope="col">{{$profesores->rfc}}</td>
                  <td class="table-info" scope="col">{{$profesores->nombres}}</td>
                  <td class="table-info" scope="col">{{$profesores->ap_paterno}}</td>
                  <td class="table-info" scope="col">{{$profesores->ap_materno}}</td>
                  <td class="table-info" scope="col">{{$profesores->estado}}</td>
                  <td class="table-info" scope="col">{{$profesores->ciudad}}</td>
                  <td class="table-info" scope="col">{{$profesores->calle}}</td>
                  <td class="table-info" scope="col">{{$profesores->numero}}</td>
                  <td class="table-info" scope="col">{{$profesores->colonia}}</td>
                  <td class="table-info" scope="col">{{$profesores->codigo_postal}}</td>
                  <td class="table-info" scope="col">{{$profesores->correo}}</td>
                  <td class="table-info" scope="col">{{$profesores->telefono}}</td>
                  
               </tr>
               @endforeach
             </tbody>
           </table>
           </div> 


    <div class="col" style="margin-top: 3%;">
        <button onclick="elegir2();" class="btn btn-dark" style="padding-inline: 2%;" >ACTUALIZAR</button>
    </div>

@endif
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection

<script>
function elegir1(){
    document.method="GET";
    document.action="{{route('eliminar.profesor',$profesores->id_profesor)}}";
    document.submit();
}

//Borrar
$(document).on("click", ".btnBorrar", function(){
    fila = $(this);           
    user_id = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;		
    opcion = 3; //eliminar        
    var respuesta = confirm("¿Está seguro de borrar el registro "+user_id+"?");                
    if (respuesta) {            
        $.ajax({
          url: "bd/crud.php",
          type: "POST",
          datatype:"json",    
          data:  {opcion:opcion, user_id:user_id},    
          success: function() {
              tablaUsuarios.row(fila.parents('tr')).remove().draw();                  
           }
        });	
    }
 });
     
});    
    </script>
@endsection
