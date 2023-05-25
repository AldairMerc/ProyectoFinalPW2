<?php 
    $host_db = "localhost: 3306";
    $user_db = "root";
    $pass_db = "";
    $db_name = "test_alumnos";
    $conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);

    $busqueda = mysqli_query($conexion, "SELECT * FROM alumnos WHERE no_cuenta ='".$_REQUEST["no_cuenta"]."'");
    if($resultado = mysqli_fetch_assoc($busqueda)){}

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <link rel="shortcut icon" href="./recursos/media/dogo.png" type="image/x-icon">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Proyecto</title>
</head>


<body>
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" class="brand-logo">Proyecto</a>      
  </div>
</nav>
	<h1>Modificar registro</h1>
 <div class="row">
    <form class="col s12" method="POST" action="./update.php">
      <input type="hidden" name="no_cuenta" value="<?php echo $resultado['no_cuenta'];?>">
      <div class="row">
        <div class="input-field col s6">
          <input required placeholder="Nombre" id="rnombre" name="rnombre" type="text" class="validate" value="<?php echo $resultado['nombre'];?>">
          
        </div>
        
        <div class="input-field col s6">
          <input required  id="rapellido" name="rapellido" placeholder ="Apellido" id="last_name" type="text" class="validate" value="<?php echo $resultado['apellido'];?>">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input disabled  id="rno_cuenta" name="rno_cuenta" type="text" class="validate" value="<?php echo $resultado['no_cuenta'];?>">
          
        </div>
        <div class="input-field col s6">
          <input  id="remail" name="remail" type="email" class="validate" value="
          <?php echo $resultado['email'];?>">
        </div> 

      </div>
      <div class="row">
        <div class="input-field col s6">
          <input required id="rgenero" name="rgenero" type="text" class="validate" value="<?php echo $resultado['genero'];?>">
            <div class="input-field col s6">
            <label>(Male, Female, Other)</label>
        </div>
        </div>
        <div class="input-field col s6">
          <input id="rfecha_nac" name="rfecha_nac" type="date" class="validate" value="<?php echo $resultado['fecha_nac'];?>">
        </div>
      </div>


      <div class="row">
        <div class="col s12">
          <div class="btn waves-effect waves-light">
            <input name='modif' type="submit" class="validate" onclick="reload()" value="Actualizar" >

          </div>
        </div>
      </div>

    </form> 
  </div>

  <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Contenido del footer</h5>
            <p class="grey-text text-lighten-4">Página realizada con la ayuda de materialize. </p>
          </div>
        </div>
      </div>
      <div class="container">
      © 2023 Copyright
      <a class="grey-text text-lighten-4 right" href="#!">Más ligas</a>
      </div>   
  </footer>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html> 

