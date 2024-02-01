<?php
include 'conexion.php';
$id_cliente=$_POST['id_cliente'];
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];

$query="UPDATE cliente SET nombre='".$nombre."', direccion='".$direccion."', correo='".$correo."', telefono='".$telefono."' WHERE id_cliente='".$id_cliente."'";

if($datos=mysqli_query($conexion,$query)){
    echo "Datos actualizados";
}else{
    echo "Error pa";
}

?>