concepto.addEventListener('change',() =>{
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        type: 'GET',
        dataType: 'json',
        url: '/precio/concepto',
        data: {
            '_token': $('input[name=_token]').val(),
            'concepto': $('#concepto').val(),
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