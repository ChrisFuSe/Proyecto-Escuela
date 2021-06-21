<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prestige Management System</title>

    <!--    Importacion de fuentes (Encontradas en GoogleFonts)     -->
    @yield('fuentes')
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Petit+Formal+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

    <!--    Favicon     -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/Prestige.ico') }}" />

    <!--    Estilos      -->
    @yield('estilos')
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos_constantes.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos_imagen_opcion.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos_home.css') }}">

    <!--    Header scripts      -->
    @yield('header-scripts')

    <!--    Script para el menu lateral     -->
    <script>
        function openNav() {
            document.getElementById("sideNavigation").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }
         
        function closeNav() {
            document.getElementById("sideNavigation").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>
</head>

<body>

    <!--    Imagen opcion escogida      -->
    <img id="imagen-opcion" src=@yield('imagen-opc')>

    <!--    Cabecera      -->
    <div class="container-fluid" id="cabecera">
        <img src="{{ asset('img/Logo_Prestige.png') }}" class="img-fluid" alt="Logo" width="140">
        <p id="nombre_sistema">Prestige Management System</p>
    </div>



    <!--    Menu para navegación rápida     -->


    <div id="sideNavigation" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <?php
                switch(auth()->user()->tipo){
                    case '1':
                    ?>
        <a href="\gestores\maestros">Maestros</a>
        <a href="\gestores\pagos">Pagos</a>
        <a href="\gestores\grupos">Grupos</a>
        <a href="\gestores\alumnos">Alumnos</a>
        <a href="\gestores\usuarios">Usuarios</a>
        <a href="\gestores\cal-as">Calificaciones-asistencia</a>
        <?php
                        break;
                    case '2':
                    ?>
        <a href="\gestores\maestros">Maestros</a>
        <a href="\gestores\pagos">Pagos</a>
        <a href="\gestores\alumnos">Alumnos</a>
        <a href="\gestores\cal-as">Calificaciones-asistencia</a>
        <?php
                        break;
                    case '3':
                    ?>
        <a href="\gestores\cal-as">Calificaciones-asistencia</a>
        <?php
                        break;
                }
                ?>
        <a style="margin-left: 10%" href="{{route('login.salir')}}">Cerrar Sesion</a>
    </div>

    <nav class="topnav">
        <a href="#" onclick="openNav()">
            <svg width="30" height="30" id="icoOpen">
                <path d="M0,5 30,5" stroke="#000" stroke-width="5" />
                <path d="M0,14 30,14" stroke="#000" stroke-width="5" />
                <path d="M0,23 30,23" stroke="#000" stroke-width="5" />
            </svg>
        </a>
    </nav>

    <div id="main">
        @yield('cuerpo')

        <!--    Botones Home y Regresar      -->
        <div class="col" style="margin-top: 3%;">
            <div class="btn-real" style="display: inline; padding-right: 5%;">
                <img width="5%" src="{{ asset('img/icono-regresar.png') }}" class="botones-navegacion"
                    onclick="window.history.back();">
                <img width="5%" src="{{ asset('img/icono-home.png') }}" class="botones-navegacion"
                    onclick="window.location.href = '{{route('home')}}'">
            </div>
        </div>

        <!--    Scripts      -->
        <script src="{{ asset('js/animaciones-boton.js') }}"></script>
        @yield('scripts')

        <!--    Reconocimiento a los autores de los iconos en oculto    -->
        <div hidden>Iconos diseñados por <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a
                href="https://www.flaticon.es/" title="Flaticon">www.flaticon.es</a></div>
        <div hidden>Icons made by <a href="https://www.flaticon.com/authors/roundicons"
                title="Roundicons">Roundicons</a>
            from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
        <div hidden>Icons made by <a href="https://creativemarket.com/eucalyp" title="Eucalyp">Eucalyp</a> from <a
                href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
    </div>
</body>

</html>