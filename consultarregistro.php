<div class="table-responsive">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Fecha de ingreso</th>
                <th scope="col">Hora de ingreso</th>
                <th scope="col">Fecha de salida</th>
                <th scope="col">Hora de salida</th>
                <th scope="col">Vehiculo</th>
                <th scope="col">Cajon</th>
                <th scope="col">Tarifa</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            include 'conexion.php';

            $query="SELECT id_registro,fechaIngreso, HoraIngreso,FechaSalida,HoraSalida,id_vehiculo,id_cajon,id_tarifa FROM registro";
            $ejecutar=$conexion->query($query);
            while($result=$ejecutar->fetch_array()){
                echo "<tr>
                <td>".$result['fechaIngreso']."</td>
                <td>".$result['HoraIngreso']."</td>
                <td>".$result['FechaSalida']."</td>
                <td>".$result['HoraSalida']."</td>
                <td>".$result['id_vehiculo']."</td>
                <td>".$result['id_cajon']."</td>
                <td>".$result['id_tarifa']."</td>

                <td><a href='' onclick='editarcliente(".$result['id_registro'].");'>Editar</a></td>
                <td><a href='' onclick='eliminarregistro(".$result['id_registro'].");'>Eliminar</a></td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

