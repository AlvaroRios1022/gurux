$( document ).ready(function() {

    if (document.location.pathname == '/home/confirmacion_cuenta.php') {
        
        var parametros = "tipo=authorization&code="+$('#code').val();
        console.log(parametros);

        $.ajax({
            type: "POST",
            url: "controller/AuthorizationController.php",
            data: parametros,    
            success: function(datos){

                var json = JSON.parse(datos);
                if(json.status =="success"){
                    $(".mensajeAthorization h1").html(json.mensaje);
                }else{
                    $(".mensajeAthorization h1").html(json.mensaje);

                }
                
          }
        });

    }
});