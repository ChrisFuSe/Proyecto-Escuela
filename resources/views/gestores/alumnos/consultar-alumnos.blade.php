@extends('templates.pagina-menu-botones')

@section('fuente')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
  </style> 
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');
  </style> 
@endsection

@section('imagen-opc')
{{ asset('img/Gestor_Alumnos.png') }}
@endsection

@section('operacion', 'Consultar y eliminar alumno')

@section('cuerpo')
<!--    Contenedor con todos los inputs del formulario para registrar un nuevo aluno  -->
<div class="container" style="margin-top: 2%;">
    <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                así conseguimos dividir en 2 columnas a los inputs del formulario               -->
    <div class="row row-cols-2">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Número de control</span>
                <input type="text" class="form-control" placeholder="Número de control..." aria-label="Numero de control">
                <a class="botones-navegacion"><img src="{{ asset('img/lupa.png') }}" alt="Responsive image" width="50%"></a>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nombre completo</span>
                <input type="text" placeholder="Nombre..." aria-label="Nombre completo" class="form-control">
                <a class="botones-navegacion"><img src="{{ asset('img/lupa.png') }}" alt="Responsive image" width="50%"></a>
              </div>
        </div>
        <div class="col">
          <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">Nombres</span>
              <label type="text" class="form-control">
          </div>
        </div>
        <div class="col">
          <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">Número de control</span>
              <label type="text" class="form-control">
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col">
          <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">Domicilio</span>
              <label type="text" class="form-control">
          </div>
      </div>
  </div>
   <div class="row row-cols-2">
      <div class="col">
          <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">Correo</span>
              <label type="email" class="form-control">
          </div>
      </div>
      <div class="col">
        <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Telefóno</span>
            <label type="tel" class="form-control">
        </div>
    </div>
      <div class="col">
          <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">CURP</span>
              <label type="text" class="form-control">
          </div>
      </div>
      <div class="col">
        <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Descuento</span>
            <label type="number" class="form-control">
        </div>
      </div>
      <div class="col">
          <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">Fecha de nacimiento</span>
              <label type="date" class="form-control">
          </div>
      </div>
      <div class="col">
          <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">Deuda total</span>
              <label type="text" class="form-control">
          </div>
      </div>
      <div class="col">
          <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">Oyente clase</span>
              <label type="text" class="form-control">
          </div>
      </div>
      <div class="col">
          <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">Id grupo</span>
              <label type="text" class="form-control">
          </div>
        </div>
   </div>  
  </div>
@endsection