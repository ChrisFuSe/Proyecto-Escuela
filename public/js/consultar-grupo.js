var grupo = document.getElementById('grupo');
grupo.addEventListener('change',() =>{
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET","{{route('grupo.actual')}}", true);
    xmlhttp.send();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
        }
    }
});


function getDias() {
    var dias="";
    let horario = $('#horario').val();
    for(let i=0; i<horario.length; i++){
        dias=dias+horario[i];
        if(i<horario.length-1){
            dias=dias+",";
        }
    }
    return dias;
}