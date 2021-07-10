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
<h1>Editar alumno</h1>
<!--    Contenedor con todos los inputs del formulario para registrar un nuevo aluno  -->
<form action="{{route('actualizar.alumno', $alumno->numero_control)}}" method="GET" accept-charset="utf-8" name="form1" id="form1">
    @csrf
    <div class="container-fluid" style="margin-top: 2%;">
    <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                así conseguimos dividir en 2 columnas a los inputs del formulario               -->
    <div class="row row-cols-2">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nombres</span>
                <input type="text" onchange="validarTR(event)" class="form-control" maxlength="45" placeholder="Nombres..." name="nombres" id="nombres" value='{{$alumno->nombres}}' required>
            </div>
        </div>
        <div class="col">
                <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Estado</span>
                <select type="select" onchange="validarTR(event)" class="form-control" name="estado" id="estado" required>
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
                <input type="text" onchange="validarTR(event)" class="form-control" maxlength="45" placeholder="Primer Apellido..." name="ap_paterno" id="apellidoP" value='{{$alumno->ap_paterno}}' required>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Ciudad</span>
                <input type="text" onchange="validarTR(event)" placeholder="Ciudad..." maxlength="45" aria-label="Ciudad" class="form-control" name="ciudad" id="ciudad" value='{{$alumno->ciudad}}' required>
              </div>
        </div>
        <div class="col">
        <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Apellido Materno</span>
            <input type="text" onchange="validarTR(event)" class="form-control" maxlength="45" placeholder="Segundo Apellido..." name="ap_materno" id="apellidoM" value='{{$alumno->ap_materno}}' required>
        </div>
      </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Calle</span>
                <input type="text" onchange="validarTR(event)" placeholder="Calle" aria-label="Calle" class="form-control" maxlength="45" name="calle" id="calle" value='{{$alumno->calle}}' required>
              </div>
        </div>
        <div class="col">
          <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">CURP</span>
              <input type="text" onchange="validarTR(event)" onkeyup="this.value = this.value.toUpperCase();" class="form-control" maxlength="18" placeholder="CURP..." aria-label="RFC" name="curp" id="curp" value='{{$alumno->curp}}' required>
          </div>
        </div>
        <div class="col">
          <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">Número</span>
              <input type="text" onchange="validarTR(event)" placeholder="#Número" aria-label="Número" class="form-control" maxlength="5" name="numero" id="numero" value='{{$alumno->numero}}' required>
            </div>
       </div>
       <div class="col">
          <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">Fecha de nacimiento</span>
              <input type="date" onchange="validarTR(event)" class="form-control" aria-label="RFC" name="fecha_nac" id="fecha_nacimiento" value='{{$alumno->fecha_nac}}' required>
          </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Colonia</span>
                <input type="text" onchange="validarTR(event)" class="form-control" maxlength="45" placeholder="Colonia..." aria-label="Colonia" name="colonia" id="colonia" value='{{$alumno->colonia}}' required>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Telefóno</span>
                <input type="tel" onchange="validarTR(event)" class="form-control" maxlength="18" placeholder="#Tel" aria-label="Numero" name="telefono" id="telefono" value='{{$alumno->telefono}}' required>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">C.P</span>
                <input type="number" onchange="validarTR(event)" class="form-control" maxlength="5" placeholder="#C.P" aria-label="Numero" name="codigo_postal" id="codigo_postal" value='{{$alumno->codigo_postal}}' required>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Correo electrónico</span>
                <input type="email" onchange="validarTR(event)" class="form-control" maxlength="45" placeholder="@ejemplo.com" aria-label="Correo electronico" name="correo" id="correo" value='{{$alumno->correo}}' required>
            </div>
        </div>
        <div class="col">
          <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">Descuento</span>
              <input type="number" onchange="validarTR(event)" min="0" max="100" class="form-control" placeholder="%" aria-label="Numero" name="descuento" id="descuento" value='{{$alumno->descuento}}' required>
          </div>
        </div>
        <div class="col">
          <div class="input-group input-group-lg mb-4">
              <label class="input-group-text" for="inputGroupSelect01">Estado actual</label>
              <select class="form-select" onchange="validarTR(event)" id="inputGroupSelect01" name="estado_actual" id="estado_actual" required>
                <option selected>{{$alumno->estado_actual}}</option>
                @if($alumno->estado_actual == "Alta")
                <option>Baja</option>
                @else
                <option>Alta</option>
                @endif
              </select>
            </div>
        </div>
        <div class="col">
        <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">¿Desea factura?</span>
              <select class="form-select" onchange="validarTR(event)" id="inputGroupSelect01" name="factura" id="factura" required>
                <option selected>{{$alumno->factura}}</option>
                <option>Si</option>
                <option>No</option>
              </select>
          </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nombre completo</span>
                <input type="text" onchange="validarTR(event)" class="form-control" maxlength="200" placeholder="Nombre..." name="fnombres" id="fnombres" value='{{$alumno->fnombres}}'>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">RFC</span>
                <input type="text" onchange="validarTR(event)" onkeyup="this.value = this.value.toUpperCase();" class="form-control" placeholder="RFC..." name="frfc" id="frfc" value='{{$alumno->frfc}}'>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Domicilio</span>
                <input type="text" onchange="validarTR(event)" class="form-control" maxlength="300" placeholder="Domicilio..." name="fdomicilio" id="fdomicilio" value='{{$alumno->fdomicilio}}'>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Telefóno</span>
                <input type="tel" onchange="validarTR(event)" class="form-control" maxlength="18" placeholder="#Tel" name="ftelefono" id="ftelefono" value='{{$alumno->ftelefono}}'>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Correo electrónico</span>
                <input type="email" onchange="validarTR(event)" class="form-control" maxlength="45" placeholder="@ejemplo.com" name="fcorreo" id="fcorreo" value='{{$alumno->fcorreo}}'>
            </div>
        </div>
    </div> 


    <div class="col" style="margin-top: 3%;">
        <button type="submit" class="btn btn-dark" style="padding-inline: 2%;" onclick=validarF();>ACTUALIZAR</button>
    </div>


