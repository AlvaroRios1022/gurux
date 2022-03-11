
function seleccionar_guru(e){

  id = e.id
 
  if( $('#'+id).is(':checked') ) {

   
    $('input[type=checkbox]').attr('disabled','true');
    $('select').attr('disabled', true);
    $('select').attr('required', false);
    $('#'+id).attr('disabled',false);
    var id_select = id.split("_");
    $('#'+id_select[1]).attr('disabled', false);
    $('#'+id_select[1]).attr('required', 'true');
}
else{
  $('input[type=checkbox]').attr('disabled',false);
  $('select').attr('disabled', false);
  $('select').attr('required', true);


}
  
    
  
  
}


function cambiar_otro_complementario(e){

  
  if(e.value=="Otro"){
    $("#estudio_desc").val("")
$("#estudio_desc").show()
  }else{
    $("#estudio_desc").val(e.value)
    $("#estudio_desc").hide()
  }
}

function cambiar_idioma(e){

  
  if(e.value=="Otros"){
    $("#idioma_desc").val("")
$("#idioma_desc").show()
  }else{
    $("#idioma_desc").val(e.value)
    $("#idioma_desc").hide()
  }
}

function cambiar_otro_experiencia(e){

  
  if(e.value=="Otros"){
    $("#cargo_desc").val("")
$("#cargo_desc").show()
  }else{
    $("#cargo_desc").val(e.value)
    $("#cargo_desc").hide()
  }
}


$(function () {
  $("#estudio_desc").hide()
  $("#cargo_desc").hide()
  $("#idioma_desc").hide()
  
  
  document.getElementById("fechafin_f").onchange = function () {
    var input = document.getElementById("fechaini_i");
    input.setAttribute("max", this.value);
    
  }
  document.getElementById("fechaini_i").onchange = function () {
    var input = document.getElementById("fechafin_f");
    input.setAttribute("min", this.value);
    
}






document.getElementById("fechaini_c").onchange = function () {
  var input = document.getElementById("fechafin_c");
  input.setAttribute("min", this.value);
  
}


document.getElementById("fechafin_c").onchange = function () {
  var input = document.getElementById("fechaini_c");
  input.setAttribute("max", this.value);
  
}

document.getElementById("fechaini_e").onchange = function () {
  var input = document.getElementById("fechafin_e");
  input.setAttribute("min", this.value);
}


document.getElementById("fechafin_e").onchange = function () {
  var input = document.getElementById("fechaini_e");
  input.setAttribute("max", this.value);
  
}
  
})

function Adjuntar_Experiencia(e) {
  var formato = (e.files[0].type);

  RequestHttp._UploadFile(e, "controller/GuruController.php", function(data) {

      if (data != null) {
          $("#url_cert_exp").val(data.Path)
        
          
      }
  });
}

function Adjuntar_portafolio_adicional(e) {
  var formato = (e.files[0].type);

  RequestHttp._UploadFile(e, "controller/GuruController.php", function(data) {

      if (data != null) {
          $("#url_portafolio_adicional").val(data.Path)
        
          
      }
  });
}

function Adjuntar_cert_adicional(e) {
  var formato = (e.files[0].type);

  RequestHttp._UploadFile(e, "controller/GuruController.php", function(data) {

      if (data != null) {
          $("#url_cert_adicional").val(data.Path)
       
          
      }
  });
}




function AdjuntarImagen(e) {
  var formato = (e.files[0].type);

  RequestHttp._UploadFile(e, "controller/GuruController.php", function(data) {

      if (data != null) {
          $("#url_image").val(data.Path)
          $('#image_perfil').attr('src', data.Path)
          
      }
  });
}




function Adjuntar_certificado(e) {
  var formato = (e.files[0].type);

  RequestHttp._UploadFile(e, "controller/GuruController.php", function(data) {

      if (data != null) {
          $("#url_cert_formacion").val(data.Path)
      }
  });
}


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



var ID_USUARIO = 0
    
