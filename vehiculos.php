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
            Registrar vehiculo
        </div>
        <form id="frmvehiculos" name="frmvehiculos">
            <div class="field">
                <input type="text" name="matricula" id="matricula" required>
                <label class="nombre-usuario">Matricula</label>
            </div>
            <div class="field">
                <input type="text" name="Modelo" id="modelo" required>
                <label class="vehiculo">Modelo</label>
            </div>
            <div class="field">
                <input type="text" name="tipo" id="tipo" required>
                <label class="hora-salida">Tipo</label>
            </div>
            <div class="field">
                <label for="cliente">Cliente</label>
                <select id="cliente" name="cliente" required>
                    <?php
                    include "conexion.php";

                    $query = "SELECT id_cliente, nombre FROM cliente";
                    $result = mysqli_query($conexion, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='" . $row['id_cliente'] . "'>" . $row['nombre'] . "</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="field">
                <input type="button" onclick="registrarVehiculo()" value="Registrar">
            </div>
        </form>
    </div>
<?php
include 'consultarvehiculo.php'
?>
    <script src="scripts/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
