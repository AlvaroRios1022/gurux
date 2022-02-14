
$( "#form_login" ).submit(function( event ) {
    $('#bton_entrar').attr("disabled", true);
    
    var parametros = $(this).serialize();
   
    $.ajax({
        type: "POST",
        url: "controller/loginController.php",
        data: parametros,    
        success: function(datos){
            var json = JSON.parse(datos);
            if(json.status =="success"){
                if(json.code == "0"){
                    setTimeout(() => {
                        location.href = 'cobru.php';    
                    }, 1000);
                }else{
                    setTimeout(() => {
                        location.href = 'perfil.php';    
                    }, 1000);
                }
            }else{
                alert(json.mensaje);
                $('#bton_entrar').attr("disabled", false);
            }
            
      }
    });
    
    event.preventDefault();

    });

    $( "#form_login2" ).submit(function( event ) {
        $('#bton_entrar').attr("disabled", true);
        
        var parametros = $(this).serialize();
       
       
        $.ajax({
            type: "POST",
            url: "controller/loginController.php",
            data: parametros,    
            success: function(datos){
                var json = JSON.parse(datos);
                if(json.status =="success"){
                    if(json.code == "0"){
                        setTimeout(() => {
                            location.href = 'cobru.php';    
                        }, 1000);
                    }else{
                        setTimeout(() => {
                            location.href = 'perfil.php';    
                        }, 1000);
                    }
                }else{
                    alert(json.mensaje);
                    $('#bton_entrar').attr("disabled", false);
                }
                
          }
        });
        
        event.preventDefault();
    
    });