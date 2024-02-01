<?php
include 'conexion.php';
$id_cajon=$_POST['id_cajon'];
$numero=$_POST['numeroCajon'];
$status=$_POST['status'];

$query="UPDATE cajon SET numero='".$numero."', status='".$status."' WHERE id_cajon='".$id_cajon."'";

if($datos=mysqli_query($conexion,$query)){
    echo "Datos actualizados";
}else{
    echo "Error pa";
}

?>