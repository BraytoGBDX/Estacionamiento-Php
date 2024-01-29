<?php
include "conexion.php";

$matricula = $_POST['matricula'];
$modelo = $_POST['modelo'];
$tipo = $_POST['tipo'];
$idCliente = $_POST['cliente'];

$sql = "INSERT INTO vehiculos (matricula, modelo, tipo, id_cliente) VALUES ('$matricula', '$modelo', '$tipo', '$idCliente')";

if ($datos = mysqli_query($conexion, $sql)) {
    echo "Vehículo registrado correctamente";
} else {
    echo "Error, no se registró correctamente el vehículo: " . mysqli_error($conexion);
}
?>
