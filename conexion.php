<?php

//CONFIGURAR LAS CREDENCIALES DE ACCESO A LA BASE DE DATOS

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'estacionamiento';
$DATABASE_PORT = '3306';

//CONEXION A LA BASE DE DATOS...

$conexion = mysqli_connect($DATABASE_HOST,
 $DATABASE_USER,
 $DATABASE_PASS,
 $DATABASE_NAME);

if(mysqli_connect_error()){
    //SI SE ENCUENGRA UN ERROR EN LA BASE DE DATOS
    exit('Fallo en la conexion de MySQL: ' . mysqli_connect_error());
}else{
    //MENSAJE DE QUE LA CONEXION FUE EXITOSA..
    // echo "Conexion exitosa ";
}
?>