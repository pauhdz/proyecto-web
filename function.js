function confirmarForm(){
    alert ("Enviando Formulario");
    console.log("Enviando");
    document.getElementById("formContact").innerHTML = "<p class ='important'>Has enviado el formulario</p>";
    return false
}