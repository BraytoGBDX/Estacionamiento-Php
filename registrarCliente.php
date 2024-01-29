<?php
include "conexion.php";

    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

     $sql = "INSERT INTO cliente (nombre, direccion, correo, telefono) VALUES ('" . $nombre . "','" . $direccion . "','" . $correo . "','" . $telefono . "')";

    if ($datos = mysqli_query($conexion, $sql)) {
        echo "Datos guardados correctamente";
    } else {
        echo "Error, no se guardaron correctamente: " . mysqli_error($conexion);
    }
    
?>