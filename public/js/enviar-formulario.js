function enviar(){
    if(validar() == true){
        var atributos="";
        var valores="";
        let xmlhttp = new XMLHttpRequest();
        let formulario = document.getElementsByClassName('form-control');
        
        for (let indice=0; indice<formulario.length; indice++){
            valores = valores + "'"+formulario[indice].value+"'";
            if(indice<formulario.length-1){
                valores = valores+",";
                atributos = atributos+",";
            }
        }
        xmlhttp.open("POST","BD/insertar.php", true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlhttp.send("atributos="+atributos);
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                try{
                    console.log(this.responseText);
                }catch(e){
                    alert(this.responseText);
                    console.log(this.responseText);
                }
            }
        }
    }
}

function validar(){
    let cajas_texto = document.getElementsByClassName("form-control");
    validacion = true;
    let expReg= /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;

    for (let indice=0; indice<cajas_texto.length; indice++){
        if(cajas_texto[indice].ariaLabel != "Busqueda"){
            if(cajas_texto[indice].value == ""){
                validacion = false;
                cajas_texto[indice].style.borderColor = "red";
            }else{
                cajas_texto[indice].style.borderColor = "gray";
            }
            if(cajas_texto[indice].ariaLabel == "Numero"){
                if(isNaN (parseInt(cajas_texto[indice].value))){
                    validacion = false;
                    cajas_texto[indice].style.borderColor = "red";
                }else{
                    cajas_texto[indice].style.borderColor = "gray";
                }
            }
            if(cajas_texto[indice].ariaLabel == "Correo electronico"){
                if(expReg.test(cajas_texto[indice].value) == false){
                    validacion = false;
                    cajas_texto[indice].style.borderColor = "red";
                }else{
                    cajas_texto[indice].style.borderColor = "gray";
                }
            }
        }
    }
    if(validacion == false){
        alert("Datos inválidos");
    }
    return validacion;
}