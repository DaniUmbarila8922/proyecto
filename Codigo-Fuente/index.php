<?php

require '/src/facebook.php';

$facebook = new Facebook(array(
  'appId'  => '132214950677424',
  'secret' => '349b49d8247a36752fd3835557f06ee2',
));

// See if there is a user from a cookie
$user = $facebook->getUser();

if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    echo '<pre>'.htmlspecialchars(print_r($e, true)).'</pre>';
    $user = null;
  }
}

?>

<!DOCTYPE html>
<title>Colombia Vive</title>
<meta charset="utf-8"/>
<link rel="stylesheet" href="styles/style.css" type="text/css"/>
<link rel="stylesheet" href="styles/prettyphoto.css" type="text/css"/>
<link rel="stylesheet" href="styles/totop.css" type="text/css"/>

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
        <div id="mySlides">
            <div id="slide1">
                <img src="images/slider1.jpg" alt="Slide 1 jFlow Plus"/> 
            </div>
            <div id="slide2">
                <img src="images/slider2.jpg" alt="Slide 2 jFlow Plus"/>
            </div>
            <div id="slide3">
                <img src="images/slider3.jpg" alt="Slide 3 jFlow Plus"/>
            </div>
        </div>

        <div id="myController">
            <span class="jFlowControl"></span>
            <span class="jFlowControl"></span>
            <span class="jFlowControl"></span>
        </div>

        <section class="jFlowPrev">
            <div></div>
        </section>
        <section class="jFlowNext">
            <div></div>
        </section>
        <br/>
        <br/>

        <article class="box" id="home_featured21">
            <div class="block"><h2>Historia</h2>

                <p>La masacre de El Salado es una de las más atroces del conflicto contemporáneo de Colombia. Fue perpetrada entre el 16 y el 21 de febrero del 2000 por 450 paramilitares, que apoyados por helicópteros, dieron muerte a 60 personas en estado de total indefensión.<br/>
                    <a href="http://www.centrodememoriahistorica.gov.co/2014-01-29-15-08-26/el-salado-esa-guerra-no-era-nuestra" class="read_more">Conocer más</a>
                </p>
            </div>
            <div class="block"><h2>Recordemos...</h2>
                <ul id="list">
                                         <iframe width="300" height="315" 
src="https://www.youtube.com/embed/85MppyLJHz0?autoplay=0"  
allowfullscreen></iframe>
                    
                </ul>
                <br/>     
            </div> 
            <div class="login">
					<form action="validar.php" method="post"> 
						<div id="fcb">
                            <div id="fb-root">
                                
                            <?php if ($user) { ?>
                                Your user profile is
                            <pre>
                            <?php print htmlspecialchars(print_r($user_profile, true)) ?>
                            </pre>
                                <?php } else { ?>
                                <fb:login-button></fb:login-button>
                                <?php } ?>
                            <div id="fb-root"></div>
                                <script>
                                    window.fbAsyncInit = function() {
                                            FB.init({
                                            appId: '<?php echo $facebook->getAppID() ?>',
                                            cookie: true,
                                            xfbml: true,
                                            oauth: true
                                        });
                                        FB.Event.subscribe('auth.login', function(response) {
                                            window.location.reload();
                                        });
                                        FB.Event.subscribe('auth.logout', function(response) {
                                            window.location.reload();
                                        });
                                    };
                                        (function() {
                                            var e = document.createElement('script'); e.async = true;
                                                e.src = document.location.protocol +
                                                '//connect.facebook.net/en_US/all.js';
                                                document.getElementById('fb-root').appendChild(e);
                                            }());
                                </script>
                           </div>
                        </div>
                           
                    	<h2>Ingresar</h2>
                        <div id="fcb"><a href="https://www.facebook.com"></a></div>
						<input type="text" placeholder="&#128272;usuario" name="usuario"><br>
						<input name="clave" type="password" placeholder="&#9919;contrseña"required>
						<input type="submit" value="Ingresar">
                        <label><a href="contrasena.php">Olvide contraseña</a></label>
					</form>
				</div>
            <div class="clear"></div>
            
        </article>

    </div>
<br/>
<br/>
<script src="scripts/jquery.js" type="text/javascript"></script>
<script src="scripts/prettyphoto.js" type="text/javascript"></script>
<script src="scripts/jflow.js" type="text/javascript"></script>
<script src="scripts/easing.js" type="text/javascript"></script>
<script src="scripts/totop.js" type="text/javascript"></script>
<script src="scripts/superfish.js" type="text/javascript"></script>
<script src="scripts/functions.js" type="text/javascript"></script>
</body>
</html>
