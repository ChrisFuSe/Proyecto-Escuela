let cuerpo = document.getElementById('cuerpo');
let concepto = document.getElementById('concepto');
let concepto2 = document.getElementById('concepto2');
let precio_concepto = document.getElementById('concepto_precio');
let lupa = document.getElementById('lupa');
let adeudo = document.getElementById('adeudo');
let precio_adeudo = document.getElementById('adeudo_precio');
let select = document.getElementById('inputGroupSelect01');
let camp1 = document.getElementById('labelNcontrol');
select.addEventListener('change',() =>{
  if(select.value == 1){
      cuerpo.hidden = false;
      concepto.hidden = false;
      precio_concepto.hidden = false;
      lupa.hidden = true;
      adeudo.hidden = true;
      precio_adeudo.hidden = true;
  }else{
      cuerpo.hidden = false;
      concepto.hidden = true;
      precio_concepto.hidden = true;
      lupa.hidden = false;
      adeudo.hidden = false;
      precio_adeudo.hidden = false;
  }
});

concepto2.addEventListener('change',() =>{
  let precio = document.getElementById('concepto_precio2');
  switch(concepto2.value){
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
  