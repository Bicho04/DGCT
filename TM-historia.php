<?php header('Content-Type: text/html; charset=ISO-8859-15'); ?> 
<!DOCTYPE html>
<html lang="es"><!-- InstanceBegin template="/Templates/TeatroMunicipal.dwt" codeOutsideHTMLIsLocked="false" -->
<?php $entidad="c4ca4";?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-3"/>
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Teatro Municipal Ignacio A. Pane</title> 
	<!-- InstanceEndEditable -->
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
            <li><img src="imagenes/banner/TM-1.jpg" alt=""></li>
            <li><img src="imagenes/banner/TM-2.jpg" alt=""></li>
            <li><img src="imagenes/banner/TM-3.jpg" alt=""></li>
            <li><img src="imagenes/banner/TM-4.jpg" alt=""></li>
            <li><img src="imagenes/banner/TM-5.jpg" alt=""></li>
            <li><img src="imagenes/banner/TM-6.jpg" alt=""></li>
            <li><img src="imagenes/banner/TM-7.jpg" alt=""></li>
            <li><img src="imagenes/banner/TM-8.jpg" alt=""></li>
        </ul>
        <ul class="amazingslider-thumbnails" style="display:none; ">
            <li><img src="imagenes/banner/TM-1-tn.jpg" alt=""></li>
            <li><img src="imagenes/banner/TM-2-tn.jpg" alt=""></li>
            <li><img src="imagenes/banner/TM-3-tn.jpg" alt=""></li>
            <li><img src="imagenes/banner/TM-4-tn.jpg" alt=""></li>
            <li><img src="imagenes/banner/TM-5-tn.jpg" alt=""></li>
            <li><img src="imagenes/banner/TM-6-tn.jpg" alt=""></li>
            <li><img src="imagenes/banner/TM-7-tn.jpg" alt=""></li>
            <li><img src="imagenes/banner/TM-8-tn.jpg" alt=""></li>
        </ul>
    </div>
       
        
