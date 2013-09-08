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
                 <h3>MIGUEL ANGEL ECHEVERRIA</h3>
                 <h2>Director OCMA</h2>
                 <p><img src="imagenes/fotos/miguelAngel.jpg" alt="Miguel Angel Echeverria" class="lateral">Director de  Orquesta, violinista y violista, es también autor de varias obras de aires  nacionales estrenadas con la OSCA  y la OCM. Realizó  estudios de perfeccionamiento de violín y viola en la Facultad de Música de la Universidad de Laval  de Québec (Canadá) durante dos anos, donde también  cursó otros estudios musicales. En varias  ocasiones actuó con la   Orquesta Sinfónica de Québec y la Orquesta de Cámara del  maestro André Martin.</p>
                 <p>
                   A su  regreso a Paraguay, fue invitado a ingresar en la Orquesta Sinfónica  y la Orquesta  de Cámara del Estado de Paraíba (Brasil) donde permaneció por dos ańos,  matriculándose en la Facultad  de Música de Paraíba, donde siguió estudios de perfeccionamiento de armonía,  contrapunto, arreglos orquestales y dirección orquestal. Entre 1989 y 1990 se  desempenó como Director del Conservatorio Municipal de Música de Asunción,  creando la primera Orquesta Juvenil de la Institución. Fue  el primer director del Conservatorio Amati de Filadelfia (Chaco Paraguayo). En  1992 actuó con Philomúsica en la Expo-Sevilla (Espana). En 1993 fue invitado a  integrar y dirigir la   Orquesta Sinfónica y de Cámara de Hutchinson, Kansas (Estados  Unidos). Ese mismo ano se presenta en el Centro Cultural San Martín de Buenos  Aires (Argentina).</p>
                   <p>
                   Fue el  primer presidente de Juventudes Musicales del Paraguay. Es concertino de la Orquesta Sinfónica  de la Ciudad  de Asunción (OSCA) y Director Titular de la Orquesta de Cámara Municipal (OCM).</p>
                   <p>
                   Ha  realizado varias grabaciones fonográficas como solista, arreglador o director  de orquesta. Es formador de varios jóvenes violinistas.</p>
                   <p>
                   En 1999 fue  invitado por la   Symphonicum Europae Fundation, para integrar la gran Orquesta  Sinfónica con más de 100 músicos provenientes de 50 países para ofrecer el 'Concierto  del Milenio' en el</p>
                   <p>
                   Lincoln  Center de Nueva York, bajo la dirección del maestro Piero Gamba.</p>
                   <p>
                   Desde el  ano 2002 se desempena como profesor itinerante del proyecto 'Sonidos de la Tierra'.</p>
                   <p>
                   En el ano 2003 ha sido galardonado  con el premio 'Oscar Trinidad'.</p>
                   <p>
                   En el ano  2004 presentó el primer disco compacto de la Orquesta de Cámara  Municipal.</p>
                   <p>
                   En el ano  2006 fue declarado 'Hijo Dilecto de la Ciudad de Asunción' por la Junta Municipal.</p>
                   <p>
                   En febrero  del 2009 fue invitado como solista de violín por la Orquesta Sinfónica  de la Universidad  de Saint Louis, Missouri, dirigida por el maestro León Burke III y la Saint Louis Civic  Orchestra dirigida por Edward Dolbashian.</p>
                   <p>
                   Actualmente  es Vice-Presidente de Autores Paraguayos Asociados (APA) y docente de la Facultad de Música de la Universidad Evangélica  del Paraguay.</p>
                   <p>
                   En  el ano 2010 ha colaborado de la Orquesta de Cuerdas de la ciudad de  Formosa  Argentina.</p>
                   <p>
                  En el 2011 fue distinguido  por&nbsp;la Universidad Evangélica&nbsp;del Paraguay con el título de &ldquo;DR.  HONORIS CAUSA&rdquo; por su larga y fructífera labor docente, así como su importante  apoyo por quince anos ininterrumpidos a&nbsp;la Facultad&nbsp;de Música del  CEMTA (Centro de Estudios Teológicos Menonitas de Asunción).</p>
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