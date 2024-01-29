<?php
include 'conexion.php';
$idregistro = $_POST['id_registro'];
$sql = "DELETE FROM registro WHERE id_registro ='".$idregistro."'";
if($datos = mysqli_query($conexion, $sql)){
    
    echo "Registro eliminado correctamente";
}else{
    echo "Error al eliminar";
}
?>