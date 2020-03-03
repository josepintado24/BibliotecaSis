$(document).ready(function() {
    $('#resultadoAlumno').hide();
    $('#code_usuario').hide();
    list();
    saveReserva();
    cancelReserva();
} );

var saveReserva=function () {
    $('form').on("submit",function (e) {
        e.preventDefault();
        const postData={
            code_alumno:$('#code_alumno').val(),
            code_usuario:$('#code_usuario_num').text(),
            options:$('#guardarReserva').val()
        };
        console.log(postData);
        $.ajax({
            method: 'POST',
            url:'./controllers/setReserva.php',
            data:postData
        }).done(function (info) {
            var json_info=JSON.parse(info);
            list();
            messageAlert(info);
            $('#resgitroAlumno_form').trigger('reset');
        })
    });

}

var cancelReserva=function () {
    $('#cancelReserva').on("click",function (e) {
        const postData={
            code_reserva:$('#frmEliminarReserva #code_reserva').val(),
            options:$('#frmEliminarReserva #opcion').val()
        };
        console.log(postData);
        $.ajax({
            method: 'POST',
            url:'./controllers/setReserva.php',
            data:postData
        }).done(function (info) {

            list();
        })
    });
}
var messageAlert=function(response){
    let templante;
    if(response==0){
        templante=`
                     <div class="alert alert-success col-lg-7 col-md-7">
                        <a href="#" class="alert-link">Alumno registrado</a>
                    </div>
                    `;
    }
    else if (response==1){
        templante=`
                     <div class="alert alert-info col-lg-7 col-md-7"" role="alert">
                        <a href="#" class="alert-link">Código duplicado, denegado</a>
                    </div>
                    `;
    }
    else if (response==-1){
        templante=`
                     <div class="alert alert-warning col-lg-7 col-md-7" role="alert">
                        <a href="#" class="alert-link">No existe código</a>
                    </div>
                    `;
    }
    $('#mensaje-envio').show();
    $('#mensaje-envio').html(templante);
    setTimeout(function() {
        $("#mensaje-envio").fadeOut(1500);
    },1000);

}
var list =function () {
    var table=$('#contenidoReserva').DataTable({
        "destroy":true,
        "ajax":{
            "method":"POST",
            'url':"./controllers/listReserva.php"
        },
        "language":spanishTable,
        "columns":[
            {"data":"nombre_alumno"},
            {"data":"code_alumno"},
            {"data":"fecha_reserva"},
            {"data":"turno"},
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