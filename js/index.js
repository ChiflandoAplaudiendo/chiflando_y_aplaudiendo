function desplegar_navegador(checkbox) {
  var element = document.getElementById("barra_navegacion");
  if(checkbox.checked){
    element.className = "animacion_desplegable_end";
  }else{
    element.className = "animacion_desplegable_start";
  }
}
