<br>
<h2>Actualizar cliente</h2>
<hr>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/registrar.css">
    <script src="scripts/js/funciones.js"></script>
    <title>Cajón en uso</title>
</head>
<?php
include 'conexion.php';
$idcliente=$_POST['id_cliente'];
$query="SELECT * FROM cliente WHERE id_cliente='".$idcliente."'";
$ejecutar=$conexion->query($query);
while($result=$ejecutar->fetch_array())
{
    ?>
    <br>
    <div class="wrapper">
        <div class="title">
            Registrar cliente
        </div>
        <form id="frmclientes" name="frmclientes">
            <div class="field">
                <input type="text" name="nombre" id="nombre" value="<?php echo $result['nombre'] ?>" required>
                <label class="nombre-usuario">Nombre de Completo</label>
            </div>
            <div class="field">
                <input type="text" name="direccion" id="direccion" value="<?php echo $result['direccion'] ?>" required>
                <label class="vehiculo">Direccion</label>
            </div>
            <div class="field">
                <input type="email" name="correo" id="correo" value="<?php echo $result['correo'] ?>" required>
                <label class="hora-salida">Correo Electronico</label>
            </div>
            <div class="field">
                <input type="tel" name="telefono" id="telefono" value="<?php echo $result['telefono'] ?>" required>
                <label class="hora-salida">Telefono</label>
            </div>
            <div class="field">
                <input type="button" onclick="modificarCliente(<?php echo $idcliente ?>)" value="Actualizar">
            </div>
        </form>
    </div>
<?php
}
?>