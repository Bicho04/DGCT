<?php header('Content-Type: text/html; charset=ISO-8859-15'); ?> 
<!DOCTYPE html>
<html lang="es"><!-- InstanceBegin template="/Templates/centroParaguayoJapones.dwt" codeOutsideHTMLIsLocked="false" -->
<?php $entidad="a87ff";?> 
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2"/>
<title>Centro Paraguayo Japon&eacute;s</title> 
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
      <div class="titulo"><h1>Centro Paraguayo Japon&eacute;s</h1></div>
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
              --><li class="col-4"><a href="CPJ-historia.php">Historia</a></li><!-- 
              --><li class="col-4"><a href="CPJ-Contacto.php">Asocia&oacute;n Paraguayo Japonesa</a></li><!-- 
              --><li class="col-4"><a href="#">Espacios</a><!-- 
                --><ul class="col-4"><!-- 
                    --><li><a href="CPJ-Sala-TeatroAPB.php">Teatro Agust&iacute;n P&iacute;o Barrios</a></li><!--
                    --><li><a href="CPJ-Sala-Seminario.php">Sala Seminario Branislava Susnik</a><!--
                    --><li><a href="CPJ-Sala-Anfiteatro.php">Anfiteatro Oscar Cardozo Ocampo</a></li><!--
                    --><li><a href="CPJ-Sala-Exposicion.php">Sala de Exposiciones Jacinto Rivero</a></li><!--
                    --><li><a href="CPJ-Sala-Reuniones.php">Sala de Reuniones Agustina Miranda</a></li><!--
                    --><li><a href="CPJ-Sala-Biblioteca.php">Biblioteca Herib Campos Cervera</a></li><!--
                --></ul><!-- 
              --></li><!-- 
              --><li class="col-4"><a href="CPJ-Contacto.php">Contacto</a></li><!-- 
           --></ul>

        <nav id="botones-entidad">
                <ul id="botones-entidad-nav">
                    <li><a href="CPJ-Sala-Seminario.php">Salon Seminario</a></li><!--
                    --><li><a href="CPJ-">Cursos</a><!-- 
                      --><ul><!-- 
                          --><li><a href="CPJ-Cursos-Computacion.php">Computacion</a></li><!--
                         --><li><a href="CPJ-Cursos-Idiomas.php">Idiomas</a></li><!--
                         --><li><a href="CPJ-Cursos-Danza.php">Danza</a></li><!--
                          --><li><a href="CPJ-Cursos-Musica.php">M&uacute;sica</a><!--
                      --></ul><!-- 
                    --></li><!-- 
                    --><li><a href="CPJ-">Cursos</a><!-- 
                      --><ul><!-- 
                          --><li><a href="CPJ-Cursos-Gimnasia-Artistica.php">Gimnasia Art&iacute;stica</a></li><!--
                          --><li><a href="CPJ-Cursos-Gimnasio.php">Gimnasio</a></li><!--
                          --><li><a href="CPJ-Cursos-Artes-Marciales.php">Artes Marciales</a></li><!--
                    	--></ul><!-- 
                    --></li><!-- 
                    --><li><a href="CPJ-Sala-TeatroAPB.php">Teatro Agust&iacute;n Pio Barrios</a></li><!-- 
                    --><li><a href="CPJ-Sala-Seminario.php">Sal&oacute;n Seminario Branislava Susnik</a></li><!-- 
                    --><li><a href="CPJ-Sala-Exposicion.php">Sala de Exposiciones Jacinto Rivero</a></li><!--
                    --><li><a href="CPJ-Sala-Reuniones.php">Sala de Reuniones Agustina Miranda</a></li><!--
                    --><li><a href="CPJ-Sala-Biblioteca.php">Biblioteca Herib Campo Cervera</a></li><!--
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
                    <h3>Historia</h3>
                    <h2>El Centro Paraguayo Japonés</h2>
 <P>El Centro Paraguayo Japonés Para el Desarrollo de los RecursosHumanos, es la primera Institución integral para las actividades deeducación social en el Paraguay. Fue inaugurado el 23 de agosto de1988. Construida sobre una superficie de 7000 m2. Donado por elGobierno y Pueblo del Japón a gracias a una asistencia financiera noreembolsable de carácter general  por valor de 1.541.000.000 yenes.</P>
<P>Su construcción se inició el 2 de octubre de 1986 con la palada
inicial realizada por sus Altezas Imperiales, el Príncipe  Hitachi y
la Princesa Hanako quienes visitaron en aquella ocasión el Paraguay
para asistir a los actos conmemorativos del cincuentenario de la
emigración Japonesa.</P>

<h2>Es administrada por la Municipalidad de Asunción al servicio de la ciudadanía</h2>
<p>El Centro Paraguayo Japonés para el Desarrollo de Recursos Humanos, en el transcurso del tiempo, adquirió una identidad propia y a lo largo de estos 25 anos ha cumplido con su objetivo de servir a la comunidad.</p>
<p>Como su nombre lo indica, uno de los ejes del Centro Paraguayo Japonés es la promoción de los Recursos Humanos, centrado principalmente en la formación de jóvenes paraguayos para posibilitar su ingreso al mercado de trabajo, habilitándolos en el campo de la informática, el conocimiento de idiomas, las artes plásticas, la música, la danza y los deportes.</p>
<p>Fue creado como punto insustituible de encuentro, cooperación e
integración de ciudadanos paraguayos y japoneses.</p>
<p>Los institutos de formación, los artistas y trabajadores culturales encuentran en este Centro un espacio y un punto de apoyo para el desarrollo de sus actividades en condiciones flexibles.</p>
<p>El CPJ es frecuentemente utilizado por delegaciones diplomáticas, grupos de artistas y agentes culturales, nacionales e internacionales, gremios de profesionales, académicas, empresariales y uno de los sitios permanentes para los programas educativos y culturales que encara la Municipalidad de Asunción.</p>
<a name="recursosHumanos"></a><h2>Para el Desarrollo de los Recursos Humanos</h2>
<p>En 25 anos de trayectoria el Centro Paraguayo Japonés ha contribuido con la ciudadanía en el desarrollo de los recursos humanos ofreciendo cursos de capacitación a costos muy accesibles, dirigidos a ninos, jóvenes y adultos insertándolos en el campo laboral con herramientas sustentables.</p>
<p>Ofrece cursos de idiomas, computación, danza, música, artes visuales, y deportes.</p> 
<p>Idiomas: clases de Inglés, japonés, portugués, francés, alemán, italiano, mandarín  y castellano para extranjeros. En horarios manana, tarde y noche. En niveles kinder, ninos, junior, jóvenes y adultos</p> 
<p>Cuenta con un importante laboratorio audiovisual con proyector y conexión a  Internet</p>
<p>Computación: Clases de operador básico y avanzado, dactilografía computarizada y Programador.</p>
<p>Con equipos con  Procesador Intel Dual Core de 8 GHZ, 5GB de Memoria RAM, Disco Duro de 500 GB, Lector Grabador de DVD y Monitor de 19'' LCD, y todas las máquinas cuentan con sistema operativo  indows Seven profesional. Conexión a Internet.</p>
<p>Clases especiales para ninos, jóvenes, adultos y grupos especiales para la tercera edad.</p>
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