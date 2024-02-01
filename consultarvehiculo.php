<div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Matricula</th>
                <th scope="col">Modelo</th>
                <th scope="col">Tipo</th>
                <th scope="col">Cliente</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            include 'conexion.php';

            $query="SELECT id_vehiculo,Matricula, Modelo,tipo,id_cliente FROM vehiculos";
            $ejecutar=$conexion->query($query);
            while($result=$ejecutar->fetch_array()){
                echo "<tr>
                <td>".$result['Matricula']."</td>
                <td>".$result['Modelo']."</td>
                <td>".$result['tipo']."</td>
                <td>".$result['id_cliente']."</td>

                <td><a href='' onclick='editarcliente(".$result['id_vehiculo'].");'>Editar</a></td>
                <td><a href='' onclick='eliminarvechiculo(".$result['id_vehiculo'].");'>Eliminar</a></td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

