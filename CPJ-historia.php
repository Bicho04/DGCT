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
            <li><img src="imagenes/banner/CPJ-1.jpg" alt=""></li>
            <li><img src="imagenes/banner/CPJ-2.jpg" alt=""></li>
            <li><img src="imagenes/banner/CPJ-3.jpg" alt=""></li>
            <li><img src="imagenes/banner/CPJ-4.jpg" alt=""></li>
            <li><img src="imagenes/banner/CPJ-5.jpg" alt=""></li>
            <li><img src="imagenes/banner/CPJ-6.jpg" alt=""></li>
        </ul>
        <ul class="amazingslider-thumbnails" style="display:none; ">
            <li><img src="imagenes/banner/CPJ-1-tn.jpg" alt=""></li>
            <li><img src="imagenes/banner/CPJ-2-tn.jpg" alt=""></li>
            <li><img src="imagenes/banner/CPJ-3-tn.jpg" alt=""></li>
            <li><img src="imagenes/banner/CPJ-4-tn.jpg" alt=""></li>
            <li><img src="imagenes/banner/CPJ-5-tn.jpg" alt=""></li>
            <li><img src="imagenes/banner/CPJ-6-tn.jpg" alt=""></li>
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
              --><li class="col-3"><a href="CPJ-historia.php">Historia</a></li><!-- 
              --><li class="col-3"><a href="#">Espacios</a><!-- 
                --><ul class="col-3"><!-- 
                    --><li><a href="CPJ-Sala-TeatroAPB.php">Teatro Agust&iacute;n P&iacute;o Barrios</a></li><!--
                    --><li><a href="CPJ-Sala-Seminario.php">Sala Seminario Branislava Susnik</a><!--
                    --><li><a href="CPJ-Sala-Anfiteatro.php">Anfiteatro Oscar Cardozo Ocampo</a></li><!--
                    --><li><a href="CPJ-Sala-Exposicion.php">Sala de Exposiciones Jacinto Rivero</a></li><!--
                    --><li><a href="CPJ-Sala-Reuniones.php">Sala de Reuniones Agustina Miranda</a></li><!--
                    --><li><a href="CPJ-Sala-Biblioteca.php">Biblioteca Herib Campos Cervera</a></li><!--
                --></ul><!-- 
              --></li><!-- 
              --><li class="col-3"><a href="CPJ-Contacto.php">Contacto</a></li><!-- 
           --></ul>

         

        <nav id="botones-entidad">
                <ul id="botones-entidad-nav">
                    <li><a href="CPJ-Cursos-Musica.php">Conservatorio de M&uacute;sica</a></li>
                    <li><a href="CPJ-Cursos-Gimnasio.php">Gimnasio</a></li>
                    <li><a href="CPJ-Cursos-Danza.php">Academia de Danza</a></li>
                    <li><a href="CPJ-Cursos-Idiomas.php">Idiomas</a></li>
                    <li><a href="CPJ-Cursos-Artes.php">Artes</a></li>
                    <li><a href="CPJ-Cursos-Computacion.php">Computaci&oacute;n</a></li>
                    

                <aside id="menu-social">
                  <ul id="nav-social">
                    <li><a href="mailto:centroparaguayojapones@gmail.com"><img src="imagenes/email.png" width="45"></a></li>
                    <li><a href="https://www.facebook.com/pages/Centro-Paraguayo-Japon%C3%A9s/258898532086?fref=ts"><img src="imagenes/facebook.png" width="45"></a></li>
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
                    <img src="imagenes/fotos/DSC_0001.jpg" class="central">
                  <h2>El Centro Paraguayo Japon&eacute;s</h2>
 <P>El Centro Paraguayo Japon&eacute;s Para el Desarrollo de los RecursosHumanos, es la primera Instituci&oacute;n integral para las actividades deeducaci&oacute;n social en el Paraguay. Fue inaugurado el 23 de agosto de1988. Construida sobre una superficie de 7000 m2. Donado por elGobierno y Pueblo del Jap&oacute;n a gracias a una asistencia financiera noreembolsable de car&aacute;cter general  por valor de 1.541.000.000 yenes.</P>
