function hacer_peticion(){
    $.ajax({
        url: '/consultar/adeudos',
        method: 'POST',
        data:{
            _token: $('input[name="_token"]').val(),
            numero_control: $('input[name="numero_control"]').val()
        }
    }).done(function(res){
        let adeudos = JSON.parse(res);
        let select_adeudos = document.getElementById('adeudos');
        for (let index = 0; index < adeudos.length; index++) {
            let texto = adeudos[index].concepto+" Fecha: "+adeudos[index].fecha_adeudo;
            let opcion = document.createElement("option");
            opcion.text = (texto).charAt(0).toUpperCase() + texto.slice(1);
            opcion.value = adeudos[index].id_adeudo;
            select_adeudos.appendChild(opcion);
        }
    });
}