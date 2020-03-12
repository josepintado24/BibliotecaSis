$(document).ready(function() {
    var code_reserva, opcion;
    opcion = 4;

    tablaUsuarios = $('#contenidoReserva').DataTable({
        "ajax":{
            "url": "./controllers/setReserva.php",
            "method": 'POST', //usamos el metodo POST
            "data":{opcion:opcion}, //enviamos opcion 4 para que haga un SELECT
            "dataSrc":""
        },
        "language":spanishTable,
        "columns":[
            {"data":"code_reserva"},
            {"data":"nombre_alumno"},
            {"data":"code_alumno"},
            {"data":"fecha_reserva"},
            {"data":"turno"},
            {"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-danger btn-sm btnBorrar'><i class='fa fa-trash'></i></button></div></div>"}
        ]
    });

    var fila; //captura la fila, para editar o eliminar
//submit para el Alta y Actualización
    $('#frmReserva').submit(function(e){
        opcion = 1;
        code_usuario=1;
        e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
        code_alumno = $.trim($('#codeAlumno').val());

        $.ajax({
            url: "./controllers/setReserva.php",
            type: "POST",
            datatype:"json",
            data:  {code_alumno:code_alumno,opcion:opcion,code_usuario:code_usuario},
            success: function(data) {
                tablaUsuarios.ajax.reload(null, false);
                messageAlert(data);
                console.log(data);
                $('#frmReserva').trigger('reset');
            }
        });
    });



//Borrar
    $(document).on("click", ".btnBorrar", function(){
        fila = $(this);
        code_reserva = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;
        opcion = 3; //eliminar
        var respuesta = confirm("¿Está seguro de cancelar reserva "+code_reserva+"?");
        if (respuesta) {
            $.ajax({
                url: "./controllers/setReserva.php",
                type: "POST",
                datatype:"json",
                data:  {opcion:opcion, code_reserva:code_reserva},
                success: function() {
                    tablaUsuarios.row(fila.parents('tr')).remove().draw();
                }
            });
        }
    });


});


var messageAlert=function(response){
    let templante;
    if(response==0){
        templante=`
                     <div class="alert alert-success col-lg-7 col-md-7">
                        Alumno registrado
                    </div>
                    `;
    }
    else if (response==1){
        templante=`
                     <div class="alert alert-info col-lg-7 col-md-7"" role="alert">
                        Código duplicado, denegados
                    </div>
                    `;
    }
    else if (response==-1){
        templante=`
                     <div class="alert alert-warning col-lg-7 col-md-7" role="alert">
                       No existe código
                    </div>
                    `;
    }
    $('#mensaje-envio').show();
    $('#mensaje-envio').html(templante);
    setTimeout(function() {
        $("#mensaje-envio").fadeOut(1500);
    },1000);

}

var spanishTable={
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