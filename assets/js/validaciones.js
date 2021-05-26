function valida_envia() {
    if (document.forms["registraral"]["nombres"].value.length == 0) {
        alert("Tiene que escribir su nombre");
        return 0;
        
    }
    if (document.forms["registraral"]["ape_pat"].value.length == 0) {
        alert("Tiene que escribir su apellido");
        return 0;
    }
    alert("Muchas gracias por enviar el formulario");
    document.registraral.submit();
}   

