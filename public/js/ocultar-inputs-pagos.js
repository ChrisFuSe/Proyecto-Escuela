let primer_pago = document.getElementById('primer_pago');
let pago = document.getElementById('pago');
let concepto = document.getElementById('concepto');
let select = document.getElementById('inputGroupSelect01');
select.addEventListener('change',() =>{
  if(select.value == 1){
    primer_pago.hidden = false;
    pago.hidden = true;
  }else{
    pago.hidden = false;
    primer_pago.hidden = true;
  }
});

concepto.addEventListener('change',() =>{
  let precio = document.getElementById('concepto_precio');
  $.ajax({
    url: '/consultar/concepto',
    method: 'POST',
    data:{
        _token: $('input[name="_token"]').val(),
        concepto: concepto.value
    },
  }).done(function(res){
    precio.value = res.monto;
  });
});
  