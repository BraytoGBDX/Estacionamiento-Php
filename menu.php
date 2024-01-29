<?php
//INICIAR SESION
session_start();
if (!isset($_SESSION['loggedin'])) {
    echo '<script languaje="javascript">alert("Tienes que acceder con tu usuario y contraseña");location.href="index.php";</script>';
    exit;
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="CSS/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="scripts/js/jquery.min.js"></script>
        <link rel="stylesheet" href="CSS/style.css">
        <script src="scripts/js/funciones.js"></script>
        <title>Sistema de control de Iot</title>
    </head>

    <body>
        <div class="sidenav">
            <a href="#">Inicio</a>
            <a href="#" onclick="cargarDiv('#contenido' ,'registrar.php');">Registro</a>
            <a href="#" onclick="cargarDiv('#contenido','cajones.php')">Cajones</a>
            <a href="#" onclick="cargarDiv('#contenido','clientes.php')">Clientes</a>
            <a href="#" onclick="cargarDiv('#contenido','vehiculos.php')">Vehiculos</a>
            <a href="#" onclick="cargarDiv('#contenido','tarifas.php')">Tarifas</a>
            <a href="#" onclick="cargarDiv('#contenido','encargados.php')">Encargados</a>
            <a href="#" onclick="cargarDiv('#contenido','reportes.php')">Reportes</a>
            <a href="#" onclick="salir();" class="w3-bar-item w3-button"><span class="material-simbols-outline">❌</span>Salir</a>
        </div>
        <div id="info" style="text-align: center;">
            <h1>Informacion del sistema BraytoGBDX</h1>
        </div>
        <div class="main">
            <!-- <h2>Bienvenido a mi primera conexion con PHP</h2> -->
        </div>
        <div id="contenido"></div>
    </body>
    <script src="scripts/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    </html>
<?php
}
?>