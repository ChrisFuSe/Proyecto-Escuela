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
  switch(concepto.value){
      case 'constancia':
        precio.value = "100";
      break;
      case 'diploma F2F':
        precio.value = "1200";
      break;
      case 'diploma TTC':
        precio.value = "1500";
      break;
      case 'inscripcion':
        precio.value = "500";
      break;
      case 'inscripcion bachellor':
        precio.value = "750";
      break;
      case 'libros':
        precio.value = "285";
      break;
      case 'mensualidad':
        precio.value = "760";
      break;
      case 'mensualidad bachellor':
        precio.value = "1860";
      break;
  }
});
  