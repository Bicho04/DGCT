<!DOCTYPE html>
<html lang="es"><?php $entidad="c81e7";?><!-- InstanceBegin template="/Templates/InstitutoMunicipalDeArte.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
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
 
  <section id="contenido">
    <header id="cabecera">
      <section id="logo-grupo">
        <section id="logocult"><a href="beta-index.php"><img src="imagenes/logo-09.png" alt="Instituto municipal de arte de la ciudad de Asunción" ></a></section>
         
        <section id="logoasu"> <img src="imagenes/logo.png" alt="logo Asu"></section>
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
          <div class="titulo2">Agenda de la ciudad</div>
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
              --><li class="col-2"><a href="#">El I.M.A.</a><!-- 
                --><ul><!-- 
                    --><li><a href="IMA-Resena-Historica.php">Reseña histórica</a></li><!-- 
                    --><li><a href="IMA-Mision-Vision.php">Misión/Visión</a></li><!-- 
                --></ul><!-- 
              --></li><!-- 
              --><li class="col-2"><a href="IMA-Contacto.php">Contacto</a></li><!-- 
           --></ul>

        <nav id="botones-entidad">
                <ul id="botones-entidad-nav">
                    <li><a href="IMA-Escuela-de-Arte-Infantil.php">Escuela de Arte Infantil</a></li>
                    <li><a href="IMA-Escuela-de-Arte-Dramático.php">Escuela de Arte Dramático</a></li>
                    <li><a href="IMA-Escuela-de-Danza.php">Escuela de Danza</a></li>
                    <li><a href="IMA-Conservatorio-de-Música.php">Conservatorio de Música</a></li>
                    <li><a href="IMA-Escuela-de-Locución.php">Escuela de Locución</a></li>
                    <li><a href="IMA-Escuela-de-Canto.php">Escuela de Canto</a></li>
                    <li><a href="IMA-Taller-Teatro.php">Taller Teatro</a></li>
                  
                </ul>

        <aside id="menu-social">
          <ul id="nav-social">
            <li><a href="mailto:direcciondeturismo@mca.gov.py"><img src="imagenes/email.png" ></a></li>
            <li><a href="https://www.facebook.com/CulturaAsu"><img src="imagenes/facebook.png" ></a></li>
            <li><a href="#"><img src="imagenes/twitter.png" ></a></li>
            <li><a href="#"><img src="imagenes/skype.png" ></a></li>
            <li><a href="#"><img src="imagenes/youtube.png" ></a></li>
            <li><a href="#"><img src="imagenes/googleplus.png" ></a></li>
          </ul>
      </aside>

              </nav>
        <!-- InstanceBeginEditable name="INFO" -->
       
                  <?php 
                      $pagina="actividadesdeldia.inc.php";
                      if(isset($_GET['codigoevento']))
					  {
						?>
                          <section id="cont-info">
								  <?php  
                      $pagina="ampliar.actividadesdeldia.inc.php";
					
                              include("$pagina");
                           ?></section>
                           <?php
					  }
					  else
					  {
						  ?>
                          <section id="cont-nota">
								  <?php
                              include("$pagina");
                              ?></section>
                              <?php
					  }
					  ?>
        <!-- InstanceEndEditable --></div>  
    </section> 
  </section>
 
  <footer id="pie">

  </footer>  

</body>
<!-- InstanceEnd --></html>