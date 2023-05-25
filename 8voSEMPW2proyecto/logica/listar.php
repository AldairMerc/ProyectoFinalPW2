<?php   
    
    $host_db = "localhost: 3306";
    $user_db = "root";
    $pass_db = "";
    $db_name = "test_alumnos";

    $conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);   

    $consulta_sql="SELECT * FROM alumnos ORDER BY no_cuenta";

        $resultado=$conexion->query($consulta_sql);
        
        $count=mysqli_num_rows($resultado);
 ?>     
        <form method="post">
        <table border="2px"> 
            <tr>
                <th>Numero de cuenta</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Genero</th>
                <th>Fecha de nacimiento</th>
                <th> Editar </th>
                <th> Marcar </th>
            </tr>
     <?php   
            if ($count>0){
            while($row=mysqli_fetch_assoc($resultado)){
            
                echo "<tr>";
                echo "<td>".$row['no_cuenta']."</td>";
                echo "<td>".$row['nombre']."</td>";
                echo "<td>".$row['apellido']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['genero']."</td>";
                echo "<td>".$row['fecha_nac']."</td>";    
                echo "<td><a href=./logica/modificar.php?no_cuenta=".$row['no_cuenta']."><i class='material-icons center'>edit</i></a></td>";
                echo "<td> <p><label><input type='checkbox' name='idAlus[]' value=".$row['no_cuenta']."/> <span></span> </label></p></td>";
                echo "</tr>";
            }
            }else{
        
                echo "<h1>Sin registro</h1>";
            }
        
        
        ?>
        
        <button class="btn waves-effect waves-light" type="submit" name="action" onclick=" reload()">Actualizar <i class="material-icons right">send</i></button>
        <input type = "submit" name="botEl" value = "Eliminar" class="btn waves-effect waves-light">
        <label>Después de eliminar debes actualizar la página </label>
            <?php 
                if(isset($_POST['idAlus'])){
                        foreach ($_POST['idAlus'] as $id_borrar) {
                            $borrar_alu = $conexion->query("DELETE FROM alumnos WHERE no_cuenta='$id_borrar'");
                
                        }
                }
                
            ?>
        
        </table> 
        </form> 
