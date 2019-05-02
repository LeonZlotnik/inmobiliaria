<?php include_once('header.php'); ?>

<html>

        <?php 
            $connect = mysqli_connect("localhost", "root", "root", "inmobiliaria");
            if ($connect-> connect_error){
                die("La Conexion Fallo: ".$conect-> connect_error);
            }

            echo "<table class='table table-hover'>
                    <thead>
                        <tr>
                            <th scope='col'>#</th>
                            <th scope='col'>Nombre</th>
                            <th scope='col'>Correo</th>
                            <th scope='col'>Ciudad</th>
                            <th scope='col'>Genero</th>
                            <th scope='col'>Interes</th>
                            <th scope='col'>Cita</th>
                            <th scope='col'>Comentarios</th>
                            <th scope='col'>Registro</th>
                        </tr>
                    </thead>";

            $sql = "SELECT * FROM registros";
            $result = $connect-> query($sql);

            if($result-> num_rows > 0) {
                    

                while($row = mysqli_fetch_assoc($result)){
                    echo "
                    <tbody>
                        <th scope='row'>".$row["id_registo"]."</th>
                        <td>".$row["nombre"]."</td>
                        <td>".$row["correo"]."</td>
                        <td>".$row["ciudad"]."</td>
                        <td>".$row["genero"]."</td>
                        <td>".$row["inter"]."</td>
                        <td>".$row["tel"]."</td>
                        <td>".$row["comentario"]."</td>
                        <td>".$row["fecha"]."</td>";
                }
                echo "
                    </tbody>
                </table>";
            }
            else {
                echo "no hay resultados";
            }

            $connect-> close();
        ?>

</html>
<?php include_once('footer.php'); ?>