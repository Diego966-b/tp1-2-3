$(document).ready(function() {
    $("#formulario").validate({
        rules: {
            lunes:{
                required: true,
                number: true,
                min: 0,
            },
            martes: {
                required: true,
                number: true,
                min: 0,
            },
            miercoles: {
                required: true,
                number: true,
                min: 0,
            },
            jueves: {
                required: true,
                number: true,
                min: 0,
            },
            viernes: {
                required: true,
                number: true,
                min: 0,
            },
        },
        messages: {
            lunes: {
                required: "Ingrese una hora",
                number: "Debe ingresar un numero",
                min: "El numero minimo es 0",
            }, 
            martes: {
                required: "Ingrese una hora",
                number: "Debe ingresar un numero",
                min: "El numero minimo es 0",
            },
            miercoles: {
                required: "Ingrese una hora",
                number: "Debe ingresar un numero",
                min: "El numero minimo es 0",
            },
            jueves: {
                required: "Ingrese una hora",
                number: "Debe ingresar un numero",
                min: "El numero minimo es 0",
            },
            viernes: {
                required: "Ingrese una hora",
                number: "Debe ingresar un numero",
                min: "El numero minimo es 0",
            },
        }
    });
});
