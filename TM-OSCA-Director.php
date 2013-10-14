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
                 <h3>LUIS SZARAN</h3>
                 <h2>Director OCMA</h2>
                 <img src="imagenes/fotos/luisSzaran.JPG" alt="Luis Szaran" class="central">
                 <p>Estudi&oacute; m&uacute;sica en Asunci&oacute;n con Jos&eacute; Luis Miranda, luego en el Conservatorio de Santa Cecilia, Roma con Massimo Pradella y Piero Belluggi. Se perfeccion&oacute; en cursos internacionales como: Teatro Col&oacute;n de Buenos Aires con Hans Swarowsky, Academia Chigiana de Siena  con Franco Ferrara, Instituto Francesco Cannetti con Luciano Berio, Bayreuth con Zwinieg Rudzinsky y otros. Desde 1990 es director titular de la Orquesta Sinf&oacute;nica de la Ciudad de Asunci&oacute;n (OSCA) y director de la Orquesta de C&aacute;mara Philomusica de Asunci&oacute;n. Dirigi&oacute; prestigiosas orquestas en el mundo como: Orquesta Sinf&oacute;nica de Sao Paulo, Orquesta Sinf&oacute;nica de Santiago, Orquesta de la Comunidad de Madrid, Nueva Filarm&oacute;nica de Hamburgo; South East Symphony, Hutchinson Symphony y Lawrence Chambers Players de Estados Unidos; Orquesta Nacional de C&aacute;mara del Uruguay, Orquesta de C&aacute;mara Mayo de Buenos Aires, Cappella Civica de Trieste, Italia, Orquesta Filarm&oacute;nica de Valencia, España, Orquesta Sinfonietta de Paris, Orquesta Filarm&oacute;nica Polaca y otras. Fue director art&iacute;stico del Festival Internacional de M&uacute;sica de Cascavel, Brasil entre 1990 y 1995. En recientes temporadas sus composiciones fueron estrenadas por la Orquesta Sinfonietta de Paris, La Orquesta Sinf&oacute;nica de Berlin y la Orquesta Filarm&oacute;nica de Venecia. En el año 2002 recibi&oacute; la Medalla Vivaldi del Festival Internacional de Venecia, siendo el primer compositor latinoamericano y quinto en el mundo en recibirla. Desde 1997 es Director Art&iacute;stico del grupo vocal e instrumental Ensamble Zipoli de Venecia. Por su labor en la cultura recibi&oacute; numerosos premios y reconocimientos nacionales e internacionales entre los que se incluyen: Caballero Oficial de la Rep&uacute;blica Italiana, Orden de la Ciencia y las Letras de Francia, Orbis Guaran&iacute;ticus de la UNESCO, Orden Nacional del M&eacute;rito del Paraguay, forma parte de la galer&iacute;a de “Maestros del Arte” del Gongreso Nacional. Es miembro correspondiente de la Real Academia Española de la Historia. En el 2005, en la Universidad de Oxford recibi&oacute; el galard&oacute;n “Skoll Award for Social Entrepreneurship” de la Fundaci&oacute;n Skoll de California, por su labor al frente del programa de educaci&oacute;n c&iacute;vica a trav&eacute;s de la m&uacute;sica: Sonidos de la Tierra. Desde el 2006 es director fundador de la Orquesta Mundial “Weltweite Klänge” en Nurenberg, Alemania. </p>


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