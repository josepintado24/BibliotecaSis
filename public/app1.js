$(document).ready(function() {

    list();
} );
$('#btn_listar').on("click",function () {
    list();
})

var list =function () {
    var table=$('#contenidoReserva').DataTable({
        "destroy":true,
        "ajax":{
            "method":"POST",
            'url':"./controllers/listAlumno.php"
        },
        "language":spanish,
        "columns":[
            {"data":"code_alumno"},
            {"data":"code_alumno"},
            {"data":"fecha_reserva"},
            {"data":"estado_reserva"},
            {"data":"code_usuario"},
            {"data":"code_reserva"},
            {"defaultContent": "<button type='button' class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminar' ><i class='fa fa-trash'></i></button>"}
        ]
    });
    obtener_id_eliminar("#contenidoReserva tbody",table)
}
var obtener_id_eliminar=function (tbody, table) {
    $(tbody).on("click", "button.eliminar",function () {
        var data=table.row($(this).parents("tr")).data();
        var code_reserva=$("#frmEliminarReserva #code_reserva").val(data.code_reserva);
    })
}

var spanish={
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla =(",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
    }
}