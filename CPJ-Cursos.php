<?php header('Content-Type: text/html; charset=ISO-8859-15'); ?> 
<!DOCTYPE html>
<html lang="es"><!-- InstanceBegin template="/Templates/centroParaguayoJapones.dwt" codeOutsideHTMLIsLocked="false" -->
<?php $entidad="a87ff";?> 
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2"/>
<title>Centro Paraguayo Japon&eacute;s</title> 
	<link rel="icon" type="ico" href="imagenes/favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css"  href="css/estilo-plant-entidades.css"/>
    <link rel="stylesheet" type="text/css" href="css/calendario-plant.css" />

    <?php $noscript=true;include("ajax.inc.php");?>

    <script src="banner/jquery.js"></script>
    <script src="banner/amazingslider.js"></script>
    <script src="banner/initslider-1.js"></script>

</head>

<body>
    <!-- ******************************* ANALYTICS *******************************************  -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-42889888-1', 'culturayturismoasu.com.py');
          ga('send', 'pageview');

        </script>
    <!-- *************************************************************************************  -->
    <header id="cabecera">
      <section id="logo-grupo">

            <section id="logocult"> <a href="beta-index.php"> <img src="imagenes/DGCT2.png" alt="Direccion General de Cultura y Turismo" ></a></section>
            <section id="logoasu"> <a href="beta-index.php"> <img src="imagenes/Logo-Asu.png" alt="logo Asu"></a></section>
            <section id="logoasurohayhu"> <a href="beta-index.php"> <img src="imagenes/Logo-Rohayhu-Asu.png" alt="logo Asu"></a></section>

     
      </section>

    

</header>
  <section id="contenido">
    <section id="banner">
<!-- ******************************************************* -->
       
    <div id="amazingslider-1">
        <ul class="amazingslider-slides" style="display:none;">
            <li><img src="imagenes/banner/CPJ-1.jpg" alt=""></li>
            <li><img src="imagenes/banner/CPJ-2.jpg" alt=""></li>
            <li><img src="imagenes/banner/CPJ-3.jpg" alt=""></li>
            <li><img src="imagenes/banner/CPJ-4.jpg" alt=""></li>
            <li><img src="imagenes/banner/CPJ-5.jpg" alt=""></li>
            <li><img src="imagenes/banner/CPJ-6.jpg" alt=""></li>
        </ul>
        <ul class="amazingslider-thumbnails" style="display:none; ">
            <li><img src="imagenes/banner/CPJ-1-tn.jpg" alt=""></li>
            <li><img src="imagenes/banner/CPJ-2-tn.jpg" alt=""></li>
            <li><img src="imagenes/banner/CPJ-3-tn.jpg" alt=""></li>
            <li><img src="imagenes/banner/CPJ-4-tn.jpg" alt=""></li>
            <li><img src="imagenes/banner/CPJ-5-tn.jpg" alt=""></li>
            <li><img src="imagenes/banner/CPJ-6-tn.jpg" alt=""></li>
        </ul>
    </div>
       
        
