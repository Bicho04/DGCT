<?php header('Content-Type: text/html; charset=ISO-8859-15'); ?>
<!DOCTYPE html>
<html lang="es"><!-- InstanceBegin template="/Templates/InstitutoMunicipalDeArte.dwt" codeOutsideHTMLIsLocked="false" --><?php $entidad="c81e7";?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2"/>
<title>Instituto Musnicipal de Arte</title> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css"  href="css/estilo-plant-entidades.css"/>
    <link rel="stylesheet" type="text/css" href="css/calendario-plant.css" />

    <?php $noscript=true;include("ajax.inc.php");?>

    <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <script src="sliderengine/initslider-1.js"></script>

</head>

<body>
   <!-- ******************************* ANALYTICS ******************************************* 
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-42889888-1', 'culturayturismoasu.com.py');
          ga('send', 'pageview');

        </script>
    ************************************************************************************* -->
 
  <section id="contenido">
    <header id="cabecera">
      <section id="logo-grupo">
        <section id="logocult"><a href="beta-index.php"><img src="imagenes/logo-09.png" alt="Instituto municipal de arte de la ciudad de Asunción" ></a></section>
         
        <section id="logoasu"> <a href="beta-index.php"><img src="imagenes/logo.png" alt="logo Asu" widt="120"></a></section>

        <aside id="inicio">
          <a href="beta-index.php"><strong>DGCyT</strong> Volver al inicio ></a>
        </aside>
      </section>

    </header>
    <section id="banner">
<!-- ******************************************************* -->

      <div id="amazingslider-1">
        <ul class="amazingslider-slides">
            <li><img src="images/Foto-1-E.jpg" alt="Foto-1-E" /></li>
            <li><img src="images/Foto-2-E.jpg" alt="Foto-2-E" /></li>
            <li><img src="images/Foto-3-E.jpg" alt="Foto-3-E" /></li>
            <li><img src="images/Foto-4-E.jpg" alt="Foto-4-E" /></li>
          
        </ul>
      </div>
   
<!-- ******************************************************* -->
    </section>

      <nav id="menu-logos">
        <ul id="nav-logos">    
          <li><a href="TeatroMunicipal.php"><img src="imagenes/logo-04.png" alt="Teatro Municipal Ignacio A. Pane"></a></li>
          <li><a href="InstitutoMunicipalDeArte.php"><img src="imagenes/logo-09.png" ></a></li>
          <li><a href="ManzanaDeLaRivera.php"><img src="imagenes/logo-03.png" ></a></li>
          <li><a href="CentroParaguayoJapones.php"><img src="imagenes/logo-01.png" ></a></li>
          <li><a href="DierccionDeAccionCulturalYTurismo.php"><img src="imagenes/logo-07.png" alt="Diercción de Acción Cultural y Turismo"></a></li>
        </ul>
      </nav>

    <section id="central">
      <div class="titulo"><h1>Instituto Municipal de Arte</h1></div>
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
              --><li class="col-2"><a href="#">EL IMA</a><!-- 
                --><ul><!-- 
                    --><li><a href="IMA-Resena-Historica.php">Rese&ntilde;a hist&oacute;rica</a></li><!-- 
                    --><li><a href="IMA-Mision-Vision.php">Misi&oacute;n/Visi&oacute;n</a></li><!-- 
                --></ul><!-- 
              --></li><!-- 
              --><li class="col-2"><a href="IMA-Contacto.php">Contacto</a></li><!-- 
           --></ul>

        <nav id="botones-entidad">
                <ul id="botones-entidad-nav">
                    <li><a href="IMA-Escuela-de-Arte-Infantil.php">Escuela de Arte Infantil</a></li>
                    <li><a href="IMA-Escuela-de-Arte-Dramatico.php">Escuela de Arte Dram&aacute;tico</a></li>
                    <li><a href="IMA-Escuela-de-Danza.php">Escuela de Danza</a></li>
                    <li><a href="IMA-Conservatorio-de-Música.php">Conservatorio de M&uacute;sica</a></li>
                    <li><a href="IMA-Escuela-de-Locución.php">Escuela de Locuci&oacute;n</a></li>
                    <li><a href="IMA-Escuela-de-Canto.php">Escuela de Canto</a></li>
                    <li><a href="IMA-Taller-Teatro.php">Taller Teatro</a></li>
                  
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
        <section id="cont-nota">
          <div class="nota">
            <h3>Actividades</h3>
            IMA-Escuela-de-Locución.php
          </div>
        </section>
        <!-- InstanceEndEditable --></div>  
    </section> 
  </section>
 
  <footer id="pie">

  </footer>  

</body>
<!-- InstanceEnd --></html>