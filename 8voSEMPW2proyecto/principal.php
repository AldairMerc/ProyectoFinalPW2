<?php include "header.php"?>
<?php
session_start();
include "./logica/conexion.php";
$no_cuenta= $_SESSION['usermane'];//413112576


if(!isset($no_cuenta)){

        header("location: index.php");
}else{

    echo "<h3> Bienvenido de vuelta $no_cuenta </h3> ";
    echo "<a href='logica/salir.php'> SALIR</a>";
//listar registros            
    include "./logica/listar.php";





}


?>
<?php include "footer.php"?>