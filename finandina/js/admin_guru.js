var $TABLA_GURU = null;

$(function() {

    TablaGuru();

});

function RecargarTabla() {
    if ($TABLA_GURU != null)
        $TABLA_GURU.draw();
    return false;
}


function TablaGuru() {
    $TABLA_GURU = $("#tabla_guru").DataTable({
        "processing": true,
        "serverSide": true,
        "searching": false,
        "bLengthChange": false,
        "order": [
            [0, "desc"]
        ],
        "ajax": {
            "url": "controller/admin_guruController.php",
            "type": "POST",
            "data": function(d) {
                d.tipo = "LISTAR_GURUS";
            }
        },
        "columns": [{
                "data": "nombre",
                "render": function(data, type, full, meta) {
                    return data;
                }
            }, {
                "data": "fecha_creacion",
                "render": function(data, type, full, meta) {
                    return data;
                }
            },
            {
                "data": "id",
                "orderable": false,
                "searchable": false,
                "width": "10%",
                "render": function(data, type, full, meta) {

                    var idEstado = full.estadoid

                    var botones = "<div class='btn-group'><a data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' class='p-0 btn'>" +
                        "Acciones <i class='fa fa-angle-down ml-2 opacity-8'></i>" +
                        "</a><div tabindex='-1' role='menu' aria-hidden='true' class='dropdown-menu dropdown-menu-right'><a class='dropdown-item' onclick='Descargar_Excel(" + full.id +
                        ")' type='button'>Descargar Excel</a>"

                    var botones = botones + "<button type='button' tabindex='0' class='dropdown-item'  data-toggle='modal' onclick='Adjuntos(" + full.id +
                        ")' type='button' >Descargar Adjuntos</button><div tabindex='-1' ></div>" +
                        "<div tabindex='-1' ></div>"
                    botones = botones + "</div></div>";
                    return botones;
                }
            }
        ]
    });
}



function descargar_ExcelAll() {
    window.open("controller/generateexcelAllController.php?tipo=generar", '_blank');
}

function descargar_ExcelAll2() {
    window.open("controller/generateexcelAllController2.php?tipo=generar", '_blank');
}

function Descargar_Excel(id) {
    window.open("controller/generateexcelController.php?tipo=generar&id=" + id, '_blank');
}

function Adjuntos(id) {
    $.ajax({
        type: "POST",
        url: "controller/admin_guruController.php",
        data: {
            id: id,
            tipo: "ADJUNTOS"
        },
        success: function(datos) {
            var json = JSON.parse(datos);
            if (json.status == "success") {
                var tam = json.data.length
                for (var i = 0; i < tam; i++) {
                    window.open(json.data[i]);
                }
            } else {
                alert(json.mensaje);
            }
        }
    });
}