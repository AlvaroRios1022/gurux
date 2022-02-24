$( document ).ready(function() {
$.ajax({
    type: "POST",
    url: "controller/GuruController.php",
    data: parametros,  
    success: function(datos){
      console.log(datos);
  }
});

event.preventDefault();
})