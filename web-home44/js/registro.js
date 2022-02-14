
$( "#registro_usuarios" ).submit(function( event ) {
    $('#registro_usuarios').attr("disabled", true);
    
    var parametros = $(this).serialize();
    console.info(parametros)
    
    $.ajax({
        type: "POST",
        url: "controller/UsuarioController.php",
        data: parametros,
    
         beforeSend: function(objeto){
            
            $("#div_mensaje").show();
            $("#mensaje_respuesta").html("Mensaje: Cargando...");
          },
          
        success: function(datos){
            var json = JSON.parse(datos);
            $("#mensaje_respuesta").html(json.mensaje);
        
        
      }
    });
    
    event.preventDefault();

    })

    
    
$( "#Inicio_sesion" ).submit(function( event ) {
  $('#Inicio_sesion').attr("disabled", true);
  
  var parametros = $(this).serialize();
  console.info(parametros)
  
  $.ajax({
      type: "POST",
      url: "controller/UsuarioController.php",
      data: parametros,
  
       beforeSend: function(objeto){
          
          $("#div_mensaje_sesion").show();
          $("#mensaje_sesion").html("Mensaje: Cargando...");
        },
        
      success: function(datos){
          var json = JSON.parse(datos);
          $("#mensaje_sesion").html(json.mensaje);
            if(json.status =="success"){
              setTimeout(() => {
                location.reload();
              }, 1000);
            }
      
    }
  });
  
  event.preventDefault();

  })


  $( "#recuperar_pass" ).submit(function( event ) {
    $('#recuperar_pass').attr("disabled", true);
    
    var parametros = $(this).serialize();
    console.info(parametros)
    
    $.ajax({
        type: "POST",
        url: "controller/UsuarioController.php",
        data: parametros,
    
         beforeSend: function(objeto){
            
            $("#div_mensaje_pass").show();
            $("#mensaje_pass").html("Mensaje: Cargando...");
          },
          
        success: function(datos){
            var json = JSON.parse(datos);
            $("#mensaje_pass").html(json.mensaje);
              if(json.status =="success"){
                setTimeout(() => {
                  location.reload();
                }, 1000);
              }
        
      }
    });
    
    event.preventDefault();
  
    })