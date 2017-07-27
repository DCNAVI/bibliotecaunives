<?php
 session_start();
    require_once('conexion.php');
        
if(isset($_POST['btnLogin'])){
        # Capturamos los datos del formulario
        $nombre1= $_POST['nombreu'];
        $pass1= $_POST['passs'];
        $pass2= md5($pass1);
        # Hacemos una consulta que busque al usuario con los datos del formulario
        $userSearch = "SELECT COUNT(*) as total
                       FROM usuarios
                       WHERE nombre = '{$nombre1}'
                       AND pass='{$pass2}';";
        # Mandamos la consulta a la BD
        $totalUsuario = $conexion->query($userSearch)->fetch_object();
        
        if($totalUsuario->total == 0){
            echo "EL USUARIO NO EXISTE <br />";
            echo $userSearch;
         

        }else{
            echo "Login correcto <br />";
        }
    }
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
    <title>login</title>
     <mate name="viewport" content="width=device-width,initial-scale=1, maximus-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="css/estilos.ccs">
</head>
<body>
        <form action ="#" method ="POST">
            Nombre de usuario <input type="text" name="nombreu" ><br>
            Contraseña <input type="password" name="passs"><br>
            <input type="submit" name ="btnLogin" value="Registrar" >
        </form>
        </div>
<script src="js/jquery.js"></script>
<script src="js/main.js"></script>
<script src="js/bookstrap.min.js"></script>
</body>
</html>