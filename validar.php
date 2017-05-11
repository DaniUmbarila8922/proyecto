<?php 

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

//conexion a a BD
$conexion=mysqli_connect("localhost","id1527941_root","12345678","id1527941_proyecto");
$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave'";
$restultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($restultado);
	
if($filas>0){
		header("location:usuario.html");
	}
	else{
		echo "Error en la de autenticacion";
	}

mysqli_free_result($restultado);
mysqli_close($conexion);

?>