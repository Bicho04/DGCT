<?php header('Content-Type: text/html; charset=ISO-8859-15'); ?>
<!DOCTYPE html>
<html lang="es"><!-- InstanceBegin template="/Templates/DireccionDeAccionCulturalYTurismo.dwt" codeOutsideHTMLIsLocked="false" -->
<?php $entidad="e4da3  ";?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2"/>
<title>Diercci&oacute;n de Acci&oacute;n Cultural y Turismo</title> 
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
      <div class="titulo"><h1>Dirercci&oacute;n de Acci&oacute;n Cultural y Turismo</h1></div>
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
              --><li class="col-2"><a href="#">Historia</a></li><!-- 
              
              --><li class="col-2"><a href="#">Contacto</a></li><!-- 
           --></ul>

        <nav id="botones-entidad">
                <ul id="botones-entidad-nav">
                    <li><a href="#">Banda Folcl&oacute;rico Municipal</a>
                      <ul> 
                        <li><a href="DACT-Banda-folclorico-municipal-Historia.php">Historia</a></li>  
                        <li><a href="DACT-Banda-folclorico-municipal-Director.php">Direcctor</a></li> 
                        <li><a href="DACT-Banda-folclorico-municipal-Integrantes.php">Integrantes</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Ballet Folcl&oacute;rico Municipal</a>
                      <ul> 
                        <li><a href="DACT-Ballet-folclorico-municipal-Historia.php">Historia</a></li>  
                        <li><a href="DACT-Ballet-folclorico-municipal-Director.php">Direcctor</a></li> 
                        <li><a href="DACT-Ballet-folclorico-municipal-Integrantes.php">Integrantes</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Conjunto Folcl&oacute;rico Municipal</a>
                      <ul> 
                        <li><a href="DACT-Conjunto-folclorico-municipal-Historia.php">Historia</a></li>  
                        <li><a href="DACT-Conjunto-folclorico-municipal-Director.php">Direcctor</a></li> 
                        <li><a href="DACT-Conjunto-folclorico-municipal-Integrantes.php">Integrantes</a></li>
                      </ul>
                    </li>
                    <li><a href="DACT-Evento-Turismo.php">Evento y Turismo</a></li>
                    <li><a href="#">Plazas tematicas</a>
                      <ul>
                        <li1><a href="DACT-Plaza-Uruguaya.php">Plaza Uruguaya</a></li1>
                        <li2><a href="DACT-Plaza-Italia.php">Plaza Italia</a></li2>
                        <li3><a href="DACT-Plaza-Infante Rivarola.php">Plaza Infante Rivarola</a></li3>
                      </ul>
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
 
  <footer>
     <nav id="menu-Logos">
       <ul id="nav-logos">   
          <li><a href="TeatroMunicipal.php"><img src="imagenes/Logo-TeatroMunicipal.png" alt="Teatro Municipal Ignacio A. Pane"></a></li>
          <li><a href="InstitutoMunicipalDeArte.php"><img src="imagenes/Logo-IMA.png" ></a></li>
          <li><a href="ManzanaDeLaRivera.php"><img src="imagenes/Logo-Manzana.png" ></a></li>
          <li><a href="CentroParaguayoJapones.php"><img src="imagenes/Logo-CPJ.png" ></a></li>
          <li><a href="DierccionDeAccionCulturalYTurismo.php"><img src="imagenes/Logo-DACT.png" alt="Diercci�n de Acci�n Cultural y Turismo"></a></li>
      </ul>
   </nav>
  </footer> 

</body>
<!-- InstanceEnd --></html>