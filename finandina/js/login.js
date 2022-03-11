
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
                setTimeout(() => {
                    location.href = 'admin.php';    
                }, 1000);
            }else{
                alert(json.mensaje);
                $('#bton_entrar').attr("disabled", false);
            }
            
      }
    });
    
    event.preventDefault();

    })