<!-- ******************************************************* -->
            </section>

    <section id="central">
      <div class="titulo"><h1>Centro Paraguayo Japon&eacute;s</h1></div>
      <ul class="hovercal">
        <li>
          <div class="titulo2">Ver Calendario</div>
          <div id="cal">
            <section id="calendario">
              <div id="calendar">

              <?php include("calendario.inc.php");?>
                  
              </div>
              <img src="imagenes/sombra2.png"  align="bottom"/>
            </section>
          </div>
        </li>
      </ul>
             
      <div id="cont-central">
            <ul id="nav-inst"><!--
              --><li class="col-3"><a href="CPJ-historia.php">Historia</a></li><!-- 
              --><li class="col-3"><a href="#">Espacios</a><!-- 
                --><ul class="col-3"><!-- 
                    --><li><a href="CPJ-Sala-TeatroAPB.php">Teatro Agust&iacute;n P&iacute;o Barrios</a></li><!--
                    --><li><a href="CPJ-Sala-Seminario.php">Sala Seminario Branislava Susnik</a><!--
                    --><li><a href="CPJ-Sala-Anfiteatro.php">Anfiteatro Oscar Cardozo Ocampo</a></li><!--
                    --><li><a href="CPJ-Sala-Exposicion.php">Sala de Exposiciones Jacinto Rivero</a></li><!--
                    --><li><a href="CPJ-Sala-Reuniones.php">Sala de Reuniones Agustina Miranda</a></li><!--
                    --><li><a href="CPJ-Sala-Biblioteca.php">Biblioteca Herib Campos Cervera</a></li><!--
                --></ul><!-- 
              --></li><!-- 
              --><li class="col-3"><a href="CPJ-Contacto.php">Contacto</a></li><!-- 
           --></ul>

         

        <nav id="botones-entidad">
                <ul id="botones-entidad-nav">
                    <li><a href="CPJ-Cursos-Musica.php">Conservatorio de M&uacute;sica</a></li>
                    <li><a href="CPJ-Cursos-Gimnasio.php">Gimnasio</a></li>
                    <li><a href="CPJ-Cursos-Danza.php">Academia de Danza</a></li>
                    <li><a href="CPJ-Cursos-Idiomas.php">Idiomas</a></li>
                    <li><a href="CPJ-Cursos-Artes.php">Artes</a></li>
                    <li><a href="CPJ-Cursos-Computacion.php">Computaci&oacute;n</a></li>
                    

                <aside id="menu-social">
                  <ul id="nav-social">
                    <li><a href="mailto:centroparaguayojapones@gmail.com"><img src="imagenes/email.png" width="45"></a></li>
                    <li><a href="https://www.facebook.com/pages/Centro-Paraguayo-Japon%C3%A9s/258898532086?fref=ts"><img src="imagenes/facebook.png" width="45"></a></li>
                    <!--<li><a href="#"><img src="imagenes/twitter.png" width="45"></a></li>
                    <li><a href="#"><img src="imagenes/skype.png" width="45"></a></li>
                    <li><a href="#"><img src="imagenes/youtube.png" width="45"></a></li>
                    <li><a href="#"><img src="imagenes/googleplus.png" width="45"></a></li> -->
                  </ul>
                </aside>

            </nav>
             <!-- InstanceBeginEditable name="INFO" -->
             <section id="cont-info">
                <div class="info">
                    <h3>Cursos</h3>
                    <a href="CPJ-Cursos-Danza.html"><h2>Academia de Danza</h2>
                    <p>La Academia de Danza del CPJ cuenta con reconocimiento del Ministerio de Educaci&oacute;n y Cultura. Se dictan clases de danza Paraguaya, Kinder-Baby, Pre-Ballet, Cl&aacute;sica, Jazz, Espanola y Ritmos Latinos. Para ninos, j&oacute;venes y adultos a partir de 4 anos.</p> 
                    <p>Cuenta con Salas especialmente equipadas con pisos de madera, espejos y barras fijas.</p>
                    <a href="CPJ-Cursos-Musica.html"><h2>Música</h2><p>El Conservatorio de M&uacute;sica del Centro Paraguayo Japon&eacute;s est&aacute; reconocido por el Ministerio de Educaci&oacute;n y Cultura. Ofrece clases individuales y grupales de Piano, Guitarra Popular  el&eacute;ctrica y Cl&aacute;sica, Viol&iacute;n, Violonchelo, Arpa. &oacute;rgano,  Canto y Coro. Taller Musical Infantil</p>
                    <a href="CPJ-Cursos-Artes.html"><h2>En Artes Visuales</h2><p>el Centro Paraguayo Japon&eacute;s ofrece Clases de Dibujo Art&iacute;stico y Pintura al &oacute;leo para ninos, j&oacute;venes y adultos. </p>
                    <a href="CPJ-Cursos-Gimnasio.html"><h2>Gimnasio</h2><p>El gimnasio del Centro Paraguayo Japon&eacute;s es el m&aacute;s completo de nuestro medio para la pr&aacute;ctica de artes marciales y Gimnasia Art&iacute;stica. Clases de: Aikido, Karate Do, Judo, Taekwondo, Jiu Jitsu, Kung Fu, Bozen Do, Yawara Undo, Hap Kido y IAI DO (manejo de la espada japonesa o katana). </p>
                    <a href="CPJ-Cursos-Gimnasia.html"><h2>En Gimnasia Art&iacute;stica</h2><p> tenemos el gimnasio mejor equipado del pa&iacute;s para
                    la pr&aacute;ctica de &eacute;sta disciplina. Con equipos reglamentarios utilizados
                    y recomendados por la Federaci&oacute;n Internacional de Gimnasia Art&iacute;stica,
                    de la marca Senoh, para pr&aacute;cticas en suelo, anillas caballetes de
                    salto, trampolines, vigas.
                    </p>
                    <a href="CPJ-Cursos-Fisiculturismo.html"><h2>Fisiculturismo y Musculaci&oacute;n</h2><p>La Sala de Fisiculturismo y Musculaci&oacute;n, cuenta con cintas caminadoras, bicicletas est&aacute;ticas, barras, mancuernas, discos ol&iacute;mpicos y  equipos de musculaci&oacute;n y steps para Gimnasia Aer&oacute;bica.</p>
                      <h2>El Centro Paraguayo Japon&eacute;s, cuenta  adem&aacute;s con importantes espacios
                    utilizados por la ciudadan&iacute;a para la realizaci&oacute;n de diferentes
                    actividades y eventos a costos accesibles.</h2>
                </div>
              </section>
                  <!-- InstanceEndEditable --></div>  
    </section> 
  </section>
 
  <footer>
  <nav id="menu-Logos">
       <ul id="nav-logos">   
          
          <li class="logoentidad">
            <a class="TeatroMunicipal" href="TeatroMunicipal.php"></a>
            <figure class="icono" ><a href="" ><img src="imagenes/facebook2.png" alt=""></a></figure>
          </li>
          
          <li class="logoentidad">
            <a class="InstitutoMunicipalDeArte" href="InstitutoMunicipalDeArte.php"></a>
            <figure class="icono" ><a href="" ><img src="imagenes/facebook2.png" alt=""></a></figure>
          </li>
          
          <li class="logoentidad">
            <a class="ManzanaDeLaRivera" href="ManzanaDeLaRivera.php"></a>
            <figure class="icono" ><a href="" ><img src="imagenes/facebook2.png" alt=""></a></figure>
          </li>
          
          <li class="logoentidad">
            <a class="CentroParaguayoJapones" href="CentroParaguayoJapones.php"></a>
            <figure class="icono" ><a href="" ><img src="imagenes/facebook2.png" alt=""></a></figure>
          </li>
         
          <li class="logoentidad">
            <a class="DierccionDeAccionCulturalYTurismo" href="DierccionDeAccionCulturalYTurismo.php"></a>
            <figure class="icono" ><a href="" ><img src="imagenes/facebook2.png" alt=""></a></figure>
          </li>
      </ul>

  </footer>

</body>
<!-- InstanceEnd --></html>