<?php
	    session_start();
	require_once('conexion.php');

	    if(isset($_POST['btnRegistro'])){
    	    $id_libros= $_POST['id_libros'];
        	$titulo = $_POST['titulo'];
        	$id_autor= $_POST['autor'];
        	$id_categoria= $_POST['categoria'];
        	$fechadepublicacion= $_POST['fechadepublicacion'];
        	$id_editorial= $_POST['editorial'];
  
        #Creamos un INSERT para agregar el usuario
            $insertUsuario="INSERT INTO libros(id_libros,titulo,id_autor,id_categoria,fechadepublicacion,id_editorial)
                           VALUES('{$id_libros}','{$titulo}','{$id_autor}','{$id_categoria}','{$fechadepublicacion}','{$id_editorial}');";
      
         # Mandamos el INSERT a la BD               
            if($conexion->query($insertUsuario)){
                echo "Libro regristrado correctamente<br />";   
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
<h2>Bienvenido, a la Biblioteca de UNIVES</h2>
<form action ="#" method ="POST">
		<h2>autor<input type="text" name="autor"></h2>
		<h2>categoria <input type="text" name="categoria"></h2>
		<h2>editorial<input type="text" name="editorial"></h2>
		<h2>id_libros<input type="text" name="id_libros"></h2>
        <h2>titulo<input type="text" name="titulo"></h2>
        <h2>fechadepublicacion<input type="text" name="fechadepublicacion"></h2>
		<input type="submit" name ="btnRegistro" value="Registrar">
</form>
</div>
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>
<script src="js/bookstrap.min.js"></script>
</body>
</html>