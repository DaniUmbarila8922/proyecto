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
            <section>
                <div class="contenido"> </div>
                <div class="login">
		             		<form action="correo.php" method="post">
                            <div><a><strong>Datos Usuario</strong></a></div>
      <div>
      <div>Nombre del Usuario<input type="text" name="name" placeholder="Nombres Completos" required/></div>
      <div>Documento<input type="text" name="cedula" placeholder="Identificacion" onKeyPress="ValidaSoloNumeros()" required/></div>
      <div> Correo de Recuperación<input name="mail" placeholder="Escriba su correo" type="email" required/></div>
                            <input type="submit" value="Enviar" id="anvazar"/>
					</form>
				</div>
            </section>
			
		</main>
    
</body>
</html>