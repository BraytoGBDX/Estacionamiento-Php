<?php
//INCLUIR UNA CONEXION A LA BASE DE DATOS
    include 'conexion.php';
    session_start();
    echo $_POST['usuario'];
if (!isset($_POST['usuario'], $_POST['contrasena'])){
    //SI NO HAY DATOS MUESTRA ERROR Y REDIRECCIONA..
    header('Location: index.php');
}
if($stmt = $conexion -> prepare('SELECT usuario, contrasena FROM encargado WHERE usuario = ?')){
    //PARAMETROS DE ENLACE DE LA CADENA S

    $stmt->bind_param('s', $_POST['usuario']);
    $stmt->execute();
};

// SE VALIDA SI LOS DATOS INGRESADOS COINCIDEN CON LA BASE DE DATOS..
$stmt->store_result();
if($stmt->num_rows>0){
    $stmt->bind_result($usuario,$contrasena);
    $stmt->fetch();
    if($_POST['contrasena']===$contrasena){
        //iniciamos sesion para el usuario..
        session_regenerate_id();
        $_SESSION['loggedin']=TRUE;
        $_SESSION['name']=$_POST['usuario'];
        $_SESSION['id']=$id;
        header('location:menu.php');
    }else{
        echo '<script languaje="javascript">alert("contraseña incorrecta"); location.href=menu.php;</script>';
    }
}else{
    echo '<script languaje="javascript">alert("Usuario Incorrecto");location.href=index.php;</script>';
}
?>