var $TABLA_USUARIOS = null
$(function () {
    ListarUsuarios()
});



function ListarUsuarios(){
    $TABLA_USUARIOS = $('#usuarios').DataTable({
        "processing": true,
            "serverSide": true,
            "searching": false,
            "bLengthChange": false,
        "ajax": {
            "url": './controller/usuariosController.php',
            "type": "POST",
            "data": function (d) {
                d.parametro = $("#filtro").val();
                //d.estado = $("#estado_aspirantes").val();
                return $.extend({}, d, {
                    "tipo": "LISTAR_USUARIOS",
                });
            }
        },
        "columns": [
            { "data": "id" },
            { "data": "nombre" },
            { "data": "documento" },
        {
            "data": "id",
            "orderable": false,
            "searchable": false,
            "width": "10%",
            "render": function (data, type, full, meta) {
                return "<a  type='button' href='aprobar.php?id="+data+"' class='btn btn-success'>Aprobar</a>";
        }
    },
    {
        "data": "id",
        "orderable": false,
        "searchable": false,
        "width": "10%",
        "render": function (data, type, full, meta) {
            return "<a  type='button' href='rechazar.php?id="+data+"' class='btn btn-danger'>Rechazar</a>";
    }
}
            
        ],
        "drawCallback": function (settings) {
            //Utils._BuilderModal();
        }
    })
}
