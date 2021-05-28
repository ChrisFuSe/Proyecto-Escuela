let xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET","../php/checar-sesion.php", true);
xmlhttp.send();
xmlhttp.onreadystatechange = function (){
    if (this.readyState == 4 && this.status == 200) {
        let mensaje = document.getElementById("bienvenida");
        mensaje.append(this.responseText);
    }
};