$( "#informacion_general" ).submit(function( event ) {

  //$('#btn_guardar').attr("disabled", true);
  
  var parametros = $(this).serialize();
  
  
  $.ajax({
      type: "POST",
      url: "controller/GuruController.php",
      data: parametros,
       beforeSend: function(objeto){
          
          $("#div_mensaje").show();
          $("#mensaje_respuesta").html("Mensaje: Cargando...");
        },
        
      success: function(datos){
     
          var json = JSON.parse(datos);
          alert(json.mensaje);
          ID_USUARIO  = json.id
          $("#id_personal").val(json.id)
          $("#id_usuario").val(json.id)
          $("#id_usuario_complementario").val(json.id)
          $("#id_usuario_experiencia").val(json.id)
          $("#id_usuario_exp").val(json.id)
          $("#id_usuario_idioma").val(json.id)
          $("#id_usuario_terminos").val(json.id)

          setTimeout(() => {
            document.getElementById("cierrapersonal").style.display="none";
          }, 500);
          
    }
  });
  
  event.preventDefault();

  })



  $( "#form_formacion_academica" ).submit(function( event ) {
    //$('#btn_guardar').attr("disabled", true);
    
    var parametros = $(this).serialize();
    
    
    $.ajax({
        type: "POST",
        url: "controller/GuruController.php",
        data: parametros,
         beforeSend: function(objeto){
            
            $("#div_mensaje").show();
            $("#mensaje_respuesta").html("Mensaje: Cargando...");
          },
          
        success: function(datos){
          var json = JSON.parse(datos);
          alert(json.mensaje);
         
          $("#id_formacion").val(json.id)
          document.getElementById("cierraacademia").style.display="none";
      }
    });
    
    event.preventDefault();
  
    })
/*
    function Agregar_Idioma(){
      
      //$('#Form_idioma')[0].reset();
      document.getElementById("Form_idioma").reset();
    }
*/
    function nueva_formacion(){
      $('#form_formacion_academica')[0].reset();
      $("#id_formacion").val("0")
    }

    function Adicionar_complementario(){
      $('#estudio_complementario')[0].reset();
      $("#id_complementario").val("0");
    }

    function Nueva_Experiencia(){
      $('#form_exp')[0].reset();
      $("#id_experiencia").val("0")
    }


    $( "#Form_idioma" ).submit(function( event ) {
      //$('#btn_guardar').attr("disabled", true);
      
      var parametros = $(this).serialize();
      
      
      $.ajax({
          type: "POST",
          url: "controller/GuruController.php",
          data: parametros,
           beforeSend: function(objeto){
              
              $("#div_mensaje").show();
              $("#mensaje_respuesta").html("Mensaje: Cargando...");
            },
            
          success: function(datos){
            var json = JSON.parse(datos);
            alert(json.mensaje);
            document.getElementById("Form_idioma").reset();
            $("#idioma_desc").hide()
        }
      });
      
      event.preventDefault();
    
      })

    $( "#estudio_complementario" ).submit(function( event ) {
      //$('#btn_guardar').attr("disabled", true);
      
      var parametros = $(this).serialize();
      
      
      $.ajax({
          type: "POST",
          url: "controller/GuruController.php",
          data: parametros,
           beforeSend: function(objeto){
              
              $("#div_mensaje").show();
              $("#mensaje_respuesta").html("Mensaje: Cargando...");
            },
            
          success: function(datos){
            var json = JSON.parse(datos);
            alert(json.mensaje);
            $("#id_complementario").val(json.id)
            document.getElementById("cierracomplemento").style.display="none";
        }
      });
      
      event.preventDefault();
    
      })


      $( "#form_experiencia_laboral" ).submit(function( event ) {
        //$('#btn_guardar').attr("disabled", true);
        
        var parametros = $(this).serialize();
        
        
        $.ajax({
            type: "POST",
            url: "controller/GuruController.php",
            data: parametros,
             beforeSend: function(objeto){
                
                $("#div_mensaje").show();
                $("#mensaje_respuesta").html("Mensaje: Cargando...");
              },
              
            success: function(datos){
              var json = JSON.parse(datos);
              alert(json.mensaje);
              $("#id_experiencia").val(json.id)
              document.getElementById("cierralaboral").style.display="none"
          }
        });
        
        event.preventDefault();
      
        })



        $( "#form_exp" ).submit(function( event ) {
          //$('#btn_guardar').attr("disabled", true);
          
          var parametros = $(this).serialize();
          
          
          $.ajax({
              type: "POST",
              url: "controller/GuruController.php",
              data: parametros,
               beforeSend: function(objeto){
                  
                  $("#div_mensaje").show();
                  $("#mensaje_respuesta").html("Mensaje: Cargando...");
                },
                
              success: function(datos){
                alert(json.mensaje);
            }
          });
          
          event.preventDefault();
        
          })


          $( "#form_terminos_condiciones" ).submit(function( event ) {
            //$('#btn_guardar').attr("disabled", true);
            
            var parametros = $(this).serialize();
            
            
            $.ajax({
                type: "POST",
                url: "controller/GuruController.php",
                data: parametros,
                 beforeSend: function(objeto){
                    
                    $("#div_mensaje").show();
                    $("#mensaje_respuesta").html("Mensaje: Cargando...");
                  },
                  
                success: function(datos){
                  var json = JSON.parse(datos);
                  alert(json.mensaje);
                  setTimeout(function(){ window.location.replace("https://guruxy.com/"); }, 600);
              }
            });
            
            event.preventDefault();
          
            })