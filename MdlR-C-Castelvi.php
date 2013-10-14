<?php header('Content-Type: text/html; charset=ISO-8859-15'); ?> 
<!DOCTYPE html>
<html lang="es"><!-- InstanceBegin template="/Templates/ManzanaDeLaRivera.dwt" codeOutsideHTMLIsLocked="false" -->
<?php $entidad="eccbc";?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2"/>
<title>Manzana de la Rivera, Centro Cultural de la Ciudad de Asucni&oacute;n</title> 
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

            <section id="logocult"><a href="beta-index.php"><img src="imagenes/DGCT2.png" alt="Direccion General de Cultura y Turismo" ></a></section>
            <section id="logoasu"> <a href="beta-index.php"> <img src="imagenes/Logo-Asu.png" alt="logo Asu"></a></section>
            <section id="logoasurohayhu"> <a href="beta-index.php"> <img src="imagenes/Logo-Rohayhu-Asu.png" alt="logo Asu"></a></section>

     
      </section>

     

</header>
  <section id="contenido">
    <section id="banner">
<!-- ******************************************************* -->
       
    <div id="amazingslider-1">
        <ul class="amazingslider-slides" style="display:none;">
            <li><img src="imagenes/banner/MDLR-1.jpg" alt=""></li>
            <li><img src="imagenes/banner/MDLR-2.jpg" alt=""></li>
            <li><img src="imagenes/banner/MDLR-3.jpg" alt=""></li>
            <li><img src="imagenes/banner/MDLR-4.jpg" alt=""></li>
            <li><img src="imagenes/banner/MDLR-5.jpg" alt=""></li>
            <li><img src="imagenes/banner/MDLR-6.jpg" alt=""></li>
            <li><img src="imagenes/banner/MDLR-7.jpg" alt=""></li>
            <li><img src="imagenes/banner/MDLR-8.jpg" alt=""></li>
            <li><img src="imagenes/banner/MDLR-9.jpg" alt=""></li>
            <li><img src="imagenes/banner/MDLR-10.jpg" alt=""></li>
        </ul>
        <ul class="amazingslider-thumbnails" style="display:none; ">
            <li><img src="imagenes/banner/MDLR-1-tn.jpg" alt=""></li>
            <li><img src="imagenes/banner/MDLR-2-tn.jpg" alt=""></li>
            <li><img src="imagenes/banner/MDLR-3-tn.jpg" alt=""></li>
            <li><img src="imagenes/banner/MDLR-4-tn.jpg" alt=""></li>
            <li><img src="imagenes/banner/MDLR-5-tn.jpg" alt=""></li>
            <li><img src="imagenes/banner/MDLR-6-tn.jpg" alt=""></li>
            <li><img src="imagenes/banner/MDLR-7-tn.jpg" alt=""></li>
            <li><img src="imagenes/banner/MDLR-8-tn.jpg" alt=""></li>
            <li><img src="imagenes/banner/MDLR-9-tn.jpg" alt=""></li>
            <li><img src="imagenes/banner/MDLR-10-tn.jpg" alt=""></li>
        </ul>
    </div>
       
        