<!-- ******************************************************* -->
            </section>

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
              --><li class="col-3"><a href="TM-historia.php">Historia</a></li><!--
              --><li class="col-3"><a href="#">Espacios</a><!--
                --><ul class="col-3"><!-- 
                    --><li><a href="TM-IgnacioA.Pane.php">Ignacio A. Pane</a></li><!-- 
                    --><li><a href="TM-Baudio-Alio.php">Baudilio Alio</a></li><!-- 
                    --><li><a href="TM-Jacinto-Herrera.php">Jacinto Herrera</a></li><!-- 
                --></ul><!-- 
              --></li><!-- 
              --><li class="col-3"><a href="TM-Contactos.php">Contactos</a></li><!-- 
           --></ul>

        <nav id="botones-entidad">
                <ul id="botones-entidad-nav">
                    <li><a href="#">OSCA</a>
                      <ul> 
                        <li><a href="TM-OSCA-Historia.php">Historia</a></li>  
                        <li><a href="TM-OSCA-Director.php">Director</a></li> 
                        <li><a href="TM-OSCA-Integrantes.php">Integrantes</a></li>
                      </ul>
                    </li>
                    <li><a href="#">OCMA</a>
                      <ul> 
                        <li><a href="TM-OCMA-Historia.php">Historia</a></li>  
                        <li><a href="TM-OCMA-Director.php">Director</a></li> 
                        <li><a href="TM-OCMA-Integrantes.php">Integrantes</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Ballet Cl&aacute;sico y Moderno Municipal</a>
                      <ul> 
                        <li><a href="TM-BCYFM-Historia.php">Historia</a></li>  
                        <!-- <li><a href="TM-BCYFM-Director.php">Director</a></li>  -->
                        <!-- <li><a href="TM-BCYFM-Integrantes.php">Integrantes</a></li> -->
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
              <section id="cont-info">
                <div class="info">
                 <h3>Teatro Municipal</h3>
                 <h2>Historia</h2>
                 <img class="central"src="imagenes/fotos/Teatro Fachada 1.jpg" alt="Teatro Municipal">
                 <p>La historia del Teatro Municipal Ignacio A. Pan&eacute; comienza cuando la sala de sesiones del Congreso Nacional, construida en 1843, cambia su destino administrativo por uno vinculado con las artes. En 1853, el Maestro Francisco Dupuis recibe licencia para ense&ntilde;ar m&uacute;sica en las oficinas y en los corredores, y dos a&ntilde;os despu&eacute;s el edificio quedo convertido en Teatro Municipal. La inauguraci&oacute;n se realiz&oacute; el 04 de noviembre de 1855.</p>
                  <p>El Teatro Nacional desde entonces el mayor centro de irradiaci&oacute;n de la cultura en t&eacute;rminos de teatro y m&uacute;sica para los asuncenos. Incluso en la guerra de la Triple Alianza, el teatro nacional sigui&oacute; funcionando en las medidas de sus ya reducidas posibilidades, como un faro de la cultura tambi&eacute;n, de sentido y sentimiento de patria. Desde t&eacute;rminos de la guerra hasta mil novecientos ochenta y tantos, actuaron en el Teatro Nacional numerosos artistas paraguayos y extranjeros.</p>
                  <p>Gracias a que Asunci&oacute;n tiene su teatro abierto, artistas y m&uacute;sicos en gira llegan y contribuyen notablemente a la formaci&oacute;n del gusto en el cada d&iacute;a m&aacute;s exigente p&uacute;blico paraguayo.</p>
                  <p>Es solo un acto de justicia recordar que durante la primera mitad del siglo XX no  existi&oacute; en Asunci&oacute;n un edificio destinado a la cultura con las glorias del Teatro Municipal. M&aacute;s a&uacute;n entre 1940 y 1960, el escenario del Teatro Municipal reuni&oacute; a los mayores representantes de las artes esc&eacute;nicas en el Paraguay. En esa &eacute;poca el viejo Teatro Municipal era conocido ya por todos como &eacute;l. Teatro Municipal Ignacio A. Pane.</p>
                  <p>En t&eacute;rminos de historia edilicia, la segunda mitad del siglo XX vio en el Teatro Municipal un edificio que mantuvo sus caracter&iacute;sticas esenciales, pero que progresivamente fue objeto de adiciones al margen de su estilo constructivo. Una parte considerable de la madera usada en la construcci&oacute;n del teatro se hallaba en avanzad deterioro en las dos &uacute;ltimas d&eacute;cadas del siglo XX. Por otra arte. Crec&iacute;an los del uso del edificio. Todo esto motivo el cierre del teatro durante muchos anos.</p>
                  <p> <img class="lateral"src="imagenes/fotos/Teatro Fachada 2.jpg" alt="Teatro Municipal" >En 1997 comenz&oacute; el proceso restaurativo del edificio. Se comenzaron excavaciones en lo que fue el primer teatro en tiempos de la presidencia de Don Carlos Antonio L&oacute;pez. Junto con los trabajos arqueol&oacute;gicos se realizaron tambi&eacute;n investigaciones hist&oacute;ricas que demostraron que en ese lugar Los Trabajos prosiguieron hasta completar las obras en su totalidad, y de esa manera en 2006, el teatro quedo oficialmente habilitado para su uso.</p>
                  <p>Al poco tiempo de su habilitaci&oacute;n el Teatro Municipal recobraba el brillo de sus antiguas glorias con un remozamiento edilicio que hoy es orgullo de la ciudad y con una programaci&oacute;n que goza del entusiasta apoyo del p&uacute;blico. </p>
                  <p>Se&ntilde;oras y Senores El edificio cuenta con las siguientes instrucciones de salida de emergencia.</p>
                  <p>En el sector de platea se encuentran ubicadas dos puertas de salida de emergencia. A la derecha, con solo pulsar podr&aacute; acceder a la calle chile. Por el lado izquierdo, se puede acceder a la calle de Alberdi. </p>
                  <p>A dem&aacute;s de las puertas de ingreso y de salida cuentan con amplias puertas para la evacuaci&oacute;n </p>
                  <p>El primer nivel, tiene el mismo mecanismo pero las salidas de urgencias por los costados dan rumbo  a las escaleras que est&aacute;n plenamente se&ntilde;alizados.</p>
                  <p>El segundo nivel de los palcos tertulias se encuentra con las puertas laterales por izquierda y derecha para acceder a las escaleras tanto hacia la calle de chile y de Alberdi.</p>
                  <p>El tercer nivel, Palcos Para&iacute;so, tambi&eacute;n cuentan con dos salidas de emergencias por los laterales de izquierda y derecha para la salida a las escaleras. Todas las salidas est&aacute;n debidamente se&ntilde;alizadas. </p>
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