<?php
include "conexion.php";

$nombreTarifa = $_POST['tarifa'];
$monto = $_POST['monto'];

$sql = "INSERT INTO tarifa (tarifa, monto) VALUES ('$nombreTarifa', '$monto')";

if ($datos = mysqli_query($conexion, $sql)) {
    echo "Tarifa registrada correctamente";
} else {
    echo "Error, no se registró correctamente la tarifa: " . mysqli_error($conexion);
}
?>
