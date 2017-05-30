<?php

$conexion=mysqli_connect("localhost","id1527941_root","12345678","id1527941_proyecto");
$consulta="INSERT INTO usuarios (identificacion,nombre,apellido,correo,usuario,clave);
          VALUES ('{$_POST['identificacion']}','{$_POST['nombre']}','{$_POST['apellido']}','{$_POST['correo']}','{$_POST['usuario']}','{$_POST['clave']}";
$restultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($restultado);
	
if($filas>0){
		header("location:index.html");
	}
	else{
		echo "Error en la de autenticacion";
	}

mysqli_free_result($restultado);
mysqli_close($conexion);

?>