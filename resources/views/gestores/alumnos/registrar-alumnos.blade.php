@extends('templates.pagina-menu-botones')

@section('fuente')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
  </style> 
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');
  </style> 
@endsection

<script>
 function validar(){
     alert('Se ha registrado exitosamente');
 }
</script>

@section('imagen-opc')
{{ asset('img/Gestor_Alumnos.png') }}
@endsection

@section('operacion', 'Ingresar nuevo alumno')

@section('cuerpo')
<h1>Registrar alumno</h1>
<form action="{{route('registrar.alumnos')}}" method="POST" accept-charset="utf-8">
@csrf
 <!--    Contenedor con todos los inputs del formulario para registrar un nuevo alumno  -->
 <div class="container-fluid" style="margin-top: 2%;">
    <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                así conseguimos dividir en 2 columnas a los inputs del formulario               -->
    <div class="row row-cols-2">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nombres</span>
                <input id="nombres" type="text" class="form-control" maxlength="45" placeholder="Nombres..." name="nombres" required>
            </div>
        </div>
        <div class="col">
                <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Estado</span>
                <select type="select" class="form-control" name="estado" required>
                    <option>--Elije un estado--</option>
                    <option>Aguascalientes</option>
                    <option>Baja California</option>
                    <option>Baja California Sur</option>
                    <option>Campeche</option>
                    <option>Chiapas</option>
                    <option>Chihuahua</option>
                    <option>Ciudad de México</option>
                    <option>Coahuila</option>
                    <option>Colima</option>
                    <option>Durango</option>
                    <option>Estado de México</option>
                    <option>Guanajuato</option>
                    <option>Guerrero</option>
                    <option>Hidalgo</option>
                    <option>Jalisco</option>
                    <option>Michoacán</option>
                    <option>Morelos</option>
                    <option>Nayarit</option>
                    <option>Nuevo León</option>
                    <option>Oaxaca</option>
                    <option>Puebla</option>
                    <option>Querétaro</option>
                    <option>Quintana Roo</option>
                    <option>San Luis Potosí</option>
                    <option>Sinaloa</option>
                    <option>Sonora</option>
                    <option>Tabasco</option>
                    <option>Tamaulipas</option>
                    <option>Tlaxcala</option>
                    <option>Veracruz</option>
                    <option>Yucatán</option>
                    <option>Zacatecas</option>
                </select>
              </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Apellido Paterno</span>
                <input type="text" class="form-control" maxlength="45" placeholder="Primer Apellido..." name="ap_paterno" required>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Ciudad</span>
                <input type="text" placeholder="Ciudad..." aria-label="Ciudad" class="form-control" maxlength="45" name="ciudad" required>
              </div>
        </div>
        <div class="col">
        <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Apellido Materno</span>
            <input type="text" class="form-control" maxlength="45" placeholder="Segundo Apellido..." name="ap_materno" required>
        </div>
      </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Calle</span>
                <input type="text" placeholder="Calle" aria-label="Calle" class="form-control" maxlength="45" name="calle" required>
              </div>
        </div>
        <div class="col">
          <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">CURP</span>
              <input type="text" onkeyup="this.value = this.value.toUpperCase();" class="form-control" maxlength="18" placeholder="CURP..." aria-label="RFC" name="curp" required>
          </div>
        </div>
        <div class="col">
          <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">Número</span>
              <input type="text" placeholder="#Número" aria-label="Número" class="form-control" maxlength="5" name="numero" required>
            </div>
       </div>
       <div class="col">
          <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">Fecha de nacimiento</span>
              <input type="date" class="form-control" aria-label="RFC" name="fecha_nac" required>
          </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Colonia</span>
                <input type="text" class="form-control" maxlength="45" placeholder="Colonia..." aria-label="Colonia" name="colonia" required>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Telefóno</span>
                <input type="tel" class="form-control" maxlength="18" placeholder="#Tel" aria-label="Numero" name="telefono" required>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">C.P</span>
                <input type="text" class="form-control" maxlength="5" placeholder="#C.P" aria-label="Numero" name="codigo_postal" required>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Correo electrónico</span>
                <input type="email" class="form-control" maxlength="45" placeholder="@ejemplo.com" aria-label="Correo electronico" name="correo" required>
            </div>
        </div>
        <div class="col">
          <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">Descuento</span>
              <input type="number" min="0" max="100" class="form-control" placeholder="%" aria-label="Numero" name="descuento" required>
          </div>
        </div>
        <div class="col">
        <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">¿Desea factura?</span>
              <select class="form-select" id="inputGroupSelect01" name="factura" required>
                <option selected>Seleccione...</option>
                <option>Si</option>
                <option>No</option>
              </select>
          </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nombre completo</span>
                <input type="text" class="form-control" maxlength="200" placeholder="Nombre..." name="fnombres">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">RFC</span>
                <input type="text" onkeyup="this.value = this.value.toUpperCase();" maxlength="13" class="form-control" placeholder="RFC..." name="frfc">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Domicilio</span>
                <input type="text" class="form-control" maxlength="300" placeholder="Domicilio..." name="fdomicilio">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Telefóno</span>
                <input type="tel" class="form-control" maxlength="18" placeholder="#Tel" name="ftelefono">
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Correo electrónico</span>
                <input type="email" class="form-control" maxlength="45" placeholder="@ejemplo.com" name="fcorreo">
            </div>
        </div>
    </div> 
    

    <div class="col" style="margin-top: 3%;">   
        <button type="submit" class="btn btn-dark" style="padding-inline: 2%;"  onclick=validar();>GUARDAR</button>
    </div>


</div>
</form>
@endsection