<P>Su construcci&oacute;n se inici&oacute; el 2 de octubre de 1986 con la palada
inicial realizada por sus Altezas Imperiales, el Pr&iacute;ncipe  Hitachi y
la Princesa Hanako quienes visitaron en aquella ocasi&oacute;n el Paraguay
para asistir a los actos conmemorativos del cincuentenario de la
emigraci&oacute;n Japonesa.</P>

<h2>Es administrada por la Municipalidad de Asunci&oacute;n al servicio de la ciudadan&iacute;a</h2>
<p>El Centro Paraguayo Japon&eacute;s para el Desarrollo de Recursos Humanos, en el transcurso del tiempo, adquiri&oacute; una identidad propia y a lo largo de estos 25 anos ha cumplido con su objetivo de servir a la comunidad.</p>
<p>Como su nombre lo indica, uno de los ejes del Centro Paraguayo Japon&eacute;s es la promoci&oacute;n de los Recursos Humanos, centrado principalmente en la formaci&oacute;n de j&oacute;venes paraguayos para posibilitar su ingreso al mercado de trabajo, habilit&aacute;ndolos en el campo de la inform&aacute;tica, el conocimiento de idiomas, las artes pl&aacute;sticas, la m&uacute;sica, la danza y los deportes.</p>
<p>Fue creado como punto insustituible de encuentro, cooperaci&oacute;n e
integraci&oacute;n de ciudadanos paraguayos y japoneses.</p>
<p>Los institutos de formaci&oacute;n, los artistas y trabajadores culturales encuentran en este Centro un espacio y un punto de apoyo para el desarrollo de sus actividades en condiciones flexibles.</p>
<p>El CPJ es frecuentemente utilizado por delegaciones diplom&aacute;ticas, grupos de artistas y agentes culturales, nacionales e internacionales, gremios de profesionales, acad&eacute;micas, empresariales y uno de los sitios permanentes para los programas educativos y culturales que encara la Municipalidad de Asunci&oacute;n.</p>
<a name="recursosHumanos"></a><h2>Para el Desarrollo de los Recursos Humanos</h2>
<p>En 25 anos de trayectoria el Centro Paraguayo Japon&eacute;s ha contribuido con la ciudadan&iacute;a en el desarrollo de los recursos humanos ofreciendo cursos de capacitaci&oacute;n a costos muy accesibles, dirigidos a ninos, j&oacute;venes y adultos insert&aacute;ndolos en el campo laboral con herramientas sustentables.</p>
<p>Ofrece cursos de idiomas, computaci&oacute;n, danza, m&uacute;sica, artes visuales, y deportes.</p> 
<p>Idiomas: clases de Ingl&eacute;s, japon&eacute;s, portugu&eacute;s, franc&eacute;s, alem&aacute;n, italiano, mandar&iacute;n  y castellano para extranjeros. En horarios manana, tarde y noche. En niveles kinder, ninos, junior, j&oacute;venes y adultos</p> 
<p>Cuenta con un importante laboratorio audiovisual con proyector y conexi&oacute;n a  Internet</p>
<p>Computaci&oacute;n: Clases de operador b&aacute;sico y avanzado, dactilograf&iacute;a computarizada y Programador.</p>
<p>Con equipos con  Procesador Intel Dual Core de 8 GHZ, 5GB de Memoria RAM, Disco Duro de 500 GB, Lector Grabador de DVD y Monitor de 19'' LCD, y todas las m&aacute;quinas cuentan con sistema operativo  indows Seven profesional. Conexi&oacute;n a Internet.</p>
<p>Clases especiales para ninos, j&oacute;venes, adultos y grupos especiales para la tercera edad.</p>
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