/*
<!-- Ejercicio 4
Diseñar un formulario que permita cargar las películas de la empresa Cinem@s. La lista géneros
tiene los siguientes datos: Comedia, Drama, Terror, Románticas, Suspenso, Otras.
Aplicar Bootstrap y validar los siguiente:
- El año debe ser un campo que debe permitir ingresar como máximo 4 caracteres y solo
aceptar números.
- El campo duración debe permitir un máximo de 3 números.
- Todos los datos son obligatorios
- Al hacer click en el botón “Enviar”, se deberán mostrar todos los datos ingresados en el
formulario.
- El botón “Borrar” debe limpiar el formulario.
El diseño del formulario completo es el siguiente:
-->
*/
$(document).ready(function() {
    $("#formulario").validate({
        rules: {
            titulo: "required",
            actores: "required",
            produccion: "required",
            director: "required",
            guion: "required",
            anio: {
                number: true,
                required: true,
                minlength: 4,
                min: 1900,
                max: 2023
            },
            nacionalidad: "required",
            genero: "required",
            duracion: {
                number: true,
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
            anio:{
                number: "El año debe ser un numero",
                required: "Ingrese el año",
                minlength: "La longitud minima es 4 caracteres",
                min: "El año debe ser mayor a 1900",
                max: "El año no puede ser mayor al actual",
            }, 
            duracion: {
                number: "La duracion debe ser un numero",
                required: "Ingrese la duracion",
                maxlength: "La pelicula dura mucho",
                min: "Debe durar por lo menos 1 minuto",
            },
            nacionalidad: "Ingrese una nacionalidad",
            restriccionesEdad: "Ingrese 1 opcion",
        }
    });
});