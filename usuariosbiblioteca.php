<?php
	    session_start();
	require_once('conexion.php');

	    if(isset($_POST['btnRegistro'])){
    	    $contaseña= $_POST['contaseña'];
        	$correo = $_POST['correo'];
        	$direccion= $_POST['direccion'];
        	$fechadenacimiento= $_POST['fechadenacimiento'];
        	$id_usuarios= $_POST['usuarios'];
        	$nombre= $_POST['nombre'];
            $sexo= $_POST['sexo'];
  
        #Creamos un INSERT para agregar el usuario
            $insertUsuario="INSERT INTO usuarios(contaseña,correo,direccion,fechadenacimiento,id_usuarios,nombre,sexo)
                           VALUES('{$contaseña}','{$correo}','{$fechadenacimiento}','{$id_usuarios}','{$fechadepublicacion}','{$id_usuarios}','{$nombre}','{$sexo}');";
      
         # Mandamos el INSERT a la BD               
            if($conexion->query($insertUsuario)){
                echo "usuarios regristrado correctamente<br />";   
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
<h2>Bienvenido, Usuarios de UNIVES</h2>
<form action ="#" method ="POST">
        <h2>contraseña<input type="text" name="contraseña"></h2>
        <h2>correo<input type="text" name="correo"></h2>
        <h2>direccion<input type="text" name="direccion"></h2>
        <h2>fechadenacimiento<input type="text" name="fechadenacimiento"></h2>
        <h2>id_usuarios<input type="text" name="id_usuarios"></h2>
        <h2>nombres<input type="text" name="nombres"></h2>
        <h2>sexo<input type="text" name="sexo"></h2>
        <input type="submit" name ="btnRegistro" value="Registrar">
</form>
</div>
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>
<script src="js/bookstrap.min.js"></script>
</body>
</html>

