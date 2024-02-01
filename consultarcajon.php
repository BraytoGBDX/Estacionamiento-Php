<div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Número</th>
                <th scope="col">Estatus</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            include 'conexion.php';

            $query="SELECT id_cajon,numero,status FROM cajon";
            $ejecutar=$conexion->query($query);
            while($result=$ejecutar->fetch_array()){
                echo "<tr>
                <td>".$result['numero']."</td>
                <td>".$result['status']."</td>

                <td><a href='#' onclick='editarcajon(".$result['id_cajon'].");'>Editar</a></td>
                <td><a href='#' onclick='eliminarcajon(".$result['id_cajon'].");'>Eliminar</a></td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

