<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/registrar.css">
    <title>Cajón en uso</title>
</head>

<body>
    <div class="wrapper">
        <div class="title">
           Agregar cajón
        </div>
        <form name="frmcajones" id="frmcajones">
            <div class="field">
                <input type="text" name="numeroCajon" id="numeroCajon" required>
                <label class="hora-salida">Numero de cajón</label>
            </div>
            <div class="field">
                <input type="text" name="status" id="status" required>
                <label class="vehiculo">Estatus</label>
            </div>
            <div class="field">
            <input type="button" onclick="registrarCajon()" value="Registrar">
            </div>
        </form>
    </div>
<?php
include 'consultarcajon.php'
?>
    <script src="scripts/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
