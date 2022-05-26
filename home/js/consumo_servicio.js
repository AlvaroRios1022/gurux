$( document ).ready(function() {

    $.ajax({
        type: "GET",
        url: "https://apistaging.pasalapagina.com/api/home/blocks/categories",
            success: function(datos){
                var rows = "";
               
                $.each(datos.data, function(index, v){
                    console.log(v)
                    rows += "<tr>"+
                                "<td>"+
                                    "<a href='https://staging.pasalapagina.com/guruxy.controller/check-access.html#"+v.name+"'>"+
                                        "<li style='color: #fff;' value="+v.name+">"+v.name+"</li>"
                                    "</a>"+
                                "</td>"+
                            "</tr>"
                });
                $( rows ).appendTo( "#items_pasalapagina tbody" );
            }
    });
}) 