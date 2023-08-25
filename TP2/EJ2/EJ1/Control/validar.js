$(document).ready(function() {
    $("#formulario").validate({
        rules: {
            numeroForm: {
                required: true,
                number: true,
            },
        },
        messages: {
            numeroForm: {
                required: "Ingrese un numero",
                number: "Debe ingresar un numero",
            }
        }
    });
});
