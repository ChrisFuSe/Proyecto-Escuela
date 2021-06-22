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
    alert("Datos actualizados de manera correcta");
}
</script>

@section('imagen-opc')
{{ asset('img/Gestor_Alumnos.png') }}
@endsection

@section('operacion', 'Modificar alumno')

@section('cuerpo')
<h1>Editar alumno</h1>
<!--    Contenedor con todos los inputs del formulario para registrar un nuevo aluno  -->
<form action="{{route('actualizar.alumno', $alumno->numero_control)}}" method="GET" accept-charset="utf-8">
    @csrf
    <div class="container" style="margin-top: 2%;">
    <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                así conseguimos dividir en 2 columnas a los inputs del formulario               -->
    <div class="row row-cols-2">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nombres</span>
                <input id="nombres" type="text" class="form-control" placeholder="Nombres..." name="nombres" value='{{$alumno->nombres}}'>
            </div>
        </div>
        <div class="col">
                <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Estado</span>
                <select type="select" class="form-control" name="estado">
                    <option>{{$alumno->estado}}</option>
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
                <input type="text" class="form-control" placeholder="Primer Apellido..." name="ap_paterno" value='{{$alumno->ap_paterno}}'>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Ciudad</span>
                <input type="text" placeholder="Ciudad..." aria-label="Ciudad" class="form-control" name="ciudad" value='{{$alumno->ciudad}}'>
              </div>
        </div>
        <div class="col">
        <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Apellido Materno</span>
            <input type="text" class="form-control" placeholder="Segundo Apellido..." name="ap_materno" value='{{$alumno->ap_materno}}'>
        </div>
      </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Calle</span>
                <input type="text" placeholder="Calle" aria-label="Calle" class="form-control" name="calle" value='{{$alumno->calle}}'>
              </div>
        </div>
        <div class="col">
          <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">CURP</span>
              <input type="text" onkeyup="this.value = this.value.toUpperCase();" class="form-control" placeholder="CURP..." aria-label="RFC" name="curp" value='{{$alumno->curp}}'>
          </div>
        </div>
        <div class="col">
          <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">Número</span>
              <input type="text" placeholder="#Número" aria-label="Número" class="form-control" name="numero" value='{{$alumno->numero}}'>
            </div>
       </div>
       <div class="col">
          <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">Fecha de nacimiento</span>
              <input type="date" class="form-control" aria-label="RFC" name="fecha_nac" value='{{$alumno->fecha_nac}}'>
          </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Colonia</span>
                <input type="text" class="form-control" placeholder="Colonia..." aria-label="Colonia" name="colonia" value='{{$alumno->colonia}}'>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Telefóno</span>
                <input type="tel" class="form-control" placeholder="#Tel" aria-label="Numero" name="telefono" value='{{$alumno->telefono}}'>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">C.P</span>
                <input type="text" class="form-control" placeholder="#C.P" aria-label="Numero" name="codigo_postal" value='{{$alumno->codigo_postal}}'>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Correo electrónico</span>
                <input type="email" class="form-control" placeholder="@ejemplo.com" aria-label="Correo electronico" name="correo" value='{{$alumno->correo}}'>
            </div>
        </div>
        <div class="col">
          <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">Descuento</span>
              <input type="number" min="0" max="100" class="form-control" placeholder="%" aria-label="Numero" name="descuento" value='{{$alumno->descuento}}'>
          </div>
        </div>
        <div class="col">
          <div class="input-group input-group-lg mb-4">
              <label class="input-group-text" for="inputGroupSelect01">Oyente clase</label>
              <select class="form-select" id="inputGroupSelect01" name="oyente_clase">
                <option selected>{{$alumno->oyente_clase}}</option>
                <option>Si</option>
                <option>No</option>
              </select>
            </div>
        </div>
        <div class="col">
        <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">¿Desea factura?</span>
              <select class="form-select" id="inputGroupSelect01" name="factura">
                <option selected>{{$alumno->factura}}</option>
                <option>Si</option>
                <option>No</option>
              </select>
          </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nombre completo</span>
                <input type="text" class="form-control" placeholder="Nombre..." name="fnombres" value='{{$alumno->fnombres}}'>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">RFC</span>
                <input type="text" onkeyup="this.value = this.value.toUpperCase();" class="form-control" placeholder="RFC..." name="frfc" value='{{$alumno->frfc}}'>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Domicilio</span>
                <input type="text" class="form-control" placeholder="Domicilio..." name="fdomicilio" value='{{$alumno->fdomicilio}}'>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Telefóno</span>
                <input type="tel" class="form-control" placeholder="#Tel" name="ftelefono" value='{{$alumno->ftelefono}}'>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Correo electrónico</span>
                <input type="email" class="form-control" placeholder="@ejemplo.com" name="fcorreo" value='{{$alumno->fcorreo}}'>
            </div>
        </div>
        <div class="col">
          <div class="input-group input-group-lg mb-4">
              <input class="form-control" value="Alta" name="estado_actual" type="hidden">
          </div>
      </div>
      <div class="col">
          <div class="input-group input-group-lg mb-4">
              <input class="form-control" value="0" name="deuda_total" type="hidden">
          </div>
      </div>
    </div> 


    <div class="col" style="margin-top: 3%;">
        <button type="submit" class="btn btn-dark" style="padding-inline: 2%;" onclick=validar();>ACTUALIZAR</button>
    </div>


</div>
</form>
@endsection