<?php
/*Estas son las credenciales en local*/
$host_db = "localhost: 3306";
$user_db = "root";
$pass_db = "";
$db_name = "test_php";

$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

if($conexion->connect_error){

    echo"<h1>MySQL no le  esta dando permisos para ejecutar consultas verificar error</h1>";
}
/*Estas son las credenciales del hosting
$host_db = "localhost";
$user_db = "id18011603_elkeun315";
$pass_db = "W3=AUBJKa&229F>!";
$db_name = "id18011603_test";*/
?>
