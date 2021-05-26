let botones_navegacion = document.getElementsByClassName("botones-navegacion");
if(botones_navegacion.length != 0){
    for (let indice in botones_navegacion){
        botones_navegacion[indice].addEventListener('mouseover' , function(){
            botones_navegacion[indice].style.width = "7%";
        });
        botones_navegacion[indice].addEventListener('mouseout' , function(){
            botones_navegacion[indice].style.width = "5%";
        });
    }
}

let botones_opcion = document.getElementsByClassName("boton-opc");
if(botones_opcion.length != 0){
    for (let indice in botones_opcion){
        botones_opcion[indice].addEventListener('mouseover' , function(){
            if(botones_opcion[indice].ariaLabel == "Gestor Grupos"){
                botones_opcion[indice].style.width = "82%";
            }else{
                botones_opcion[indice].style.width = "57%";
            }
        });
        botones_opcion[indice].addEventListener('mouseout' , function(){
            if(botones_opcion[indice].ariaLabel == "Gestor Grupos"){
                botones_opcion[indice].style.width = "75%";
            }else{
                botones_opcion[indice].style.width = "50%";
            }
        });
    }
}