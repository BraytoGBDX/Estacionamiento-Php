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
$idcajon=$_POST['id_cajon'];
$query="SELECT * FROM cajon WHERE id_cajon='".$idcajon."'";
$ejecutar=$conexion->query($query);
while($result=$ejecutar->fetch_array())
{
    ?>
    <br>
    <div class="wrapper">
        <div class="title">
           Editar cajón
        </div>
        <form name="frmcajones" id="frmcajones">
            <div class="field">
                <input type="text" name="numeroCajon" id="numeroCajon" value="<?php echo $result['numero'] ?>" required>
                <label class="hora-salida">Numero de cajón</label>
            </div>
            <div class="field">
                <input type="text" name="status" id="status" value="<?php echo $result['status'] ?>" required>
                <label class="vehiculo">Estatus</label>
            </div>
            <div class="field">
            <input type="button" onclick="modificarCajon(<?php echo $result['id_cajon'] ?>)" value="Actualizar">
            </div>
        </form>
    </div>
    
<?php
}
?>