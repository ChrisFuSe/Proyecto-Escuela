function log_in(){
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET","assets/php/get-usuarios.php", true);
    xmlhttp.send();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let acceso = false;
            let usuarios = JSON.parse(this.responseText);
            let usuario = document.getElementById("usuario");
            let contraseña = document.getElementById("contraseña");
            for(indice = 0; indice<usuarios.length; indice++){
                if(usuario.value == usuarios[indice][0]){
                    if(contraseña.value == usuarios[indice][1]){
                        acceso = true;
                        switch(parseInt(usuarios[indice][2])){
                            case 1:
                                guardar_sesion("usuario="+usuarios[indice][0],"&tipo="+usuarios[indice][2]);
                                window.location.href = 'assets/html/home-directora.html';
                            break;
                            case 2:
                                guardar_sesion("usuario="+usuarios[indice][0],"&tipo="+usuarios[indice][2]);
                                window.location.href = 'assets/html/home-secretaria.html';
                            break;
                            case 3:
                                guardar_sesion("usuario="+usuarios[indice][0],"&tipo="+usuarios[indice][2]);
                                window.location.href = 'assets/html/home-maestro.html';
                            break;
                        }
                    }
                }
            }
            if(acceso == false){
                alert("Nombre de usuario o contraseña no válidos");
            }
        }
    };
}

function guardar_sesion(usuario, tipo){
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST","assets/php/guardar-sesion.php", true);
    xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xmlhttp.send(usuario+tipo);
    xmlhttp.onreadystatechange = function (){
        if(this.readyState == 4 && this.status == 200){
            console.log(this.responseText);
        }
    }
}