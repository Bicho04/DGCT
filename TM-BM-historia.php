<?php header('Content-Type: text/html; charset=ISO-8859-15'); ?> 
<!DOCTYPE html>
<html lang="es"><!-- InstanceBegin template="/Templates/TeatroMunicipal.dwt" codeOutsideHTMLIsLocked="false" -->
<?php $entidad="c4ca4";?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2"/>
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Teatro Municioal Ignacio A. Pane</title> 
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
                        <li><a href="TM-OSCA-Director.php">Direcctor</a></li> 
                        <li><a href="TM-OSCA-Integrantes.php">Integrantes</a></li>
                      </ul>
                    </li>
                    <li><a href="#">OCMA</a>
                      <ul> 
                        <li><a href="TM-OCMA-Historia.php">Historia</a></li>  
                        <li><a href="TM-OCMA-Director.php">Direcctor</a></li> 
                        <li><a href="TM-OCMA-Integrantes.php">Integrantes</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Ballet Cl&aacute;sico y Folcl&oacute;rico Municipal</a>
                      <ul> 
                        <li><a href="TM-BCYFM-Historia.php">Historia</a></li>  
                        <li><a href="TM-BCYFM-Director.php">Direcctor</a></li> 
                        <li><a href="TM-BCYFM-Integrantes.php">Integrantes</a></li>
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
                 <h3>Resena historica</h3>
                 <p>El Ballet Cl�sico y Moderno Municipal sale de los par�metros convencionales de compan�as de danzas. No se puede catalogar a la compan�a como cl�sica o moderna pues su repertorio y sus bailarines interpretan perfectamente un &quot;Lago de los Cisnes&quot; o &quot;Don Quijote&quot; hasta las piezas m�s audaces de core�grafos contempor�neos como Oscar Araiz, Hilda Riveros y Ana Mar�a Stekelman. Tambi�n otra caracter�stica de la compan�a es interpretar los cl�sicos con un esp�ritu innovador y en los �ltimos anos ha sumado a su repertorio obras como &quot;Madame Butterfly&quot;, &quot;Los Tres Mosqueteros&quot;, &quot;La Viuda Alegre&quot;, &quot;Pas de deux Paraguayo&quot;, &quot;Despertar Campesino&quot;, &quot;Madame Lynch&quot;, &quot;Francesco&quot; que fueron estrenos mundiales en Paraguay.</p>
                 <p>El Ballet Cl�sico Municipal fue creado en la Ciudad de Asunci�n en 1972. Tala Ern de Retivoff fue su fundadora y su primera Directora. Pocos anos m�s tarde Teresa Capurro fusiona con el Ballet Moderno Municipal creado en 1971 por Mar�a Retivoff, adoptando el nombre de Ballet Cl�sico y Moderno Municipal.</p>
                 <p>Posteriormente tienen a su cargo la Direcci�n de la Compan�a: Teresa Capurro, Nidia Neumayer, Elizabeth Laurent, Alcy Acuna, Emilio Barrientos, Miguel Florenci�nez, Nicole Dijkhuis, Rub�n Franco. En 1990, Miguel Bonn�n asume la direcci�n implementando una reestructuraci�n de la Compan�a aumentando los horarios de trabajo para elevar el nivel t�cnico y art�stico. Desde este ano tambi�n realiza audiciones peri�dicas para que los bailarines puedan acceder al ballet. </p>
                 <p>En 1992 se crea la Asociaci�n de Amigos del Ballet Municipal desempenado un papel fundamental de apoyo al desarrollo del Ballet. </p>
                 <p>En estos 40 anos la Compan�a Municipal de la Ciudad de Asunci�n ha realizado grandes espect�culos, funciones de gala, de beneficencia, y difusi�n gratuita.La Compan�a se presenta en Asunci�n y en ciudades del interior del Paraguay asi como tambi�n en el extranjero en pa�ses como Brasil, Argentina, Uruguay, Panam� y Cuba. Cuenta con repertorio variado con m�s de cien obras presentadas, estrenadas e interpretadas tanto por grandes figuras nacionales e internacionales como Ana Botafogo, Cecilia Kerche, Nydia Neumayer, Karina Olmedo, Juan Pablo Ledo, Miguel �ngel Serrano, Alejandro Parente, Natalie Quernet y Olivie Patey, entre otros.</p>
                   <p>Tambi�n ha contado con creadores y maestros nacionales e internacionales como Mario Galizzi, Jaime Pinto, Osvaldo Beiro, Francoise Adret, Rafael Saladrigas, Doris Petroni, Misha Bart, Dulce D�az Somonte, Oliver Patey, Vitalij Iacovlev, Lupe Calzadilla, Francisco Carvallo, Robson Maia, Carmina Mart�nez, Mary Carmen Niella, Marilyn Candia, entre otros.</p>
                 <p>Actualmente el Ballet Cl�sico y Moderno Municipal es el elenco oficial del Teatro Municipal de la ciudad de Asunci�n.</p>
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