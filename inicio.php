<h1>Dashboard</h1>

<?php
include 'conexion.php';
$query="SELECT * FROM cajon ORDER BY numero";
$ejecutar=$conexion->query($query);
echo "<div class='row'>";
while($result=$ejecutar->fetch_array()){
    echo "<div class='col-sm-3'><div class='card' style='width: 18rem;'>
    <img src='imagenes/anime_image_6f0f0d30c1.png.jpg' class='card-img-top' alt='...'>
    <div class='card-body'>
    <h5 class='card-title'>Cajon".$result['numero']."</h5>";
    if($result['status']=="Libre"){

    }else{
        echo "<p class='card-text'>No existe un vehiculo ocupando en este cajon.</p>";
        echo "<a href='#' class='btn btn-info' onclick='abrirModal(".$result['id_cajon'].");'>Ocupar</a>";
    }
    echo "
    </div>
    </div>
    </div>";

}