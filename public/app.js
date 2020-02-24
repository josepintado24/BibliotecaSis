$(document).ready(function () {

    $('#resultadoAlumno').hide();
    $('#code_usuario').hide();
    $('#search').keyup(function() {
        if($('#search').val()) {
            let search = $('#search').val();
            $.ajax({
                url: './controllers/searchAlumno.php',
                data: {search:search},
                type: 'POST',
                success: function (response) {
                    console.log(response);
                    let alumnos = JSON.parse(response);
                    let templante='';
                   alumnos.forEach(alumnos=>{
                       templante+=`
                     <li><a href="#" class="alumno-item">${alumnos.nombre_alumno}</a></li>
                    `
                   })
                    $('#container').html(templante);
                    $('#resultadoAlumno').show();
                }
            })
        }

    })
    $('#resgitroAlumno_form').submit(function (e) {
        let code_usuario=$('#code_usuario_num').text();
        const postData={
            code_alumno:$('#code_alumno').val(),
            code_usuario:code_usuario

        };
        $.post('./controllers/insertReserva.php', postData,function (response) {
               console.log(response);
        });
        e.preventDefault();
    });

});