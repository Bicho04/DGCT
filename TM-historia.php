<?php header('Content-Type: text/html; charset=ISO-8859-15'); ?>
<!DOCTYPE html>
<html lang="es"><!-- InstanceBegin template="/Templates/TeatroMunicipal.dwt" codeOutsideHTMLIsLocked="false" --><?php $entidad="c4ca4";?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2"/>
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
        <section id="logocult"><a href="beta-index.php"><img src="imagenes/logo-04.png" alt="Teatro municipal Ig"></a></section>
         
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
      <div class="titulo"><h1>Teatro Municipal Ignacio A. Pane</h1></div>
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
                    <li><a href="TM-.php">OSCA</a></li>
                    <li><a href="TM-.php">Ballet</a></li>
                    <li><a href="TM-.php">Sala </a></li>
                    <li><a href="TM-.php">Sala Baudilio</a></li>
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
                 <h3>Teatro Municipal</h3>
                 <h2>Historia</h2>
                 <p>La historia del Teatro Municipal Ignacio A. Pane comienza cuando la sala de sesiones del Congreso Nacional, construida en 1843, cambia su destina administrativo por uno vinculado con las artes. En 1853, el Maestro Francisco Dupuis recibe licencia para ensenar música en las oficinas y en los corredores, y dos anos después el edificio quedo convertido en Teatro Municipal. La inauguración se realizó el 04 de noviembre de 1855.</p>
                  <p>El Teatro Nacional desde entonces el mayor centro de irradiación de la cultura en términos de teatro y música para los asuncenos. Incluso en la guerra de la Triple Alianza, el teatro nacional siguió funcionando en las medidas de sus ya reducidas posibilidades, como un faro de la cultura y,también, de sentido y sentimiento de patria. Desde términos de la guerra hasta mil novecientos ochenta y tantos, actuaron en el Teatro Nacional numerosos artistas paraguayos y extranjeros.</p>
                  <p>Gracias a que Asunción tiene su teatro abierto, artistas y músicos en gira llegan y contribuyen notablemente a la formación del gusto en el cada día más exigente público paraguayo.</p>
                  <p>Es solo un acto de justicia recordar que durante la primera mitad del siglo XX no  existió en Asunción un edificio destinado a la cultura con las glorias del Teatro Municipal. Más aún entre 1940 y 1960, el escenario del Teatro Municipal reunió a los mayores representantes de las artes escénicas en el Paraguay. En esa época el viejo Teatro Municipal era conocido ya por todos como él. Teatro Municipal Ignacio A. Pane.</p>
                  <p>En términos de historia edilicia, la segunda mitad del siglo XX vio en el Teatro Municipal un edificio que mantuvo sus características esenciales, pero que progresivamente fue objeto de adiciones al margen de su estilo constructivo. Una parte considerable de la madera usada en la construcción del teatro se hallaba en avanzad deterioro en las dos últimas décadas del siglo XX. Por otra arte. Crecían los del uso del edificio. Todo esto motivo el cierre del teatro durante muchos anos.</p>
                  <p>En 1997 comenzó el proceso restaurativo del edificio. Se comenzaron excavaciones en lo que fue el primer teatro en tiempos de la presidencia de Don Carlos Antonio López. Junto con los trabajos arqueológicos se realizaron también investigaciones históricas que demostraron que en ese lugar Los Trabajos prosiguieron hasta completar las obras en su totalidad, y de esa manera en 2006, el teatro quedo oficialmente habilitado para su uso.</p>
                  <p> Al poco tiempo de su habilitación el Teatro Municipal recobraba el brillo de sus antiguas glorias con un remozamiento edilicio que hoy es orgullo de la ciudad y con una programación que goza del entusiasta apoyo del público. </p>
                  <p>Senoras y Senores El edificio cuenta con las siguientes instrucciones de salida de emergencia.</p>
                  <p>En el sector de platea se encuentran ubicadas dos puertas de salida de emergencia. A la derecha, con solo pulsar podrá acceder a la calle chile. Por el lado izquierdo, se puede acceder a la calle de Alberdi. </p>
                  <p>A demás de las puertas de ingreso y de salida cuentan con amplias puertas para la evacuación </p>
                  <p>El primer nivel, tiene el mismo mecanismo pero las salidas de urgencias por los costados dan rumbo  a las escaleras que están plenamente senalizados.</p>
                  <p>El segundo nivel de los palcos tertulias se encuentra con las puertas laterales por izquierda y derecha para acceder a las escaleras tanto hacia la calle de chile y de Alberdi.</p>
                  <p>El tercer nivel, Palcos Paraíso, también cuentan con dos salidas de emergencias por los laterales de izquierda y derecha para la salida a las escaleras. Todas las salidas están debidamente senalizadas. </p>
                  <p> Rogamos mantener en silencio sus aparatos celulares por favor no la utilización de cámaras con flashes, Agradecemos su colaboración y consideración. Que disfruten del Espectáculo.</p>
                </div>
              </section>
              <!-- InstanceEndEditable --></div>  
    </section> 
  </section>
 
  <footer id="pie">

  </footer>  

</body>
<!-- InstanceEnd --></html>