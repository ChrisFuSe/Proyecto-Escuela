<!DOCTYPE html>
<html>
    <head>
        <title>Prestige Management System</title>
        <!--    Icono de pestaña    -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/Prestige.ico"/>

        <!--    Importacion de fuentes (Encontradas en GoogleFonts)     -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Petit+Formal+Script&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">

        <!--    Importacion del css de boostrap     -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <!--    Importacion del css (estilos propios)   -->
        <link rel="stylesheet" type="text/css" href="assets/css/estilos_constantes.css">
        <link rel="stylesheet" type="text/css" href="assets/css/estilos_log_in.css">
    </head>
    <body>

    <!--    Cabecera con el logo y el nombre de nuestro sistema     -->
        <div class="container-fluid" id="cabecera">
            <img src="assets/img/Logo_Prestige.png" class="img-fluid" alt="Logo" width="140">
            <p id="nombre_sistema">Prestige Management System</p>
        </div>

    <!--    Formulario para ingresar con usuario y contraseña     -->
        <div class="container" id="log_in">
            <p id="titulo">BIENVENIDO AL SISTEMA DE GESTION DE PRESTIGE</p>
            <form action="assets/html/home-directora.html">
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario</label>
                    <input type="textbox" class="form-control" id="usuario">
                </div>
                <div class="mb-3">
                    <label for="contraseña" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="contraseña" aria-describedby="ayuda_contraseña">
                </div>
                <div id="ayuda_contraseña" class="form-text"><a href="https://www.google.com.mx/" >¿Olvidaste tu contraseña?</a></div>
                <button type="submit" class="btn btn-primary" id="ingresar">Ingresar</button>
            </form>
        </div>

        <!--Reconocimiento a los autores de los iconos en oculto--><div hidden>Iconos diseñados por <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/" title="Flaticon">www.flaticon.es</a></div>
    </body>
</html>