</div>
</form>
@endsection
@section('scripts')
<script>
function validarTR(e) {
 if (e.target.value.trim() == "")
  alert("Debe ingresar un valor en el campo");
}
</script>

<script>
function validarF(){
    var nombres = document.getElementById("nombres").value.trim();
    var appat = document.getElementById("apellidoP").value.trim();
    var apmat = document.getElementById("apellidoM").value.trim();
    var ci = document.getElementById("ciudad").value.trim();
    var calle = document.getElementById("calle").value.trim();
    var num = document.getElementById("numero").value.trim();
    var col = document.getElementById("colonia").value.trim();
    var cp = document.getElementById("codigo_postal").value.trim();
    var fnac = document.getElementById("fecha_nacimiento").value.trim();
    var curp = document.getElementById("curp").value.trim();
    var tel = document.getElementById("telefono").value.trim();
    var email = document.getElementById("correo").value.trim();
    var descu = document.getElementById("descuento").value.trim();
    var fact = document.getElementById("factura").value;
    var fnom = document.getElementById("fnombres").value.trim();
    var frfc = document.getElementById("frfc").value.trim();
    var fdom = document.getElementById("fdomicilio").value.trim();
    var ftel = document.getElementById("ftelefono").value.trim();
    var fcorreo = document.getElementById("fcorreo").value.trim();
    if(nombres !="" && appat !="" && apmat !="" && ci !="" && calle !="" && num !="" &&  col !="" && cp !="" && fnac !="" && curp !="" && tel != "" && email !="" && descu !=""){
        if((fact == "Si" && fnom !="" && frfc !="" && frfc !="" && fdom !="" && ftel !="" && fcorreo !="") || fact == "No"){
            document.form1.submit();
        }else{
            alert("Faltan campos");
        }
    }else{
        alert("Faltan campos");
    }
}
</script>
@endsection