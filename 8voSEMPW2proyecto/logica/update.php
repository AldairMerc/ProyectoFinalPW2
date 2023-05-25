<?php 
    $host_db = "localhost: 3306";
    $user_db = "root";
    $pass_db = "";
    $db_name = "test_alumnos";
    $conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

    $id = $_POST['no_cuenta'];
    $nombre = $_POST['rnombre'];
    $apellido = $_POST['rapellido'];
    $email = $_POST['remail'];
    $genero = $_POST['rgenero'];
    $fecha_nac = $_POST['rfecha_nac'];

    $sql_mod ="UPDATE alumnos SET nombre = '".$nombre."', apellido = '".$apellido."', email = '".$email."', genero= '".$genero."', fecha_nac = '".$fecha_nac."' WHERE no_cuenta = '".$id."'";
    $actualizar = $conexion->query($sql_mod);
    header("location:../principal.php");
?>
