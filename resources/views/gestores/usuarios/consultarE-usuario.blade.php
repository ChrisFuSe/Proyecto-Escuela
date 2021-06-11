@extends('templates.pagina-menu-botones')

@section('imagen-opc')
"{{ asset('img/Gestor_Usuarios.png') }}"
@endsection

@section('operacion', 'Consultar Usuario')

@section('cuerpo')
<form action="{{route('consultar.usuario')}}" method="POST" accept-charset="utf-8">
    @csrf
    <div class="container" style="margin-top: 1%;">
        <div class="row row-cols-2">
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">ID usuario:</span>
                    <input type="text" class="form-control" placeholder="ID usuario..." aria-label="Nombre de usuario" name="id">
                    <button type="submit" style="padding-inline: 2%;"><img src="{{ asset('img/lupa.png') }}" alt="Responsive image"
                        width="50%" class="botones-navegacion"></button>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <!--<span class="input-group-text">Nombre completo</span>
                    <input type="text" class="form-control" placeholder="Nombre completo..." aria-label="Nombre completo">
                    <a class="botones-navegacion"><img src="{{ asset('img/lupa.png') }}" alt="Responsive image"
                            width="50%"></a-->
                </div>
            </div>
        </div>
    </div>
    @if(empty($usuario))
    <p></p>
    @else
    <!--    Contenedor con todos los inputs del formulario para registrar un nuevo usuario  -->
    <div class="container" style="margin-top: 1%;">
        <!--    Utilizamos las clases row y col de boostrap para hacer pocisionamiento tipo grid    
                    así conseguimos dividir en 2 columnas a los inputs del formulario               -->
        <div class="row row-cols-2">
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Nombre de usuario</span>
                    <label type="text" class="form-control" placeholder="Nombre usuario..." aria-label="Nombre de usuario">{{$usuario->username}}</label>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">ID Usuario</span>
                    <label type="text" class="form-control" placeholder="Nombres" aria-label="Nombres">{{$usuario->id}}</label>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Nombre(s)</span>
                    <label type="text" class="form-control" placeholder="Nombres" aria-label="Nombres">{{$usuario->nombres}} {{$usuario->ap_paterno}} {{$usuario->ap_materno}}</label>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Tipo de usuario</span>
                    <label type="text" class="form-control" placeholder="Tipo de usuario..." aria-label="Tipo de usuario">{{$usuario->tipo}}</label>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <span class="input-group-text">Correo electrónico</span>
                    <label type="text" class="form-control" placeholder="@ejemplo.com" aria-label="Correo electronico">{{$usuario->email}}</label>
                </div>
            </div>
            <div class="col">
                <div class="input-group input-group-lg mb-4">
                    <!--span class="input-group-text">Contraseña</span>
                    <label type="text" class="form-control" placeholder="Contraseña..." aria-label="Contrasenia">{{$usuario->password}}</label-->
                </div>
            </div>
        </div>
    </div>
</form>
<form action="{{route('eliminar.usuario',$usuario->id)}}" method="GET" accept-charset="utf-8">
    @csrf
    <div>
        <div class="col" style="margin-top: 3%;">
            <button type="submit" class="btn btn-dark" style="padding-inline: 2%;" onclick="validar();">ELIMINAR</button>
        </div>
    </div>
</form>
@endif
@endsection