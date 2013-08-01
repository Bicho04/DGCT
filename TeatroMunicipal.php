<!DOCTYPE html>
<html lang="es"><!-- InstanceBegin template="/Templates/TeatroMunicipal.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Teatro Municioal Ignacio A. Pane</title> 
	<!-- InstanceEndEditable -->
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
        <section id="logocult"><a href="beta-index.php"><img src="imagenes/logo-04.png" alt="Teatro municipal Ig"></a></section>
         
        <section id="logoasu"> <img src="imagenes/logo.png" alt="logo Asu"></section>
      </section>

    
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
      <div class="titulo"><h1>Teatro Municipal Ignacio A. Pane</h1></div>
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
              --><li class="col-5"><a href="#">Teatro Municipal</a><!-- 
                --><ul><!--
                  --><li><a href="TM-historia.php">Historia</a></li><!-- 
                  --><li><a href="TM-organigrama.php">Organigrama</a></li><!-- 
                  --><li><a href="TM-sala.php">Salas</a><!--
                    --><ul><!-- 
                          --><li><a href="TM-TgnacioA.Pane.php">Ignacio A. Pane</a></li><!-- 
                          --><li><a href="TM-Baudio-Alio.php">Baudilio Alio</a></li><!-- 
                          --><li><a href="TM-Jacinto-Herrera.php">Jacinto Herrera</a></li><!-- 
                          --><li><a href="TM-Integrantes.php">Integrantes</a></li><!--
                    --></ul><!-- 
                  --></li><!--
                  --></ul><!-- 
              --></li><!-- 
              --><li class="col-5"><a href="#">OSCA</a><!--
                --><ul><!-- 
                    --><li><a href="TM-OSCA-Historia.php">Historia</a></li><!-- 
                    --><li><a href="TM-OSCA-Luis-Zsaran.php">Luis Zsaran</a></li><!--
                    --><li><a href="TM-OSCA-Integrantes.php">Integrantes</a></li><!--
                --></ul><!-- 
              --></li><!-- 
              --><li class="col-5"><a href="#">OCMA</a><!--
              	--><ul><!-- 
                	--><li><a href="TM-OCMA-Historia.php">Historia</a></li><!--  
                    --><li><a href="TM-OCMA-Director.php">Biografia del direcctor</a></li><!-- 
              		--><li><a href="TM-OCMA-Integrantes.php">Integrantes</a></li><!--
                --></ul><!-- 
              --></li><!-- 
              
              --><li class="col-5"><a href="#">Ballet Municipal</a><!-- 
                --><ul><!-- 
                    --><li><a href="TM-BM-historia.php">Historia</a></li><!-- 
                --></ul><!-- 
              --></li><!--
              --><li class="col-5"><a href="TM-Contactos.php">Contactos</a></li><!-- 
           --></ul>

        <nav id="botones-entidad">
                <ul id="botones-entidad-nav">
                    <li><a href="TM-.php">Osca</a></li>
                    <li><a href="TM-.php">Ballet</a></li>
                    <li><a href="TM-.php">Sala </a></li>
                    <li><a href="TM-.php">Sala Baudilio</a></li>
                </ul>
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