function abrir_modal(){
  $("#modal_registro").show()
}


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


/*document.getElementById("fechafin_f").onchange = function () {
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

}*/

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
  if (formato != "application/pdf") {
      alert("Formato no válido, por favor ingrese un formato valido (PDF)");
      e.value = "";
      return false;
  }

RequestHttp._UploadFile(e, "controller/GuruController.php", function(data) {

    if (data != null) {
        $("#url_portafolio_adicional").val(data.Path)
      
        
    }
});
}

function Adjuntar_cert_adicional(e) {
var formato = (e.files[0].type);
  if (formato != "application/pdf") {
      alert("Formato no válido, por favor ingrese un formato valido (PDF)");
      e.value = "";
      return false;
  }

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
        $("#url_image_name").val(data.Name)
        $('#image_perfil').attr('src', data.Path)
    }
});
}




function Adjuntar_certificado1(e) {
var formato = (e.files[0].type);
  if (formato != "application/pdf") {
      alert("Formato no válido, por favor ingrese un formato valido (PDF)");
      e.value = "";
      return false;
  }

RequestHttp._UploadFile(e, "controller/GuruController.php", function(data) {

    if (data != null) {
        $("#url_cert_formacion1").val(data.Path)
    }
});
}


function Adjuntar_certificado2(e) {
  var formato = (e.files[0].type);
    if (formato != "application/pdf") {
        alert("Formato no válido, por favor ingrese un formato valido (PDF)");
        e.value = "";
        return false;
    }
  
  RequestHttp._UploadFile(e, "controller/GuruController.php", function(data) {
  
      if (data != null) {
          $("#url_cert_formacion2").val(data.Path)
      }
  });
  }

  function Adjuntar_certificado3(e) {
    var formato = (e.files[0].type);
      if (formato != "application/pdf") {
          alert("Formato no válido, por favor ingrese un formato valido (PDF)");
          e.value = "";
          return false;
      }
    
    RequestHttp._UploadFile(e, "controller/GuruController.php", function(data) {
    
        if (data != null) {
            $("#url_cert_formacion3").val(data.Path)
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
//alert("ddd")

  $.ajax({
      type: "POST",
      url: "controller/GuruController.php",
      data: parametros,
          beforeSend: function(objeto){
              
      
              
              
          },
          
          success: function(datos){
      
              var json = JSON.parse(datos);
              if(json.status == "success"){
                $('#modal_registro').modal('toggle');
                alert(json.mensaje);
              }else{
                alert(json.mensaje);
              }
              

              
          }
  });

/*$.ajax({
    type: "POST",
    url: "controller/GuruController.php",
    data: parametros,
     beforeSend: function(objeto){
         
 
        
        
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

      setTimeout(function(){ window.location.replace("https://guruxy.com/"); }, 300);
        
  }
});*/

event.preventDefault();

})


var FORMACION =[]

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
        var forma={
          id:json.id,
          titulo:$("#titulo_formacion").val()
        }
        FORMACION.push(forma)
        Pintar_formaciones()
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

function Pintar_formaciones(){

var tam = FORMACION.length
var html = ""
for(var i = 0;i<tam;i++){
  html = html+'<li><p>'+FORMACION[i].titulo+'</p><button onclick="eliminar_formacion('+FORMACION[i].id+')" type="button"><img src="img/eliminar.png"alt=""/></button></li>';
}
$("#lista_formacion").html(html)
}

function eliminar_formacion(id){

$.ajax({
  type: "POST",
  url: "controller/GuruController.php",
  data: {
    id:id,
    tipo:"eliminar_formacion"
  },
   beforeSend: function(objeto){
      
      $("#div_mensaje").show();
      $("#mensaje_respuesta").html("Mensaje: Cargando...");
    },
    
  success: function(datos){
    var tam = FORMACION.length
    for (var i = 0; i < tam; i++) {
      if (FORMACION[i].id == id) {
        FORMACION.splice(i, 1);
          break;
      }
  }
    Pintar_formaciones()
}
});

}

  function nueva_formacion(){
    $('#form_formacion_academica')[0].reset();
    $("#id_formacion").val("0")
  }

  function Adicionar_complementario(){
    $('#estudio_complementario')[0].reset();
    $("#id_complementario").val("0");
  }

  function Nueva_Experiencia(){
    $('#form_experiencia_laboral')[0].reset();
    $("#id_experiencia").val("0")
  }

  var IDIOMAS = []

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
          var forma={
            id:json.id,
            titulo:$("#idioma_desc").val()
          }
          IDIOMAS.push(forma)
          document.getElementById("Form_idioma").reset();
          Pintar_Idioma()
          $("#idioma_desc").hide()
      }
    });
    
    event.preventDefault();
  
    })


          
