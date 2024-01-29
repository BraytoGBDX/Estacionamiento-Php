<?php
include 'conexion.php';
$idencargado = $_POST['id_encargado'];
$sql = "DELETE FROM encargado WHERE id_encargado ='".$idencargado."'";
if($datos = mysqli_query($conexion, $sql)){
    
    echo "Encargado eliminado correctamente";
}else{
    echo "Error al eliminar";
}
?>