<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/registrar.css">
    <script src="scripts/js/funciones.js"></script>
    <title>Cajón en uso</title>
</head>

<body>
    <div class="wrapper">
        <div class="title">
            Registrar cliente
        </div>
        <form id="frmclientes" name="frmclientes">
            <div class="field">
                <input type="text" name="nombre" id="nombre" required>
                <label class="nombre-usuario">Nombre de Completo</label>
            </div>
            <div class="field">
                <input type="text" name="direccion" id="direccion" required>
                <label class="vehiculo">Direccion</label>
            </div>
            <div class="field">
                <input type="email" name="correo" id="correo" required>
                <label class="hora-salida">Correo Electronico</label>
            </div>
            <div class="field">
                <input type="tel" name="telefono" id="telefono" required>
                <label class="hora-salida">Telefono</label>
            </div>
            <div class="field">
                <input type="button" onclick="registrarCliente()" value="Registrar">
            </div>
        </form>
    </div>

<?php
include 'consultarcliente.php'
?>
    <script src="scripts/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
