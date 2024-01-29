<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/registrar.css">
</head>

<body>
    <div class="wrapper">
        <div class="title">
           Agregar tarifa
        </div>
        <form name="frmtarifas" id="frmtarifas">
            <div class="field">
                <input type="text" name="tarifa" id="tarifa" required>
                <label class="hora-salida">Nombre de la tarifa</label>
            </div>
            <div class="field">
                <input type="text" name="monto" id="monto" required>
                <label class="vehiculo">Monto $0.00</label>
            </div>
            <div class="field">
            <input type="button" onclick="registrarTarifa()" value="Registrar">
            </div>
        </form>
    </div>

<?php
include 'consultartarifa.php'
?>
    <script src="scripts/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