function Pintar_Idioma(){

var tam = IDIOMAS.length
var html = ""
for(var i = 0;i<tam;i++){
  html = html+'<li><p>'+IDIOMAS[i].titulo+'</p><button onclick="eliminar_Idioma('+IDIOMAS[i].id+')" type="button"><img src="img/eliminar.png"alt=""/></button></li>';
}
$("#lista_idioma").html(html)
}




    function eliminar_Idioma(id){

      $.ajax({
        type: "POST",
        url: "controller/GuruController.php",
        data: {
          id:id,
          tipo:"eliminar_idioma"
        },
        success: function(datos){
          var tam = IDIOMAS.length
          for (var i = 0; i < tam; i++) {
            if (IDIOMAS[i].id == id) {
              IDIOMAS.splice(i, 1);
                break;
            }
        }
        Pintar_Idioma()
      }
    });
    
    }

    var COMPLEMENTARIO=[]

  $( "#estudio_complementario" ).submit(function( event ) {
    //$('#btn_guardar').attr("disabled", true);
    
    var parametros = $(this).serialize();
    
    
    $.ajax({
        type: "POST",
        url: "controller/GuruController.php",
        data: parametros,
        success: function(datos){
          var json = JSON.parse(datos);
          $("#id_complementario").val(json.id)
          alert(json.mensaje)
          var forma={
            id:json.id,
            titulo:$("#titulo_complementario").val()
          }
          COMPLEMENTARIO.push(forma)
          Pintar_complementario()
          document.getElementById("cierracomplemento").style.display="none";
      }
    });
    
    event.preventDefault();
  
    })

    
function Pintar_complementario(){

var tam = COMPLEMENTARIO.length
var html = ""
for(var i = 0;i<tam;i++){
  html = html+'<li><p>'+COMPLEMENTARIO[i].titulo+'</p><button onclick="eliminar_complementario('+COMPLEMENTARIO[i].id+')" type="button"><img src="img/eliminar.png"alt=""/></button></li>';
}
$("#lista_complementarios").html(html)
}

    function eliminar_complementario(id){

      $.ajax({
        type: "POST",
        url: "controller/GuruController.php",
        data: {
          id:id,
          tipo:"eliminar_complementario"
        },
         beforeSend: function(objeto){
            
            $("#div_mensaje").show();
            $("#mensaje_respuesta").html("Mensaje: Cargando...");
          },
          
        success: function(datos){
          var tam = COMPLEMENTARIO.length
          for (var i = 0; i < tam; i++) {
            if (COMPLEMENTARIO[i].id == id) {
              COMPLEMENTARIO.splice(i, 1);
                break;
            }
        }
        Pintar_complementario()
      }
    });
    
    }

    var EXPERIENCIA = []

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
            var forma={
              id:json.id,
              titulo:$("#nombre_experiencia").val()
            }
            EXPERIENCIA.push(forma)
            Pintar_experiencia()
            document.getElementById("cierralaboral").style.display="none"
        }
      });
      
      event.preventDefault();
    
      })

      function Pintar_experiencia(){

        var tam = EXPERIENCIA.length
        var html = ""
        for(var i = 0;i<tam;i++){
          html = html+'<li><p>'+EXPERIENCIA[i].titulo+'</p><button onclick="eliminar_experiencia('+EXPERIENCIA[i].id+')" type="button"><img src="img/eliminar.png"alt=""/></button></li>';
        }
        $("#lista_experiencia").html(html)
      }
      


      function eliminar_experiencia(id){

        $.ajax({
          type: "POST",
          url: "controller/GuruController.php",
          data: {
            id:id,
            tipo:"eliminar_experiencia"
          },
           beforeSend: function(objeto){
              
              $("#div_mensaje").show();
              $("#mensaje_respuesta").html("Mensaje: Cargando...");
            },
            
          success: function(datos){
          
            var tam = EXPERIENCIA.length
          for (var i = 0; i < tam; i++) {
            if (EXPERIENCIA[i].id == id) {
              EXPERIENCIA.splice(i, 1);
                break;
            }
        }
        Pintar_experiencia()
        }
      });
      
      }


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