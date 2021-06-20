@extends('templates.pagina-menu-botones')

@section('imagen-opc')
"{{ asset('img/Gestor_Usuarios.png') }}"
@endsection

<script>
function validar(){
    alert("Datos actualizados de manera correcta");
}
</script>

@section('operacion', 'Editar Usuario')

@section('cuerpo')
<form action="{{route('actualizar.usuario', $usuarios->id)}}" method="GET" accept-charset="utf-8">
    @csrf
<div class="container" style="margin-top: 2%;">
        <div class="row row-cols-2">
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Nombre de usuario</span>
                    <input type="text" class="form-control" name="username" value='{{$usuarios->username}}'>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Nombre(s)</span>
                    <input type="text" class="form-control" placeholder="Nombres..." aria-label="Nombres"
                        name="nombres" value='{{$usuarios->nombres}}'>

                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Correo electrónico</span>
                    <input type="text" class="form-control" placeholder="@ejemplo.com" aria-label="Correo electronico"
                        name="email" value='{{$usuarios->email}}'>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Apellido Paterno</span>
                    <input type="text" class="form-control" placeholder="Primer Apellido..."
                        aria-label="Apellido Paterno" name="ap_paterno" value='{{$usuarios->ap_paterno}}'>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Contraseña</span>
                    <input type="password" class="form-control" placeholder="Contraseña..." aria-label="Contrasenia"
                        name="password" value='{{$usuarios->password}}'>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Apellido Materno</span>
                    <input type="text" class="form-control" placeholder="Segundo Apellido..."
                        aria-label="Apellido Materno" name="ap_materno" value='{{$usuarios->ap_materno}}'>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Repita contraseña</span>
                    <input type="password" class="form-control" placeholder="Repita contraseña..."
                        aria-label="Repita contraseña" name="password" value='{{$usuarios->password}}'>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <label class="input-group-text" for="inputGroupSelect01">Tipo de usuario</label>
                    <select class="form-select" id="inputGroupSelect01" name="tipo" >
                        <option selected>{{$usuarios->tipo}}</option>
                        <option value="1">1 | Directora</option>
                        <option value="2">2 | Secretaria</option>
                        <option value="3">3 | Maestro</option>
                    </select>
                </div>
            </div>
        </div>

    <div class="col" style="margin-top: 1%;">
        <button type="submit" class="btn btn-dark" style="padding-inline: 2%;" onclick="validar();">ACTUALIZAR</button>
    </div>
</div>

</div>
</form>
@endsection