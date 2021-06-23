function validar(){
    let cajas_texto = document.getElementsByClassName("form-control");
    let validacion = true;
    let expReg= /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;

    for (let indice in cajas_texto){
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
    }else{
        alert("Datos registrados de manera correcta");
    }
}
}
