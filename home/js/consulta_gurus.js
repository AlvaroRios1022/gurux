
var LISTA_GURUS = []
var LISTA_GURUS_TEMP = []
var TIPO_GURU =""
var CIUDAD = ""
var RANGO_INICIAL = ""
var RANGO_FINAL = ""
var IDIOMA = ""
var PAIS = ""


$( document ).ready(function() {

    var filtro = $("#filtro").val()
    $.ajax({
        type: "POST",
        url: "controller/GuruHomeController.php",
        data:  {tipo:"ALLGURUS",
                filtro:filtro},  
        success: function(datos){
            LISTA_GURUS = JSON.parse(datos)
            LISTA_GURUS_TEMP = LISTA_GURUS
            Pintar_Gurus();
    }
    });
event.preventDefault();
})


$(document).ready(function(){
    $("#buscador").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      console.log(value)
      $("#myTable tr").filter(function() {
          console.log(value)
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });


function Pintar_Gurus(){
    var html =""
 
    LISTA_GURUS_TEMP = LISTA_GURUS
    var contador = 0;
    $.each(LISTA_GURUS_TEMP, function (index, v) {
            if((v.medicina ==TIPO_GURU || TIPO_GURU == '') && (v.ciudad == CIUDAD || CIUDAD == '' )
            && ((RANGO_INICIAL < v.precio && v.precio < RANGO_FINAL) || (RANGO_INICIAL == '' || RANGO_FINAL == '') )
            && (v.idioma == IDIOMA || IDIOMA == "" ) &&( v.pais == PAIS || PAIS == "")
            ){
            html = html +  "<div class='prod-grid3' style='margin-top:25px;height: 180px;'>"+
            "<a href='https://guruxy.com/home/guru.php'><img class='imgredonguru' src='"+v.url_image+"' alt='kalita'></a>"+
              "<img src='img/categorias/en linea/1m.png' alt='kalita'>"+
              "<div class='bloqueguru bloqueguru2'>"+
                "<h5 style=' margin-right: 45px'>"+v.nombre+" </h5>"+
                "<form>"+
                    "<p class='clasificacion'>"+
                        "<input id='radio1' type='radio' name='estrellas' value='5'>"+
                        "<label for='radio1'>★</label>"+
                        "<input id='radio2' type='radio' name='estrellas' value='4'>"+
                        "<label for='radio2'>★</label>"+
                        "<input id='radio3' type='radio' name='estrellas' value='3'>"+
                        "<label for='radio3'>★</label>"+
                        "<input id='radio4' type='radio' name='estrellas' value='2'>"+
                        "<label for='radio4'>★</label>"+
                        "<input id='radio5' type='radio' name='estrellas' value='1'>"+
                        "<label for='radio5'>★</label>"+
                    "</p>"+
                "</form>"+
                "<p class='textopguru'>Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>"+
                "<p class='textopguru2'>IDIOMAS  "+
                    "<img style='width:20px' src='img/categorias/en linea/b1.png' alt='kalita'>"+
                    "<img style='width:20px' src='img/categorias/en linea/b2.png' alt='kalita'>"+
                    "<img style='width:20px' src='img/categorias/en linea/b3.png' alt='kalita'>"+
                    "<a href='https://guruxy.com/home/guru.php'><h7 style='margin-left:4%; color:#82142C'>Leer más<h7></a>"+
                "</p>"+
            "</div>"+
            "<div class=' bloqueguru3' style=' background-color:#C8D3E5; ' >"+
                "<p class='textopguru' style='margin-top:-10px; font-size:85%' > TARIFA:"+
                "<img src='img/categorias/en linea/barra.png' style='width:2px; height:50px; margin-top:20px' alt='kalita'> Tiempo de Consulta: </p>"+
                "<p class='textopguru'  style='margin-bottom:10px; margin-top:-40px; font-size:15px'> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>"+
            "</div>"+
        "</div>";
        contador ++;
            }
            

    });

    for(var i = contador; i<27 ;i++){
        html = html +  "<div class='prod-grid3' style='margin-top:25px;height: 180px;'>"+
        "<img class='imgredonguru' src='img/avatar.png' alt='kalita'>"+
          "<a href='https://guruxy.com/gurus/'><img src='img/categorias/en linea/1m.png' alt='kalita'></a>"+
          "<div class='bloqueguru bloqueguru2'>"+
            "<h5 style=' margin-right: 45px'> </h5>"+
            "<form>"+
                "<p class='clasificacion'>"+
                    "<input id='radio1' type='radio' name='estrellas' value='5'>"+
                    "<label for='radio1'>★</label>"+
                    "<input id='radio2' type='radio' name='estrellas' value='4'>"+
                    "<label for='radio2'>★</label>"+
                    "<input id='radio3' type='radio' name='estrellas' value='3'>"+
                    "<label for='radio3'>★</label>"+
                    "<input id='radio4' type='radio' name='estrellas' value='2'>"+
                    "<label for='radio4'>★</label>"+
                    "<input id='radio5' type='radio' name='estrellas' value='1'>"+
                    "<label for='radio5'>★</label>"+
                "</p>"+
            "</form>"+
            "<p class='textopguru'>Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>"+
            "<p class='textopguru2'>IDIOMAS  "+
                "<img style='width:20px' src='img/categorias/en linea/b1.png' alt='kalita'>"+
                "<img style='width:20px' src='img/categorias/en linea/b2.png' alt='kalita'>"+
                "<img style='width:20px' src='img/categorias/en linea/b3.png' alt='kalita'>"+
                "<h7 style='margin-left:4%; color:#82142C'>Leer más ><h7>"+
            "</p>"+
        "</div>"+
        "<div class=' bloqueguru3' style=' background-color:#C8D3E5; ' >"+
            "<p class='textopguru' style='margin-top:-10px; font-size:85%' > TARIFA:"+
            "<img src='img/categorias/en linea/barra.png' style='width:2px; height:50px; margin-top:20px' alt='kalita'> Tiempo de Consulta: </p>"+
            "<p class='textopguru'  style='margin-bottom:10px; margin-top:-40px; font-size:15px'> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>"+
        "</div>"+
    "</div><br><br><br>"+
    "</div><br><br><br>";
    ;
    }
  
   
                    html = html+   "<P style='margin-left:64%;  padding-top:10px; color:#FFF; background-color:#BFBFBF; height:50px; font-size:100%'>&nbsp;&nbsp;&nbsp;&nbsp;VER TODOS LOS GÚRUS >&nbsp;&nbsp;&nbsp;&nbsp;<P>"

                    $("#div_gurus").html(html)

}

function filtroTipo(tipo){
    TIPO_GURU = tipo;
    Pintar_Gurus();
}


function change_ciudad(ciudad){
    
    CIUDAD =ciudad;
    Pintar_Gurus();
}

function change_rango_precios(e){
    var value_rango = e.value;
    var array_rango = value_rango.split("-");

    RANGO_INICIAL =array_rango[0];
    RANGO_FINAL=array_rango[1];
    Pintar_Gurus();
}

function change_idioma(e){
    IDIOMA = e.value;
    Pintar_Gurus();
}

function change_pais(e){
    PAIS = e.value;
    Pintar_Gurus();
}