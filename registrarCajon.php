<?php
include "conexion.php";

$numeroCajon = $_POST['numeroCajon'];
$status = $_POST['status'];

$sql = "INSERT INTO cajon (numero, status) VALUES ('$numeroCajon', '$status')";

if ($datos = mysqli_query($conexion, $sql)) {
    echo "Cajón registrado correctamente";
} else {
    echo "Error, no se registró correctamente el cajón: " . mysqli_error($conexion);
}
?>
