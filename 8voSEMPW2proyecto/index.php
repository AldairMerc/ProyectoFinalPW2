<?php include "header.php"?>

    <h1><p class="flow-text">Inicio de sesión</p> </h1>

    <div class = "center">
    <div class="row">
        <div class="col s12 m4">
        <form method="POST" action="logica/loguear.php">
            <input type="text" name="no_cuenta" placeholder="Numero de Cuenta" />
            <br />
            <input type="text" name="clave" placeholder="Contraseña" />
            <br />
            <button type="submit">Inicar Sesion</button>
        </form>
        </div>
      </div>    
    </div>


<?php include "footer.php"?>