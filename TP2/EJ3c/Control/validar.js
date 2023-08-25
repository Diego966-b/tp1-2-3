$(document).ready(function() {
    $("#formulario").validate({
        rules: {
            usuario: {
                required: true
            },
            contrasena: {
                required: true,
                minlength: 8,
                notEqualTo: "#usuario",
                alphanumeric: true
            }
        },
        messages: {
            usuario: "Ingrese el nombre de usuario",
            contrasena: {
                required: "Ingrese la contraseña",
                minlength: "La contraseña debe tener al menos 8 caracteres",
                notEqualTo: "La contraseña no puede ser igual al nombre de usuario",
                alphanumeric: "La contraseña debe contener letras y números"
            }
        }
    });

    $.validator.addMethod("alphanumeric", function(value, element) {
        return this.optional(element) || /^(?=.*[a-zA-Z])(?=.*\d).+$/.test(value);
    }, "La contraseña debe contener letras y números");
    
    $.validator.addMethod("notEqualTo", function(value, element, param) {
        return this.optional(element) || value !== $(param).val();
    }, "Por favor, elige una contraseña diferente al nombre de usuario");
});
