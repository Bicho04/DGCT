<?php header('Content-Type: text/html; charset=ISO-8859-15'); ?> 
<!DOCTYPE html>
<html lang="es"><!-- InstanceBegin template="/Templates/InstitutoMunicipalDeArte.dwt" codeOutsideHTMLIsLocked="false" -->
<?php $entidad="c81e7";?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2"/>
<title>Instituto Musnicipal de Arte</title> 
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

            <section id="logocult"><a href="beta-index.php"><img src="imagenes/DGCT2.png" alt="Direccion General de Cultura y Turismo" ></a></section>
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
              --><li class="col-4"><a href="IMA-Resena-Historica.php">Historia</a></li><!-- 
              --><li class="col-4"><a href="IMA-Espacios.php">Espacios</a></li><!-- 
              --><li class="col-4"><a href="IMA-Futura-Sede.php">Futura sede</a></li><!-- 
              --><li class="col-4"><a href="IMA-Contacto.php">Contacto</a></li><!-- 
           --></ul>

        <nav id="botones-entidad">
                <ul id="botones-entidad-nav">
                      <li><a href="IMA-Escuela-de-Arte-Infantil.php">Escuela Municipal de Arte Infantil</a><!--
                      <ul>
                        <li><a href="IMA-EAI-historia">Historia</a></li>
                        <li><a href="IMA-EAI-Contenido">Contenido</a></li>
                        <li><a href="IMA-EAI-Requisitos">Requisitos</a></li>
                        <li><a href="IMA-EAI-Ubicacion">Ubicaci&oacute;n</a></li>
                      </ul>
                   --> </li>
                    <li><a href="IMA-Escuela-de-Arte-Dramatico.php">Escuela Municipal de Arte Dram&aacute;tico</a>
                     <!--  <ul>
                        <li><a href="IMA-AD-historia">Historia</a></li>
                        <li><a href="IMA-AD-Contenido">Contenido</a></li>
                        <li><a href="IMA-AD-Requisitos">Requisitos</a></li>
                        <li><a href="IMA-AD-Ubicacion">Ubicaci&oacute;n</a></li>
                      </ul> -->
                    </li>
                    <li><a href="IMA-Escuela-de-Danza.php">Escuela Municipal de Danza</a>
                     <!--  <ul>
                        <li><a href="IMA-ED-historia">Historia</a></li>
                        <li><a href="IMA-ED-Contenido">Contenido</a></li>
                        <li><a href="IMA-ED-Requisitos">Requisitos</a></li>
                        <li><a href="IMA-ED-Ubicacion">Ubicaci&oacute;n</a></li>
                      </ul> -->
                    </li>
                    <li><a href="IMA-Conservatorio-de-Musica.php">Conservatorio Municipal de M&uacute;sica</a>
                      <!-- <ul>
                        <li><a href="IMA-CM-historia">Historia</a></li>
                        <li><a href="IMA-CM-Contenido">Contenido</a></li>
                        <li><a href="IMA-CM-Requisitos">Requisitos</a></li>
                        <li><a href="IMA-CM-Ubicacion">Ubicaci&oacute;n</a></li>
                      </ul> -->
                    </li>
                    <li><a href="IMA-Escuela-de-Locucion.php">Escuela Municipal de Locuci&oacute;n</a>
                     <!--  <ul>
                        <li><a href="IMA-EL-historia">Historia</a></li>
                        <li><a href="IMA-EL-Contenido">Contenido</a></li>
                        <li><a href="IMA-EL-Requisitos">Requisitos</a></li>
                        <li><a href="IMA-EL-Ubicacion">Ubicaci&oacute;n</a></li>
                      </ul> -->
                    </li>
                    <li><a href="IMA-Escuela-de-Canto.php">Escuela Municipal de Canto</a>
                      <!-- <ul>
                        <li><a href="IMA-EC-historia">Historia</a></li>
                        <li><a href="IMA-EC-Contenido">Contenido</a></li>
                        <li><a href="IMA-EC-Requisitos">Requisitos</a></li>
                        <li><a href="IMA-EC-Ubicacion">Ubicaci&oacute;n</a></li>
                      </ul> -->
                    </li>
                    <li><a href="IMA-Taller-Teatro.php">Taller Municipal Teatro</a>
                      <!-- <ul>
                        <li><a href="IMA-TT-historia">Historia</a></li>
                        <li><a href="IMA-TT-Contenido">Contenido</a></li>
                        <li><a href="IMA-TT-Requisitos">Requisitos</a></li>
                        <li><a href="IMA-TT-Ubicacion">Ubicaci&oacute;n</a></li>
                      </ul> -->
                    </li>
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
            <?php $entidad="c81e7";include("actividadesdeldia.inc.php");?>
          </div>
        </section>
        <!-- InstanceEndEditable --></div>  
    </section> 
  </section>
 
  <footer>
     <nav id="menu-Logos">
       <ul id="nav-logos">   
          <li class="logoentidad"><a class="TeatroMunicipal" href="TeatroMunicipal.php"></a></li>
          <li class="logoentidad"><a class="InstitutoMunicipalDeArte" href="InstitutoMunicipalDeArte.php"></a></li>
          <li class="logoentidad"><a class="ManzanaDeLaRivera" href="ManzanaDeLaRivera.php"></a></li>
          <li class="logoentidad"><a class="CentroParaguayoJapones" href="CentroParaguayoJapones.php"></a></li>
          <li class="logoentidad"><a class="DierccionDeAccionCulturalYTurismo" href="DierccionDeAccionCulturalYTurismo.php"></a></li>
      </ul>
   </nav>
  </footer>

</body>
<!-- InstanceEnd --></html>