$(document).ready(function() {
    $("#formulario").validate({
        rules: {
            titulo: "required",
            actores: "required",
            produccion: "required",
            director: "required",
            guion: "required",
            miArchivo: "required",
            anio: {
                required: true,
                minlength: 4,
                min: 1900,
                max: 2023
            },
            nacionalidad: "required",
            genero: "required",
            duracion: {
                required: true,
                maxlength: 3,
                min: 0,
            },
            restriccionesEdad: "required"
        },
        messages: {
            titulo: "Ingrese el titulo", 
            actores: "Ingrese el actor",
            produccion: "Ingrese la produccion",
            director: "Ingrese el director",
            guion: "Ingrese el guion",
            miArchivo: "Ingrese la portada",
            anio:{
                required: "Ingrese el año",
                minlength: "La longitud minima es 4 caracteres",
                min: "El año debe ser mayor a 1900",
                max: "El año no puede ser mayor al actual",
            }, 
            duracion: {
                required: "Ingrese la duracion",
                maxlength: "Dura mucho",
                min: "Debe durar por lo menos 1 minuto",
            },
            nacionalidad: "Ingrese una nacionalidad",
            restriccionesEdad: "Ingrese 1 opcion",
        }
    });

    $(document).ready(function () {
        $('#anio').on('input', function() {
          var anio = $('#anio').val();
          var numericValue = anio.replace(/[^0-9]/g, '');
          $(this).val(numericValue);
        });
      });
});