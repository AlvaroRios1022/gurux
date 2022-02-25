
var LISTA_GURUS = []
var LISTA_GURUS_TEMP = []
var TIPO_GURU =""
$( document ).ready(function() {

    $.ajax({
        type: "POST",
        url: "controller/GuruHomeController.php",
        data:  {tipo:"ALLGURUS"},  
        success: function(datos){
            LISTA_GURUS = JSON.parse(datos)
            LISTA_GURUS_TEMP = LISTA_GURUS
            Pintar_Gurus();
    }
    });
event.preventDefault();
})


function Pintar_Gurus(){
    var html =""
    LISTA_GURUS_TEMP = LISTA_GURUS
    $.each(LISTA_GURUS_TEMP, function (index, v) {
        
        //if(v.medicina){
            if(v.medicina ==TIPO_GURU || TIPO_GURU == ''){
            html = html +  "<div class='prod-grid3' style='margin-top:25px;height: 180px;'>"+
            "<img class='imgredonguru' src='"+v.url_image+"' alt='kalita'>"+
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
                    "<h7 style='margin-left:4%; color:#82142C'>Leer más ><h7>"+
                "</p>"+
            "</div>"+
            "<div class=' bloqueguru3' style=' background-color:#C8D3E5; ' >"+
                "<p class='textopguru' style='margin-top:-10px; font-size:85%' > TARIFA:"+
                "<img src='img/categorias/en linea/barra.png' style='width:2px; height:50px; margin-top:20px' alt='kalita'> Tiempo de Consulta: </p>"+
                "<p class='textopguru'  style='margin-bottom:10px; margin-top:-40px; font-size:15px'> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>"+
            "</div>"+
        "</div>";
            }
        //}

        
    });

   
                    html = html+   "<div class='prod-grid3' style='margin-top:25px'></div><div class='prod-grid3 ' style='margin-top:25px'></div><P style='margin-left:64%;  padding-top:10px; color:#FFF; background-color:#BFBFBF; height:50px; font-size:100%'>&nbsp;&nbsp;&nbsp;&nbsp;VER TODOS LOS GÚRUS >&nbsp;&nbsp;&nbsp;&nbsp;<P>"

                    $("#div_gurus").html(html)


}

function filtroTipo(tipo){
    TIPO_GURU = tipo;
    Pintar_Gurus();
}