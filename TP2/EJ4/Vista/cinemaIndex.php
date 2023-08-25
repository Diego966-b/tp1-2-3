<?php
?>
<!DOCTYPE html>
<html lang="en">
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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Cinem@s</title>
</head>

<body>
    <div class="container">
        <h4 class="text-primary">Cinem@as</h4>
        <form name="formulario" id="formulario" class="row g-3" action="../Control/cinemaValidar.php" method="post">
            <div class="col-md-6">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo">
            </div>
            <div class="col-md-6">
                <label for="actores" class="form-label">Actores</label>
                <input type="text" class="form-control" id="actores" name="actores">
            </div>
            <div class="col-md-6">
                <label for="director" class="form-label">Director</label>
                <input type="text" class="form-control" id="director" name="director">
            </div>
            <div class="col-md-6">
                <label for="guion" class="form-label">Guion</label>
                <input type="text" class="form-control" id="guion" name="guion">
            </div>
            <div class="col-md-6">
                <label for="produccion" class="form-label">Produccion</label>
                <input type="text" class="form-control" id="produccion" name="produccion">
            </div>
            <div class="col-md-2">
                <label for="anio" class="form-label">Año</label>
                <input type="text" class="form-control" id="anio" name="anio">
            </div>
            <div class="col-md-6">
                <label for="nacionalidad" class="form-label">Nacionalidad</label>
                <input type="text" class="form-control" id="nacionalidad" name="nacionalidad">
            </div>
            
            <div class="col-md-2 .mt-20">
                <label for="genero" class="form-label">Genero</label>
                <select class="form-select" id="genero" name="genero">
                    <option value="accion" name="accion" id="accion">Accion</option>
                    <option value="fantasia" name="fantasia" id="fantasia">Fantasia</option>
                    <option selected value="comedia" name="comedia" id="comedia">Comedia</option>
                    <option value="terror" name="terror" id="terror">Terror</option>
                    <option value="romanticas" name="romanticas" id="romanticas">Románticas</option>
                    <option value="suspenso" name="suspenso" id="suspenso">Suspenso</option>
                    <option value="otras" name="otras" id="otras">Otras</option>
                </select>
            </div>

            <div class="col-md-3">
                <label for="duracion" class="form-label">Duracion (min)</label>
                <input type="text" class="form-control" id="duracion" name="duracion">
            </div>

            <div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="restriccionesEdad" id="todoPublico" value="Todo Publico">
                <label class="form-check-label" for="todoPublico">Todo Publico</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="restriccionesEdad" id="mayor7" value="Mayores de 7 años">
                <label class="form-check-label" for="mayor7">Mayores de 7 años</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="restriccionesEdad" id="mayor18" value="Mayores de 18 años">
                <label class="form-check-label" for="mayor18">Mayores de 18 años</label>
            </div>
            </div>



            <div class="mb-3">
                <label for="sinopsis" class="form-label">Sinopsis</label>
                <textarea class="form-control" id="sinopsis" name="sinopsis" rows="3"></textarea>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <input type="submit" class="btn btn-primary me-md-2" value="Enviar">
                <input type="reset" class="btn btn-danger" value="Borrar">
            </div>
        </form>

    </div>

    </div>

    <style>
        .container {
            width: 100%;
            height: 600px;
        }
    </style>
    <!-- Jqery y jquery validation -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../Control/validar.js"></script>
</body>

</html>