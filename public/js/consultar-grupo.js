var grupo = document.getElementById('grupo');
grupo.addEventListener('change',() =>{
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        type: 'GET',
        dataType: 'json',
        url: '/consultar/grupo',
        data: {
            '_token': $('input[name=_token]').val(),
            'grupo': $('#grupo').val(),
        },
        beforeSend: function () {
            console.log('bloqueo botones');
        },
        complete: function () {
            console.log('desbloqueo botones');
        },
        success: function (response) {
           console.log('ok!');
           console.log(response);
        },
        error: function (jqXHR) {
            console.log('boo!');
        }
    });
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