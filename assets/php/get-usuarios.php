<?php
    include_once("conexion.php");
    $query = "select nombre_usuario,contrasenia,id_tipo_usuario from usuario;";
    $data = mysqli_query($link, $query);
    if(isset($data)){
        $usuarios = $data->fetch_all();
        echo $usuariosjson = json_encode($usuarios);
    }else{
        echo "Error al obtener usuarios";
    }

?>