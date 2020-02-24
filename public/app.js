$(document).ready(function () {

    $('#resultadoAlumno').hide();
    $('#search').keyup(function() {
        if($('#search').val()) {
            let search = $('#search').val();
            $.ajax({
                url: './models/searchAlumno.php',
                data: {search:search},
                type: 'POST',
                success: function (response) {
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
    $('#resgitroAlumno').submit(function (e) {
        let code_usuario=$('#code_usuario').text();
        console.log(code_usuario);

        e.preventDefault();
    })

});