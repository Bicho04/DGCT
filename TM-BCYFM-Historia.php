<?php header('Content-Type: text/html; charset=ISO-8859-15'); ?> 
<!DOCTYPE html>
<html lang="es"><!-- InstanceBegin template="/Templates/TeatroMunicipal.dwt" codeOutsideHTMLIsLocked="false" -->
<?php $entidad="c4ca4";?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2"/>
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
                <h3>Rese&ntilde;a Hist&oacute;rica</h3>
                <h2>Orquesta de Camara de la Ciudad de Asunci&oacute;n</h2>
                <p>El Ballet Cl&aacute;sico y Moderno Municipal sale de los par&aacute;metros convencionales de compan&iacute;as de danzas. No se puede catalogar a la compan&iacute;a como cl&aacute;sica o moderna pues su repertorio y sus bailarines interpretan perfectamente un "Lago de los Cisnes" o "Don Quijote" hasta las piezas m&aacute;s audaces de core&oacute;grafos contempor&aacute;neos como Oscar Araiz, Hilda Riveros y Ana Mar&iacute;a Stekelman. Tambi&eacute;n otra caracter&iacute;stica de la compan&iacute;a es interpretar los cl&aacute;sicos con un esp&iacute;ritu innovador y en los &uacute;ltimos a&ntilde;os ha sumado a su repertorio obras como "Madame Butterfly", "Los Tres Mosqueteros", "La Viuda Alegre", "Pas de deux Paraguayo", "Despertar Campesino", "Madame Lynch", "Francesco" que fueron estrenos mundiales en Paraguay.</p>

                <p>El Ballet Cl&aacute;sico Municipal fue creado en la Ciudad de Asunci&oacute;n en 1972. Tala Ern de Retivoff fue su fundadora y su primera Directora. Pocos a&ntilde;os m&aacute;s tarde Teresa Capurro lo fusiona con el Ballet Moderno Municipal creado en 1971 por Mar&iacute;a Retivoff, adoptando el nombre de Ballet Cl&aacute;sico y Moderno Municipal.</p>

                <p>Posteriormente tienen a su cargo la Direcci&oacute;n de la Compan&iacute;a: Teresa Capurro, Nidia Neumayer, Elizabeth Laurent, Alcy Acuna, Emilio Barrientos, Miguel Florenci&aacute;nez, Nicole Dijkhuis, Rub&eacute;n Franco. En 1990, Miguel Bonn&iacute;n asume la direcci&oacute;n implementando una reestructuraci&oacute;n de la Compan&iacute;a aumentando los horarios de trabajo para elevar el nivel t&eacute;cnico y art&iacute;stico. Desde este a&ntilde;o tambi&eacute;n realiza audiciones peri&oacute;dicas para que los bailarines puedan acceder al ballet.</p>

                <p>En 1992 se crea la Asociaci&oacute;n de Amigos del Ballet Municipal desempe&ntilde;ado un papel fundamental de apoyo al desarrollo del Ballet. </p>

               <p> En estos 40 a&ntilde;os la Compan&iacute;a Municipal de la Ciudad de Asunci&oacute;n ha realizado grandes espect&aacute;culos, funciones de gala, de beneficencia, y difusi&oacute;n gratuita.La Compan&iacute;a se presenta en Asunci&oacute;n y en ciudades del interior del Paraguay asi como tambi&eacute;n en el extranjero en pa&iacute;ses como Brasil, Argentina, Uruguay, Panam&aacute; y Cuba. Cuenta con repertorio variado con m&aacute;s de cien obras presentadas, estrenadas e interpretadas tanto por grandes figuras nacionales e internacionales como Ana Botafogo, Cecilia Kerche, Nydia Neumayer, Karina Olmedo, Juan Pablo Ledo, Miguel &aacute;ngel Serrano, Alejandro Parente, Natalie Quernet y Olivie Patey, entre otros.</p>
              <p>Tambi&eacute;n ha contado con creadores y maestros nacionales e internacionales como Mario Galizzi, Jaime Pinto, Osvaldo Beiro, Francoise Adret, Rafael Saladrigas, Doris Petroni, Misha Bart, Dulce D&iacute;az Somonte, Oliver Patey, Vitalij Iacovlev, Lupe Calzadilla, Francisco Carvallo, Robson Maia, Carmi&ntilde;a Mart&iacute;nez, Mary Carmen Niella, Marilyn Candia, entre otros.</p>

              <p>Actualmente el Ballet Cl&aacute;sico y Moderno Municipal es el elenco oficial del Teatro Municipal de la ciudad de Asunci&oacute;n.</p>

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