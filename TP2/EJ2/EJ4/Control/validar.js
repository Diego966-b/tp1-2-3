$(document).ready(function() {
    $.validator.addMethod("soloLetras", function(value, element) {
        return this.optional(element) || /^[a-zA-Z\sáéíóúÁÉÍÓÚñÑüÜ]+$/i.test(value);
    }, "Solo se permiten letras en este campo");
    $("#formulario").validate({
        rules: {
            nombre: {
                required: true,
                soloLetras: true,
            },
            apellido: {
                required: true,
                soloLetras: true,
            },
            edad: {
                required: true,
                number: true,
                min: 0,
            },
            direccion: {
                required: true,
            }
        },
        messages: {
            nombre: {
                required: "Este campo es obligatorio",
            },
            apellido: {
                required: "Este campo es obligatorio",
            },
            edad: {
                required: "Este campo es obligatorio",
                number: "La edad debe ser un numero",
                min: "La edad debe ser mayor a 0"
            },
            direccion: {
                required: "Este campo es obligatorio",
            },
        }
    });
});
