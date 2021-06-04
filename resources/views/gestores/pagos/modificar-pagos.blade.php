@extends('templates.pagina-menu-botones')

@section('imagen-opc')
{{ asset('img/Gestor_Pagos.png') }}
@endsection

@section('operacion', 'Modificar Pago')

@section('cuerpo')
<!--    Contenedor con todos los inputs del formulario para registrar un nuevo usuario  -->
<div class="container" style="margin-top: 3%;">
    <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                así conseguimos dividir en 2 columnas a los inputs del formulario               -->
    <div class="row row-cols-2">
        
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Número de control</span>
                <input type="text" class="form-control" placeholder="Número de control..." aria-label="Número de control">
            </div>
        </div>
        <div class="col ">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Descripción</span>   
                
            </div>
            
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Fecha de pago:</span>
                <input type="text" class="form-control" placeholder="Fecha de pago..." aria-label="Fecha de pago" >
              </div>
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            
          </div>
        
        <div class="col">
            
        </div>
        <div class="col">

        </div>
        
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Monto</span>
                <input type="text" class="form-control" placeholder="Monto..." aria-label="Monto">
            </div>
        </div>   
    </div>
    <div class="col" style="margin-top: 3%;">  
        <button type="button" class="btn btn-dark" style="padding-inline: 2%;" onclick="validar();">GUARDAR</button>
    </div>  
</div>
@endsection