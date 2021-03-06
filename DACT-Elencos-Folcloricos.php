<?php header('Content-Type: text/html; charset=ISO-8859-15'); ?>

<!DOCTYPE html>

<html lang="es"><!-- InstanceBegin template="/Templates/DireccionDeAccionCulturalYTurismo.dwt" codeOutsideHTMLIsLocked="false" --><?php $entidad="e4da3";?>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2"/>

<title>Diercci&oacute;n de Acci&oacute;n Cultural y Turismo</title> 

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

  <!-- ******************************* ANALYTICS *******************************************  -->

        <script>

          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');



          ga('create', 'UA-42889888-1', 'culturayturismoasu.com.py');

          ga('send', 'pageview');



        </script>

    <!-- ************************************************************************************* -->

 

  <section id="contenido">

    <header id="cabecera">

      <section id="logo-grupo">

        <section id="logocult"><a href="beta-index.php"><img src="imagenes/logo-07.png" alt="Diercci�n de Acci�n Cultural y Turismo" ></a></section>

         

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

          <li><a href="DierccionDeAccionCulturalYTurismo.php"><img src="imagenes/logo-07.png" alt="Diercci�n de Acci�n Cultural y Turismo"></a></li>

        </ul>

      </nav>



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

              --><li class="col-3"><a href="DACT-Historia.php">Historia</a></li><!-- 

              --><li class="col-3"><a href="DACT-Elencos-Folcloricos.php">Elencos Folcloricos</a><!-- 

                --><ul><!-- 

                    --><li><a href="DACT-Elenco-Banda-folclorica.php">Banda</a></li><!-- 

                    --><li><a href="DACT-Elenco-Ballet-folclorico.php">Ballet</a></li><!--  

                    --><li><a href="DACT-Elenco-Conjunto-folclorico.php">Conjunto Folclorico</a></li><!--  

                --></ul><!-- 

              --></li><!-- 

              --><li class="col-3"><a href="DACT-Contacto.php">Contacto</a></li><!-- 

           --></ul>



        <nav id="botones-entidad">

                <ul id="botones-entidad-nav">

                    <li><a href="DACT-Elenco-Banda-folclorica.php">Elencos Folcl&oacute;ricos</a></li>

                    <li><a href="DDACT-Elenco-Ballet-folclorico.php">Escenario M&oacute;vil</a></li>

                    <li><a href="lelnco-Conjunto-folclorico.php">Plazas tematicas</a></li>

                  

                </ul>



                <aside id="menu-social">

                  <ul id="nav-social">

                    <li><a href="mailto:direcciondeturismo@mca.gov.py"><img src="imagenes/email.png" width="45"></a></li>

                    <li><a href="https://www.facebook.com/TurismoAsu?fref=pb"><img src="imagenes/facebook.png" width="45"></a></li>

                    <li><a href="#"><img src="imagenes/twitter.png" width="45"></a></li>

                    <li><a href="#"><img src="imagenes/skype.png" width="45"></a></li>

                    <li><a href="#"><img src="imagenes/youtube.png" width="45"></a></li>

                    <li><a href="#"><img src="imagenes/googleplus.png" width="45"></a></li> 

                  </ul>

                </aside>



            </nav>

        <!-- InstanceBeginEditable name="INFO" -->

        <section id="cont-info">

          <h2>Elencos Floncloricos</h2>

          <div class="info">

            <h3>Bandas</h3>

          </div>

          <div class="info">

            <h3>Ballet</h3>

          </div>

          <div class="info">

            <h3>Conjunto Floncloricos</h3>

          </div>

        </section>

        <!-- InstanceEndEditable --></div>  

    </section> 

  </section>

 

  <footer id="pie">



  </footer>  



</body>

<!-- InstanceEnd --></html>