<!-- ******************************************************* -->
            </section>

    <section id="central">
      <div class="titulo"><h1>Manzana de la Rivera</h1></div>
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
              --><li class="col-3"><a href="MdlR-historia.php">Historia</a></li><!-- 
              --><li class="col-3"><a href="#">Las casas de la Manzana</a><!-- 
                --><ul class="col-3"><!--  
                    --><li><a href="MdlR-C-Viola.php">Casa Viola</a></li><!-- 
                    --><li><a href="MdlR-C-Clari.php">Casa Clari</a></li><!--  
                    --><li><a href="MdlR-C-Clari-Mestre.php">Casa Clari-Mestre</a></li><!--  
                    --><li><a href="MdlR-C-Vertua.php">Casa Vert&uacute;a</a></li><!--  
                    --><li><a href="MdlR-C-Emesa.php">Casa Emesa</a></li><!--  
                    --><li><a href="MdlR-C-Castelvi.php">Casa Castelv&iacute;</a></li><!--  
                    --><li><a href="MdlR-C-Serra.php">Casa Serra I y II</a></li><!--  
                    -->
            <li><a href="MdlR-p-Leonor.php">Patio Leonor</a></li><!--  
                    --><li><a href="MdlR-C-Ballario.php">Casa Ballario</a></li><!--  
                    --><li><a href="MdlR-C-GarciaLorca.php">La Sala Garc&iacute;a Lorca</a></li><!--  
                --></ul><!-- 
              --></li><!-- 
              --><li class="col-3"><a href="MdlR-Contacto.php">Contacto</a></li><!-- 
           --></ul>

        <nav id="botones-entidad">
                <ul id="botones-entidad-nav">
                    <li><a href="MdlR-Biblioteca.php">Biblioteca "Augusto Roa Bastos"</a></li>
                    <li><a href="MdlR-Auditorio.php">Auditorio Ru&iacute; Diaz de Guzman</a></li>
                    <li><a href="MdlR-Teatro-GarciaLorca.php">Teatro Garc&iacute;a Lorca</a></li>
                    <li><a href="MdlR-p-Leonor.php">Patio Leonor</a></li>
                    <li><a href="MdlR-C-Ballario.php">Casa Ballario</a></li>
                    <li><a href="MdlR-C-Viola.php">Museo "memoria de la ciudad"</a></li>
                    <li><a href="MdlR-C-Clari.php">Bar Casa Clari</a></li>
                    <li><a href="MdlR-Espacio-Miguel-Acevedo.php">Espacio Miguel Acevedo</a></li>
                    <li><a href="MdlR-La-aleria.php">La Galeria</a></li>
                    <li><a href="MdlR-C-Castelvi.php">Casa Castelv&iacute;</a></li>
                    <li><a href="MdlR-Casa-Ballario.php">Patio Arecaya</a></li>
                    <!-- <li><a href="MdlR-Biblioteca.php">Biblioteca "Augusto Roa Bastos"</a></li>
                    <li><a href="MdlR-Auditorio.php">Auditorio Ru&iacute; Diaz de Guzman</a></li>
                    <li><a href="MdlR-Teatro-GarciaLorca.php">Teatro Garc&iacute;a Lorca</a></li>
                    <li><a href="MdlR-Patio-Leonor.php">Patio Leonor</a></li>
                    <li><a href="MdlR-Casa-Ballario.php">Casa Ballario</a></li>
                    <li><a href="MdlR-Museo-memoria-de-la-ciudad.php">Museo "memoria de la ciudad"</a></li>
                    <li><a href="MdlR-Bar-Casa-Clari.php">Bar Casa Clari</a></li>
                    <li><a href="MdlR-Espacio-Miguel-Acevedo.php">Espacio Miguel Acevedo</a></li>
                    <li><a href="MdlR-La-aleria.php">La Galeria</a></li>
                    <li><a href="MdlR-Casa-Castelvi.php">Casa Castelv&iacute;</a></li>
                    <li><a href="MdlR-Casa-Ballario.php">Patio Arecaya</a></li> -->
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
              <section id="cont-info"><div class="info"><h3>Las Casas de la Manzana</h3>
               <h2>CASA  CASTELV&iacute;</h2>
                 <img class="central"src="imagenes/fotos/casa-castelvi.jpg" alt="Casa Castelvi"> 
                 <p>La , que antiguamente se llamaba Casa Serra, es una construcci&oacute;n de 1804, realizada  todav&iacute;a con el sistema colonial y es la mejor conservada de la Manzana.  &nbsp;Tiene las puertas, las ventanas, las rejas y uno de los pisos originales.  &nbsp;Es una casa pre-francista, ubicada a 15 metros de la calle; extranamente  tiene un jard&iacute;n exterior que se integr&oacute; al &aacute;rea urbana eliminando la muralla  (Patio Arecay&aacute;). El catal&aacute;n que construye esta casa, el senor Jos&eacute; Castelv&iacute;,  era vice alcalde de la ciudad de Asunci&oacute;n en 1800. &nbsp;Esta casa ha sido restaurada  muy criteriosamente por el Centro Hist&oacute;rico, trabajando especialmente en esa  restauraci&oacute;n la Arq. Beatriz Chase.</p>
                 <p>En Casa  Castelv&iacute; funcionan los espacios Domingo Mart&iacute;nez de Irala (tres salas, una de  ellas con aire acondicionado split), Samudio (una sala) y Julia Elena Bibolini  (una sala), destinadas a exposiciones de artes visuales (pintura, grabado,  dibujo, fotograf&iacute;as, instalaci&oacute;n, esculturas), a disposici&oacute;n de artistas  nacionales y extranjeros con trayectoria conocida. Las obras son colocadas  sobre paneles de madera (resguardando las originales), y cuenta con luces spots  y dicroicas. Personal capacitado para realizar los montajes.</p>
                 <p><img class="lateral"src="imagenes/fotos/casa-castelvi1.jpg" alt="Casa Castelvi"> El Patio  Arecay&aacute;, llamado as&iacute; recordando la rebeli&oacute;n de los indios Arecay&aacute;, es el jard&iacute;n  de la casa Castelv&iacute;, donde se realizan actividades al aire libre.</p>
                 <p>Las  exposiciones son de acceso libre y gratuito, en el horario de: lunes a viernes,  8 a 20 h, s&aacute;bados y domingos, de 8 a 18 h.</p>
                 <p>(Los  artistas pl&aacute;sticos interesados en exponer deben dirigirse a la Unidad de  Espacios del CCC, para retirar requisitos y condiciones de uso. Tel&eacute;fonos  442-448, 447-683, int. 109; de lunes a viernes, de 7:30 a 15:30 h. E-mail: <a href="mailto:direccion.manzana.rivera@gmail.com">direccion.manzana.rivera@gmail.com</a>; <a href="http://www.facebook.com/">www.facebook.com</a>).</p>
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