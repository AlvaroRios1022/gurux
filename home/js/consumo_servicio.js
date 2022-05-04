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
                                    "<a href=''>"+
                                        "<li style='color: #333;' value="+v.name+">"+v.name+"</li>"
                                    "</a>"+
                                "</td>"+
                            "</tr>"
                });
                $( rows ).appendTo( "#items_pasalapagina tbody" );
            }
    });
})