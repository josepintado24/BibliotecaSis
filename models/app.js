$(document).ready(function () {


    $('#search').keyup(function() {
        if($('#search').val()) {
            let search = $('#search').val();
            $.ajax({
                url: 'buscar_alumnos.php',
                data: {search:search},
                type: 'POST',
                success: function (response) {
                    console.log(response);
                }
            })
        }
  })

});