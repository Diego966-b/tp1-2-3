$(document).ready(function() {
    $("#formulario").validate({
        rules: {
            estudiante: {
                required: true,
            },
            edad: {
                required: true,
                number: true,
            },
        },
        messages: {
            estudiante: {
                required: "Este campo es obligatorio",
            },
            edad: {
                required: "Este campo es obligatorio",
                number: "Debe ingresar un numero",  
            }
        }
    });
});
