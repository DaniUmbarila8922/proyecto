<html lang="es">
<style type="text/css"></style>
<head>
	<title>Colombia Vive</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1, maximun scale=1, minimum-scale=1">
	<link rel="stylesheet" type="text/css" href="css/fontello.css">
	<link rel="stylesheet" type="text/css" href="css/stilo.css">
	<script src="https://code.jquery.com/jquery-latest.js"> </script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"> </script>
    <script src="menu.js"></script>
</head>
<body>
		<header>
				<div class="barramenu"><a href="" class="btn-menu"><span class="icon-menu"></span>Menu</a></div>
				<nav>
                    <ul>
					   <li><a href=""><span class="icon-home"></span>Inicio</a></li>
					   <li><a href="Registro.html"><span class="icon-mail-alt"></span>Registro</a></li>
						<li><a href=""><span class="icon-mail-alt"></span>Contacto</a></li>
                    </ul>
			</nav>
		</header>
		
		<main>
        <?php
echo $usu=$_POST['cedula'];
echo $mail=$_POST['mail'];
$db_host = "localhost";
$db_usuario = "id1527941_root";
$db_password = "12345678";
$db_nombre = "id1527941_proyecto";
$db=mysqli_connect($db_host,$db_usuario,$db_password);

if (!$db){
  die('no se puede conectar a la base de datos '.mysql_error());
}
mysqli_select_db($db_nombre,$db);
$sql="SELECT * FROM usuarios WHERE identificacion = '".$usu."'";
$comprobar=mysql_query($sql);
if(mysql_num_rows($comprobar)>0)
{
  while($fila=mysql_fetch_array($comprobar)){
  $men=$fila['password'];
}

	$para      = $mail;
	$titulo    = 'Recuperación de contraseña';
	$mensaje   = $men;
	$cabeceras = 'From: dani.umbarila@gmail.com' . "\r\n" .
	    		 'Reply-To: dani.umbarila@gmail.com' . "\r\n" .
	    		 'X-Mailer: PHP/' . phpversion();

	mail($para, $titulo, $mensaje, $cabeceras);
	
 echo "<br /><br /><br /><br /> <h1><center>El mail a sido enviado al correo suministrado</center></h1><br /><br />";
  echo "<h4><center>Su clave es:</center></h4>";
  echo "<center>".$men."</center>";
  echo "<h4><center>En el correo sumistrado recibira un correo con este mismo password<br /></center></h4>";
  echo "<center>".$mail."</center>";
}
else{ 
  if(mysql_num_rows($comprobar)<=0)
        {
           
		echo "<br /> <br /><br /> <br /><h1 ><center>El usuario no existe</center></h1> <br /> <br /><br />";
     echo "<h3><center>Lastimosamente no hemos podido encontrar el usuario para recuperar la contraseña, <br /> le recomendamos ponerse en contacto con el administrador del sistema.</center></h3>";
        }
 }
 mysql_close();

?>
 	</main>
    
</body>
</html>
 
</html>