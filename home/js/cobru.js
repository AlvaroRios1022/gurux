
$( document ).ready(function() {
    
    if (document.location.search == '?tipo_envio=bancos') {

        var parametros = "tipo=getBancos";

            $.ajax({
                type: "POST",
                url: "controller/CobruController.php",
                data: parametros,
                    beforeSend: function(objeto){
                
                    },
                    
                    success: function(datos){
                
                        var json = JSON.parse(datos);
                        if(json.status == "success"){
                            console.log('Carga Bancos');
                            json.mensaje.forEach(element => {
                                $("#bank_name").append('<option value="'+element.id+'">'+element.name+'</option>');
                            });
                            console.log(json);
                        }else{
                            alert(json.mensaje);
                            console.log(json);
                        }     
                    }
            });
        
    }
        
        let pesosColombian = Intl.NumberFormat("es-CO", {
            style: "currency",
            currency: "COP",
            minimumFractionDigits: 0
        });

        var parametros = "tipo=balance";

        $.ajax({
            type: "POST",
            url: "controller/CobruController.php",
            data: parametros,    
            success: function(datos){

                var json = JSON.parse(datos);
                if(json.status =="success"){
                    var data = JSON.parse(json.mensaje);

                    if($('.caja a.balance').html() != undefined){
                        $('.caja a.balance').html(pesosColombian.format(data.balance));
                        $('.caja a.canje').html(pesosColombian.format(data.pendingBalance));
                    }

                    console.log(json);
                }else{
                    alert(json.mensaje);
                    console.log(json);
                }
                
          }
        });

});

$( "#enviar_cobru" ).submit(function( event ) {
     
    var parametros = $(this).serialize();
    
      $.ajax({
          type: "POST",
          url: "controller/CobruController.php",
          data: parametros,
              beforeSend: function(objeto){
             
              },
              
              success: function(datos){
          
                  var json = JSON.parse(datos);
                  if(json.status == "success"){
                    alert(json.mensaje);
                    $('#amount').val('');
                    $('#to_user').val('');
                    console.log(json);
                  }else{
                    alert(json.mensaje);
                    console.log(json);
                  }     
              }
      });
    
    event.preventDefault();
    
})

$( "#cobrar_cobru" ).submit(function( event ) {
     
    var parametros = $(this).serialize();
    
      $.ajax({
          type: "POST",
          url: "controller/CobruController.php",
          data: parametros,
              beforeSend: function(objeto){
             
              },
              
              success: function(datos){
          
                  var json = JSON.parse(datos);
                  if(json.status == "success"){
                    alert(json.mensaje);
                    $('#amount').val('');
                    $('#description').val('');
                    console.log(json);
                  }else{
                    alert(json.mensaje);
                    console.log(json);
                  }     
              }
      });
    
    event.preventDefault();
    
})

$( "#enviar_efecty_baloto" ).submit(function( event ) {
     
    var parametros = $(this).serialize();
    
      $.ajax({
          type: "POST",
          url: "controller/CobruController.php",
          data: parametros,
              beforeSend: function(objeto){
             
              },
              
              success: function(datos){
          
                  var json = JSON.parse(datos);
                  if(json.status == "success"){
                    alert(json.mensaje);
                    $('#amount').val('');
                    $('#name').val('');
                    $('#document').val('');
                    console.log(json);
                  }else{
                    alert(json.mensaje);
                    console.log(json);
                  }     
              }
      });
    
    event.preventDefault();
    
})

$( "#recargar" ).submit(function( event ) {
     
    var parametros = $(this).serialize();
    
      $.ajax({
          type: "POST",
          url: "controller/CobruController.php",
          data: parametros,
              beforeSend: function(objeto){
             
              },
              
              success: function(datos){
          
                  var json = JSON.parse(datos);
                  if(json.status == "success"){
                    alert(json.mensaje);
                    $('#operator').val('');
                    $('#value').val('');
                    $('#recipient').val('');
                    console.log(json);
                  }else{
                    alert(json.mensaje);
                    console.log(json);
                  }     
              }
      });
    
    event.preventDefault();
    
})

$( "#enviar_bancos" ).submit(function( event ) {
     
    var parametros = $(this).serialize();
    
      $.ajax({
          type: "POST",
          url: "controller/CobruController.php",
          data: parametros,
              beforeSend: function(objeto){
             
              },
              
              success: function(datos){
          
                  var json = JSON.parse(datos);
                  if(json.status == "success"){
                    alert(json.mensaje);
                    $('#account_holder_name').val('');
                    $('#account_holder_document').val('');
                    $('#amount').val('');
                    console.log(json);
                  }else{
                    alert(json.mensaje);
                    console.log(json);
                  }     
              }
      });
    
    event.preventDefault();
    
})

function cambiarEnvio(tipe){ 

    var url = window.location.href;
    url = new URL(url);
    url.searchParams.set('tipo_envio', tipe);
    window.location.href = url.href;

}

function cambiarCrypto(crypto){

    var url = window.location.href;
    url = new URL(url);
    url.searchParams.set('tipo_crypto', crypto);
    window.location.href = url.href;
  
}

function cambiarServicio(servicio){
    var url = window.location.href;
    url = new URL(url);
    url.searchParams.set('tipo_servicio', servicio);
    window.location.href = url.href;
}

function cambiarRetiro(retiro){
    var url = window.location.href;
    url = new URL(url);
    url.searchParams.set('tipo_retiro', retiro);
    window.location.href = url.href;
}