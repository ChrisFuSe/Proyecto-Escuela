function hacer_peticion(){
    var select_adeudos = $("#adeudos");
    $.ajax({
        url: '/consultar/adeudos/alumno',
        method: 'POST',
        data:{
            _token: $('input[name="_token"]').val(),
            numero_control: $('input[name="pago_adeudo_numero_control"]').val()
        },
        beforeSend: function () 
                {
                    select_adeudos.prop('disabled', true);
                }
    }).done(function(res){
        select_adeudos.prop('disabled', false);
        let adeudos = JSON.parse(res);
        select_adeudos.find('option').remove();
        select_adeudos.append('<option selected disabled>Seleccionar...</option>');
        for (let index = 0; index < adeudos.length; index++) {
            let texto = adeudos[index].concepto+" Fecha: "+adeudos[index].fecha_adeudo;
            select_adeudos.append('<option value="' + adeudos[index].id_adeudo + '">' + 
            (texto).charAt(0).toUpperCase() + texto.slice(1) + '</option>');
        }
        select_adeudos.change(function(){
            let precio_adeudo = document.getElementById("caja_precios");
            for (let index = 0; index < adeudos.length; index++) {
                if(select_adeudos.val() == adeudos[index].id_adeudo){
                    precio_adeudo.value = adeudos[index].monto_adeudo;
                }
            }
        });
    });
}