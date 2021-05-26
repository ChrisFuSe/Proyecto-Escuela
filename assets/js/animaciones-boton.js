let botones_navegacion = document.getElementsByClassName("botones-navegacion");
if(botones_navegacion.length != 0){
    for (let indice in botones_navegacion){
        botones_navegacion[indice].addEventListener('mouseover' , function(){
            botones_navegacion[indice].style.transition = "0.2s linear";
            botones_navegacion[indice].style.transform = "scale(1.1)";
        });
        botones_navegacion[indice].addEventListener('mouseout' , function(){
            botones_navegacion[indice].style.transition = "0.2s linear";
            botones_navegacion[indice].style.transform = "scale(1)";
        });
    }
}