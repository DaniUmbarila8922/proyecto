
    <!DOCTYPE html>
<html>
<title>Colombia Vive</title>
<meta charset="utf-8"/>
<link rel="stylesheet" href="styles/style.css" type="text/css"/>
<link rel="stylesheet" href="styles/prettyphoto.css" type="text/css"/>
<link rel="stylesheet" href="styles/totop.css" type="text/css"/>
<head>
     <script>
      $(function () {
         $.datepicker.setDefaults($.datepicker.regional["es"]);
             $("#datepicker").datepicker({
             firstDay: 1
           });
     });
      function ValidaSoloNumeros() {
 if ((event.keyCode < 48) || (event.keyCode > 57)) 
  event.returnValue = false;
} 
        </script>
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
                <li><a href="registro.html">Puntajes</a></li>
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
    <form action="correo.php" method="post">
                            <div><a><strong>Datos Usuario</strong></a></div>
      <div>
      <div>Nombre del Usuario<input type="text" name="name" placeholder="Nombres Completos" required/></div>
      <div>Documento<input type="text" name="cedula" placeholder="Identificacion" onKeyPress="ValidaSoloNumeros()" required/></div>
      <div> Correo de Recuperación<input name="mail" placeholder="Escriba su correo" type="email" required/></div>
                            <input type="submit" value="Enviar" id="anvazar"/>
					</form>         </div>
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
