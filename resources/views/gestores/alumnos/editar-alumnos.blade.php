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

@section('operacion', 'Modificar alumno')

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
</div>
<div class="row row-cols-3">
     <div class="col">
        <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Numero Control</span>
            <label type="text" class="form-control">
        </div>
     </div>
     <div class="col">
        <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Fecha de nacimiento</span>
            <input type="date" class="form-control" aria-label="RFC">
        </div>
      </div>
      <div class="col">
        <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Calle</span>
            <input type="text" placeholder="Calle..." aria-label="Calle" class="form-control">
          </div>
    </div>
      <div class="col">
          <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">Nombres</span>
              <input type="text" placeholder="Nombres..." class="form-control" aria-label="Nombres">
          </div>
      </div>
      <div class="col">
        <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Correo electrónico</span>
            <input type="email" placeholder="Email..." class="form-control" aria-label="Correo electronico">
        </div>
      </div>
      <div class="col">
        <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Número</span>
            <input type="text" placeholder="#Número..." aria-label="Número" class="form-control">
          </div>
      </div>
      <div class="col">
          <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">Apellido Paterno</span>
              <input type="text" placeholder="Apellido Paterno..." class="form-control" aria-label="Apellido Paterno">
          </div>
      </div>
      <div class="col">
        <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Telefóno</span>
            <input type="tel" placeholder="#Teléfono..." class="form-control"  aria-label="Numero">
        </div>
    </div>
    <div class="col">
        <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Colonia</span>
            <input type="text" placeholder="Colonia..." class="form-control"  aria-label="Colonia">
        </div>
    </div>
      <div class="col">
        <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Apellido Materno</span>
            <input type="text" placeholder="Apellido Materno..." class="form-control"  aria-label="Apellido Materno">
        </div>
      </div>
      <div class="col">
        <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Descuento</span>
            <input type="number" min="0" max="100" class="form-control" placeholder="%" aria-label="Descuento">
        </div>
      </div>
      <div class="col">
        <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">C.P</span>
            <input type="text" placeholder="#C.P...." class="form-control" aria-label="Numero">
        </div>
      </div>
      <div class="col">
        <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">CURP</span>
            <input type="text" placeholder="CURP..." class="form-control"  aria-label="RFC">
        </div>
      </div>
      <div class="col">
        <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Deuda total</span>
            <input type="text" placeholder="Deuda..." class="form-control" aria-label="Deuda total">
        </div>
      </div>
      <div class="col">
        <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Id grupo</span>
            <input type="text" placeholder="ID grupo..." class="form-control" aria-label="Id grupo">
        </div>
      </div>
</div>
<div class="row">
    <div class="col">
        <div class="input-group input-group-lg mb-4">
            <label class="input-group-text" for="inputGroupSelect01">Oyente clase</label>
            <select class="form-select" id="inputGroupSelect01">
              <option selected>Seleccione...</option>
              <option value="1">Si</option>
              <option value="2">No</option>
            </select>
          </div>
      </div>
</div>
 </div>

  <div class="col" style="margin-top: 3%;"> 
    <button type="button" class="btn btn-dark" style="padding-inline: 2%;" onclick="validar();">ACTUALIZAR</button>
  </div>
@endsection