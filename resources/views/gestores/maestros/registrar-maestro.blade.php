@extends('templates.pagina-menu-botones')

@section('imagen-opc')
"{{ asset('img/Gestor_Maestros.png') }}"
@endsection

<script>
function validar(){
    alert("Datos registrados de manera correcta");
}
</script>

@section('operacion', 'Registrar Maestro')

@section('cuerpo')
<h1>Registrar maestro</h1>
<form action="{{route('registrar.profesor')}}" method="POST" accept-charset="utf-8">
    @csrf
    <!--    Contenedor con todos los inputs del formulario para registrar un nuevo maestro  -->
    <div class="container" style="margin-top: 2%;">
        <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                    así conseguimos dividir en 2 columnas a los inputs del formulario               -->
        <div class="row row-cols-2">
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Nombres</span>
                    <input type="text" class="form-control" placeholder="Nombres..." aria-label="Nombres"
                        name="nombres">
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Apellido Paterno</span>
                    <input type="text" class="form-control" placeholder="Primer Apellido..."
                        aria-label="Apellido Paterno" name="ap_paterno">
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Apellido Materno</span>
                    <input type="text" class="form-control" placeholder="Segundo Apellido..."
                        aria-label="Apellido Materno" name="ap_materno">
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Estado</span>
                    <select type="select" class="form-control" name="estado">
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
                    <span class="input-group-text">Ciudad</span>
                    <input type="text" class="form-control" placeholder="Ciudad..." aria-label="Ciudad" name="ciudad">
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Calle y numero</span>
                    <input type="text" placeholder="Calle" aria-label="Calle" class="form-control" name="calle">
                    <input type="text" placeholder="#Numero" aria-label="Numero" class="form-control" name="numero">
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Colonia</span>
                    <input type="text" class="form-control" placeholder="Colonia..." aria-label="Colonia"
                        name="colonia">
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">C.P</span>
                    <input type="text" class="form-control" placeholder="#C.P" aria-label="Numero" name="codigo_postal">
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">RFC</span>
                    <input onkeyup="this.value = this.value.toUpperCase();" type="text" class="form-control" placeholder="Registro federal de contribuyente..."
                        aria-label="RFC" name="rfc">
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Numero Telefónico</span>
                    <input type="text" class="form-control" placeholder="#Tel" aria-label="Numero" name="telefono">
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Correo electrónico</span>
                    <input type="text" class="form-control" placeholder="@ejemplo.com" aria-label="Correo electronico"
                        name="correo">
                </div>
            </div>
        </div>
        <div class="col" style="margin-top: 3%;">
            <button type="submit" class="btn btn-dark" style="padding-inline: 2%;" onclick=validar();>GUARDAR</button>
        </div>
    </div>
</form>
@endsection