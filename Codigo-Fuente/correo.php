<!DOCTYPE html>
<html lang="es">
<title>Colombia Vive</title>
<meta charset="utf-8"/>
<link rel="stylesheet" href="styles/style.css" type="text/css"/>
<link rel="stylesheet" href="styles/prettyphoto.css" type="text/css"/>
<link rel="stylesheet" href="styles/totop.css" type="text/css"/>
<head>
</head>
<body>
<div class="main-container">
    <header>
        <h1><a href="index.html">Colombia Vive</a></h1>

        <p id="tagline"><strong>Aprendiendo Historia</strong></p>
    </header>
</div>

<div class="main-container">
    <div id="nav-container">
        <nav>
            <ul class="nav">
                <li class="active"><a href="index.html">Inicio</a></li>
                <li><a href="registro.html">Registro</a></li>
                <li><a href="galeria.html">Galeria</a></li>
                <li class="last"><a href="contacto.html">Contacto</a></li>
            </ul>
        </nav>
        <div class="clear"></div>
    </div>
</div>
<div class="main-container">
    <div class="container1">
        <div class="box">
            <div>
                <div id="header1">
                    <h3><a href="index.html">Recuperar Contraseña</a></h3>
                  <?php
$usu=$_POST['cedula'];
$mail=$_POST['mail'];
//$db_host = "localhost";
//$db_usuario = "id1527941_root";
//$db_password = "12345678";
//$db_nombre = "id1527941_proyecto";
//$db=mysql_connect($db_host,$db_usuario,$db_password);
$db=mysqli_connect("localhost","id1527941_root","12345678","id1527941_proyecto");
mysqli_select_db($db,"id1527941_proyecto");

if (!$db){
  die('no se puede conectar a la base de datos '.mysqli_error());
}
mysqli_select_db($db,"id1527941_proyecto");
$sql="SELECT * FROM usuarios WHERE identificacion = '".$usu."'";
$comprobar=mysqli_query($db,$sql);
if(mysqli_num_rows($comprobar)>0)
{
  while($fila=mysqli_fetch_array($comprobar)){
  $men=$fila['clave'];
}

	$para      = $mail;
	$titulo    = 'Recuperación de contraseña';
	$mensaje   = $men;
	$cabeceras = 'From: dumbarila1@poligran.edu.co' . "\r\n" .
	    		 'Reply-To: dumbarila1@poligran.edu.co' . "\r\n" .
	    		 'X-Mailer: PHP/' . phpversion();

	mail($para, $titulo, $mensaje, $cabeceras);
	
 echo "<h2><center>El mail a sido enviado al correo suministrado</center></h2><br />";
  echo "<h3><center>Su clave es:</center></h3>";
  echo "<center>".$men."</center>";
  echo "<h4><center>En el correo sumistrado recibira un correo con este mismo password<br /></center></h4>";
  echo "<center>".$mail."</center>";
}
else{ 
  if(mysqli_num_rows($comprobar)<=0)
        {
           
		echo "<br /><br /><h1 ><center>El usuario no existe</center></h1> <br /> <br /><br />";
     echo "<h3><center>Lastimosamente no hemos podido encontrar el usuario para recuperar la contraseña, <br /> le recomendamos ponerse en contacto con el administrador del sistema.</center></h3>";
        }
 }
 mysqli_close($db);

?>
                
                
                </div>
            <div class="clear"></div>

            <br/>

            <div class="clear"></div>
        </div>


    </div>
    <div class="main-container">
    </div>

    <div class="callout">
    
        </div>
    </div>
    <br/>
    <br/>
</div>
<script src="scripts/jquery.js" type="text/javascript"></script>
<script src="scripts/prettyphoto.js" type="text/javascript"></script>
<script src="scripts/jflow.js" type="text/javascript"></script>
<script src="scripts/easing.js" type="text/javascript"></script>
<script src="scripts/totop.js" type="text/javascript"></script>
<script src="scripts/superfish.js" type="text/javascript"></script>
<script src="scripts/functions.js" type="text/javascript"></script>
</body>
</html>

 


