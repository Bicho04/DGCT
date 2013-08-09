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
            <li><img src="images/Foto-1.jpg" alt="Picaflor" data-description="Descripcion de la foto" /></li>
            <li><img src="images/Foto-2.jpg" alt="Panteon de los heroes" data-description="Descripcion de la foto" /></li>
            <li><img src="images/Foto-4.jpg" alt="Foto-4" data-description="Descripcion de la foto" /></li>
            <li><img src="images/la foto.JPG" alt="panteom de los heroes" data-description="Descripcion de la foto" /></li>
        </ul>
        <ul class="amazingslider-thumbnails" style="display:none; ">
            <li><img src="images/Foto-1-tn.jpg" /></li>
            <li><img src="images/Foto-2-tn.jpg" /></li>
            <li><img src="images/Foto-4-tn.jpg" /></li>
            <li><img src="images/la foto-tn.JPG" /></li>
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
              --><li class="col-4"><a href="CPJ-historia.php">Historia</a></li><!-- 
              --><li class="col-4"><a href="CPJ-Contacto.php">Asocia&oacute;n Paraguayo Japonesa</a></li><!-- 
              --><li class="col-4"><a href="#">Espacios</a><!-- 
                --><ul><!-- 
                    --><li><a href="CPJ-Sala-TeatroAPB.php">Teatro Agust&iacute;n P&iacute;o Barrios</a></li><!--
                    --><li><a href="CPJ-Sala-Seminario.php">Sala Seminario Branislava Susnik</a><!--
                    --><li><a href="CPJ-Sala-Anfiteatro.php">Anfiteatro Oscar Cardozo Ocampo</a></li><!--
                    --><li><a href="CPJ-Sala-Exposicion.php">Sala de Exposiciones Jacinto Rivero</a></li><!--
                    --><li><a href="CPJ-Sala-Reuniones.php">Sala de Reuniones Agustina Miranda</a></li><!--
                    --><li><a href="CPJ-Sala-Biblioteca.php">Biblioteca Herib Campos Cervera</a></li><!--
                --></ul><!-- 
              --></li><!-- 
              --><li class="col-4"><a href="CPJ-Contacto.php">Contacto</a></li><!-- 
           --></ul>

        <nav id="botones-entidad">
                <ul id="botones-entidad-nav">
                    <li><a href="CPJ-Sala-Seminario.php">Salon Seminario</a></li><!--
                    --><li><a href="CPJ-">Cursos</a><!-- 
                      --><ul><!-- 
                          --><li><a href="CPJ-Cursos-Computacion.php">Computacion</a></li><!--
                         --><li><a href="CPJ-Cursos-Idiomas.php">Idiomas</a></li><!--
                         --><li><a href="CPJ-Cursos-Danza.php">Danza</a></li><!--
                          --><li><a href="CPJ-Cursos-Musica.php">M&uacute;sica</a><!--
                      --></ul><!-- 
                    --></li><!-- 
                    --><li><a href="CPJ-">Cursos</a><!-- 
                      --><ul><!-- 
                          --><li><a href="CPJ-Cursos-Gimnasia-Artistica.php">Gimnasia Art&iacute;stica</a></li><!--
                          --><li><a href="CPJ-Cursos-Gimnasio.php">Gimnasio</a></li><!--
                          --><li><a href="CPJ-Cursos-Artes-Marciales.php">Artes Marciales</a></li><!--
                    	--></ul><!-- 
                    --></li><!-- 
                    --><li><a href="CPJ-Sala-TeatroAPB.php">Teatro Agust&iacute;n Pio Barrios</a></li><!-- 
                    --><li><a href="CPJ-Sala-Seminario.php">Sal&oacute;n Seminario Branislava Susnik</a></li><!-- 
                    --><li><a href="CPJ-Sala-Exposicion.php">Sala de Exposiciones Jacinto Rivero</a></li><!--
                    --><li><a href="CPJ-Sala-Reuniones.php">Sala de Reuniones Agustina Miranda</a></li><!--
                    --><li><a href="CPJ-Sala-Biblioteca.php">Biblioteca Herib Campo Cervera</a></li><!--
                </ul>

                <aside id="menu-social">
                  <ul id="nav-social">
                    <li><a href="mailto:direcciondeturismo@mca.gov.py"><img src="imagenes/email.png" width="45"></a></li>
                    <li><a href="https://www.facebook.com/CulturaAsu"><img src="imagenes/facebook.png" width="45"></a></li>
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
                    <h2>En Gimnasia Artística</h2><p> tenemos el gimnasio mejor equipado del país para
la práctica de ésta disciplina. Con equipos reglamentarios utilizados
y recomendados por la Federación Internacional de Gimnasia Artística,
de la marca Senoh, para prácticas en suelo, anillas caballetes de
salto, trampolines, vigas.
</p>
                </div>
              </section>
                  <!-- InstanceEndEditable --></div>  
    </section> 
  </section>
 
  <footer>
     <nav id="menu-Logos">
       <ul id="nav-logos">   
          <li><a href="TeatroMunicipal.php"><img src="imagenes/Logo-TeatroMunicipal.png" alt="Teatro Municipal Ignacio A. Pane"></a></li>
          <li><a href="InstitutoMunicipalDeArte.php"><img src="imagenes/Logo-IMA.png" ></a></li>
          <li><a href="ManzanaDeLaRivera.php"><img src="imagenes/Logo-Manzana.png" ></a></li>
          <li><a href="CentroParaguayoJapones.php"><img src="imagenes/Logo-CPJ.png" ></a></li>
          <li><a href="DierccionDeAccionCulturalYTurismo.php"><img src="imagenes/Logo-DACT.png" alt="Diercción de Acción Cultural y Turismo"></a></li>
      </ul>
   </nav>
  </footer> 

</body>
<!-- InstanceEnd --></html>