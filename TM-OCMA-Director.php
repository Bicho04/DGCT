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
          <li><a href="DierccionDeAccionCulturalYTurismo.php"><img src="imagenes/logo-07.png" alt="Diercci�n de Acci�n Cultural y Turismo"></a></li>
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
                 <h3>MIGUEL ANGEL ECHEVERRIA</h3>
                 <img src="imagenes/fotos/Foto del Director.jpg" width="214" height="215" alt="Director Ocma">
                 <h2>Director OCMA</h2>
                 <p>Director de  Orquesta, violinista y violista, es tambi�n autor de varias obras de aires  nacionales estrenadas con la OSCA  y la OCM. Realiz�  estudios de perfeccionamiento de viol�n y viola en la Facultad de M�sica de la Universidad de Laval  de Qu�bec (Canad�) durante dos anos, donde tambi�n� curs� otros estudios musicales. En varias  ocasiones actu� con la   Orquesta Sinf�nica de Qu�bec y la Orquesta de C�mara del  maestro Andr� Martin.<br>
                   A su  regreso a Paraguay, fue invitado a ingresar en la Orquesta Sinf�nica  y la Orquesta  de C�mara del Estado de Para�ba (Brasil) donde permaneci� por dos anos,  matricul�ndose en la Facultad  de M�sica de Para�ba, donde sigui� estudios de perfeccionamiento de armon�a,  contrapunto, arreglos orquestales y direcci�n orquestal. Entre 1989 y 1990 se  desempen� como Director del Conservatorio Municipal de M�sica de Asunci�n,  creando la primera Orquesta Juvenil de la Instituci�n. Fue  el primer director del Conservatorio Amati de Filadelfia (Chaco Paraguayo). En  1992 actu� con Philom�sica en la Expo-Sevilla (Espana). En 1993 fue invitado a  integrar y dirigir la   Orquesta Sinf�nica y de C�mara de Hutchinson, Kansas (Estados  Unidos). Ese mismo ano se presenta en el Centro Cultural San Mart�n de Buenos  Aires (Argentina).<br>
                   Fue el  primer presidente de Juventudes Musicales del Paraguay. Es concertino de la Orquesta Sinf�nica  de la Ciudad  de Asunci�n (OSCA) y Director Titular de la Orquesta de C�mara Municipal (OCM).<br>
                   Ha  realizado varias grabaciones fonogr�ficas como solista, arreglador o director  de orquesta. Es formador de varios j�venes violinistas.<br>
                   En 1999 fue  invitado por la   Symphonicum Europae Fundation, para integrar la gran Orquesta  Sinf�nica con m�s de 100 m�sicos provenientes de 50 pa�ses para ofrecer el 'Concierto  del Milenio' en el<br>
                   Lincoln  Center de Nueva York, bajo la direcci�n del maestro Piero Gamba.<br>
                   Desde el  ano 2002 se desempena como profesor itinerante del proyecto 'Sonidos de la Tierra'.<br>
                   En el ano 2003 ha sido galardonado  con el premio 'Oscar Trinidad'.<br>
                   En el ano  2004 present� el primer disco compacto de la Orquesta de C�mara  Municipal.<br>
                   En el ano  2006 fue declarado 'Hijo Dilecto de la Ciudad de Asunci�n' por la Junta Municipal.<br>
                   En febrero  del 2009 fue invitado como solista de viol�n por la Orquesta Sinf�nica  de la Universidad  de Saint Louis, Missouri, dirigida por el maestro Le�n Burke III y la Saint Louis Civic  Orchestra dirigida por Edward Dolbashian.<br>
                   Actualmente  es Vice-Presidente de Autores Paraguayos Asociados (APA) y docente de la Facultad de M�sica de la Universidad Evang�lica  del Paraguay.<br>
                   En  el ano 2010 ha colaborado de la Orquesta de Cuerdas de la ciudad de  Formosa� Argentina.<br>
                  En el 2011 fue distinguido  por&nbsp;la Universidad Evang�lica&nbsp;del Paraguay con el t�tulo de &ldquo;DR.  HONORIS CAUSA&rdquo; por su larga y fruct�fera labor docente, as� como su importante  apoyo por quince anos ininterrumpidos a&nbsp;la Facultad&nbsp;de M�sica del  CEMTA (Centro de Estudios Teol�gicos Menonitas de Asunci�n).</p>
</div>
              </section>
              <!-- InstanceEndEditable --></div>  
    </section> 
  </section>
 
  <footer id="pie">

  </footer>  

</body>
<!-- InstanceEnd --></html>