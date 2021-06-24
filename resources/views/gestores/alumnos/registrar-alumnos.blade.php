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
<form action="{{route('registrar.alumnos')}}" method="POST" accept-charset="utf-8" name=form1>
@csrf
 <!--    Contenedor con todos los inputs del formulario para registrar un nuevo alumno  -->
 <div class="container-fluid" style="margin-top: 2%;">
    <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                así conseguimos dividir en 2 columnas a los inputs del formulario               -->
    <div class="row row-cols-2">
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nombres</span>
                <input id="nombres" onchange="validarTR(event)" type="text" class="form-control" maxlength="45" placeholder="Nombres..." name="nombres" required>
            </div>
        </div>
        <div class="col">
                <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Estado</span>
                <select type="select" id="estado" class="form-control" name="estado" required>
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
                <input type="text" onchange="validarTR(event)" class="form-control" maxlength="45" placeholder="Primer Apellido..." id="apellidoP" name="ap_paterno" required>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Ciudad</span>
                <input type="text" onchange="validarTR(event)" id="ciudad" placeholder="Ciudad..." aria-label="Ciudad" class="form-control" maxlength="45" name="ciudad" required>
              </div>
        </div>
        <div class="col">
        <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Apellido Materno</span>
            <input type="text" onchange="validarTR(event)" class="form-control" maxlength="45" placeholder="Segundo Apellido..." id="apellidoM" name="ap_materno" required>
        </div>
      </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Calle</span>
                <input type="text" onchange="validarTR(event)" id="calle" placeholder="Calle" aria-label="Calle" class="form-control" maxlength="45" name="calle" required>
              </div>
        </div>
        <div class="col">
          <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">CURP</span>
              <input type="text" onchange="validarTR(event)" id="curp" name="curp" onkeyup="this.value = this.value.toUpperCase();" class="form-control" maxlength="18" placeholder="CURP..." required>
          </div>
        </div>
        <div class="col">
          <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">Número</span>
              <input type="text" onchange="validarTR(event)" id="numero" name="numero"  placeholder="#Número" aria-label="Número" class="form-control" maxlength="5" required>
            </div>
       </div>
       <div class="col">
          <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">Fecha de nacimiento</span>
              <input type="date" onchange="validarTR(event)" id="fecha_nacimiento" class="form-control" aria-label="RFC" name="fecha_nac" required>
          </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Colonia</span>
                <input type="text" onchange="validarTR(event)" id="colonia" class="form-control" maxlength="45" placeholder="Colonia..." aria-label="Colonia" name="colonia" required>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Telefóno</span>
                <input type="tel"  onchange="validarTR(event)" id="telefono" class="form-control" maxlength="18" placeholder="#Tel" aria-label="Numero" name="telefono" required>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">C.P</span>
                <input type="text" onchange="validarTR(event)" id="codigo_postal" class="form-control" maxlength="5" placeholder="#C.P" aria-label="Numero" name="codigo_postal" required>
            </div>
        </div>
        <div class="col">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Correo electrónico</span>
                <input type="email" onchange="validarTR(event)" id="correo" class="form-control" maxlength="45" placeholder="@ejemplo.com" aria-label="Correo electronico" name="correo" required>
            </div>
        </div>
        <div class="col">
          <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">Descuento</span>
              <input type="number" onchange="validarTR(event)" id="descuento" min="0" max="100" class="form-control" placeholder="%" aria-label="Numero" name="descuento" required>
          </div>
        </div>
        <div class="col">
        <div class="input-group input-group-lg mb-4">
              <span class="input-group-text">¿Desea factura?</span>
              <select class="form-select" id="sFactura" onchange="facturar()" name="factura" required>
                <option selected value="Si">Si</option>
                <option value="No">No</option>
              </select>
          </div>
        </div>
        <div class="col" id="fNombre">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Nombre completo</span>
                <input type="text" onchange="validarTR(event)" id="fnombres" class="form-control" maxlength="200" placeholder="Nombre..." name="fnombres">
            </div>
        </div>
        <div class="col" id="fRfc">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">RFC</span>
                <input type="text" onchange="validarTR(event)" id="frfc" onkeyup="this.value = this.value.toUpperCase();" maxlength="13" class="form-control" placeholder="RFC..." name="frfc">
            </div>
        </div>
        <div class="col" id="fDom">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Domicilio</span>
                <input type="text" onchange="validarTR(event)" id="fdomicilio" class="form-control" maxlength="300" placeholder="Domicilio..." name="fdomicilio">
            </div>
        </div>
        <div class="col" id="fTel">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Telefóno</span>
                <input type="tel" onchange="validarTR(event)" id="ftelefono" class="form-control" maxlength="18" placeholder="#Tel" name="ftelefono">
            </div>
        </div>
        <div class="col" id="fCorreo">
            <div class="input-group input-group-lg mb-4">
                <span class="input-group-text">Correo electrónico</span>
                <input type="email" onchange="validarTR(event)" id="fcorreo" class="form-control" maxlength="45" placeholder="@ejemplo.com" name="fcorreo">
            </div>
        </div>
    </div> 
    

    <div class="col" style="margin-top: 3%;">   
        <button type="button" class="btn btn-dark" style="padding-inline: 2%;"  onclick="validarF()">GUARDAR</button>
    </div>


</div>
</form>

<script>
    function facturar(){
        var facturacion = document.getElementById("sFactura").value;
        if(facturacion == "No"){
            document.getElementById("fNombre").style.display = "none";
            document.getElementById("fRfc").style.display = "none";
            document.getElementById("fDom").style.display = "none";
            document.getElementById("fTel").style.display = "none";
            document.getElementById("fCorreo").style.display = "none";

            document.getElementById("fnombres").value = "";
            document.getElementById("frfc").value = "";
            document.getElementById("fdomicilio").value = "";
            document.getElementById("ftelefono").value = "";
            document.getElementById("fcorreo").value = "";
        }else if(facturacion == "Si"){
            document.getElementById("fNombre").style.display = "block";
            document.getElementById("fRfc").style.display = "block";
            document.getElementById("fDom").style.display = "block";
            document.getElementById("fTel").style.display = "block";
            document.getElementById("fCorreo").style.display = "block";
        }
    }
</script>
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
    var fact = document.getElementById("sFactura").value;
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