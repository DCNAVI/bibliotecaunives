<?php
	    session_start();
	require_once('conexion.php');

	    if(isset($_POST['btnRegistro'])){
    	    $nombre= $_POST['nombre'];
            $pass= $_POST['pass'];
            $edad= $_POST['edad'];
        	$correo = $_POST['correo'];
        	$direccion= $_POST['direccion'];
            $sexo= $_POST['sexo'];
  
        #Creamos un INSERT para agregar el usuario
            $insertUsuario="INSERT INTO usuarios(nombre,pass,fechadenacimiento,correo,direccion,sexo)
                           VALUES('{$nombre}',md5('{$pass}'),'{$edad}','{$correo}','{$direccion}','{$sexo}');";
      
         # Mandamos el INSERT a la BD               
            if($conexion->query($insertUsuario)){
                echo "registro de usuarios<br />";   
            }else{
                echo $conexion->error;
            }
        }
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
	<title>Registro Biblioteca</title>
    <mate name="viewport" content="width=device-width,initial-scale=1, maximus-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/estilos.ccs">
<body>
<div class="container"> 
<h2>Bienvenido, Usuarios de UNIVES</h2>
<form action ="#" method ="POST">
        <h2>nombre<input type="text" name="nombre"></h2>
        <h2>contraseña<input type="password" name="pass"></h2>
        <h2>edad<input type="date" name="edad"></h2>
        <h2>correo<input type="text" name="correo"></h2>
        <h2>direccion<input type="text" name="direccion"></h2>
        <h2>sexo</h2>
        <h2>masculino<input type="radio" name="sexo"value="masculino"></h2>
        <h2>femenino<input type="radio" name="sexo"value="masculino"></h2>
        <input type="submit" name ="btnRegistro" value="Registrar">
</form>
</div>
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>
<script src="js/bookstrap.min.js"></script>
</body>
</html>
