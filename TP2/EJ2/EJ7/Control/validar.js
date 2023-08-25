$(document).ready(function() {
    $("#formulario").validate({
        rules: {
            num1: {
                required: true,
                number: true,
            },
            num2: {
                required: true,
                number: true,
            },
        },
        messages: {
            num1: {
                required: "Ingrese un numero",
                number: "Debe ingresar un numero",
            },
            num2: {
                required: "Ingrese un numero",
                number: "Debe ingresar un numero",
            }
        }
    });
});
