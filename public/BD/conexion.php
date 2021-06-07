<?php
    $config = file_get_contents("Config.json");
    $array = json_decode($config,true);
    define("SERVER",$array["Datos Conexion"]["SERVIDOR"]);
    define("USER" ,$array["Datos Conexion"]["USER"]);
    define("PASSWORD" ,$array["Datos Conexion"]["PASSWORD"]);
    define("BD_NAME" ,$array["Datos Conexion"]["BD_NAME"]);

    $link = mysqli_connect(SERVER,USER,PASSWORD,BD_NAME);
    if (!$link) {
            echo "<br>Error: No es posible conectarse a la Base de datos.";
            echo "<br>Numero de error: " . mysqli_connect_errno();
            exit;
    }else{
    }
?>