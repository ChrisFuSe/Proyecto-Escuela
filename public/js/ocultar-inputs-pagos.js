let cuerpo = document.getElementById('cuerpo');
let concepto = document.getElementById('concepto');
let precio_concepto = document.getElementById('concepto_precio');
let lupa = document.getElementById('lupa');
let adeudo = document.getElementById('adeudo');
let precio_adeudo = document.getElementById('adeudo_precio');
let select = document.getElementById('inputGroupSelect01');
let camp1 = document.getElementById('labelNcontrol');
select.addEventListener('change',() =>{
  console.log(select.value);
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