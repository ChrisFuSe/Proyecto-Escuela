let grupo = document.getElementById('grupo');
let nivel = document.getElementById('nivel');
grupo.addEventListener('change',() =>{
    $.ajax({
      url: '/consultar/nivel',
      method: 'POST',
      data:{
          _token: $('input[name="_token"]').val(),
          grupo: grupo.value
      },
    }).done(function(res){
      nivel.value = res.descripcion;
    });
  });