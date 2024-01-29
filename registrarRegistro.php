<?php
include "conexion.php";

$fechaIngreso = $_POST['fechaIngreso'];
$horaIngreso = $_POST['horaIngreso'];
$fechaSalida = $_POST['fechaSalida'];
$horaSalida = $_POST['horaSalida'];
$idVehiculo = $_POST['vehiculo'];
$idCajon = $_POST['cajon'];
$idTarifa = $_POST['tarifa'];

$sql = "INSERT INTO registro (fechaIngreso, HoraIngreso, FechaSalida, HoraSalida, id_vehiculo, id_cajon, id_tarifa) VALUES ('$fechaIngreso', '$horaIngreso', '$fechaSalida', '$horaSalida', '$idVehiculo', '$idCajon', '$idTarifa')";

if ($datos = mysqli_query($conexion, $sql)) {
    echo "Registro de horas realizado correctamente";
} else {
    echo "Error, no se registró correctamente el registro de horas: " . mysqli_error($conexion);
}
?>
