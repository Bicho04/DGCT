<?php header('Content-Type: text/html; charset=ISO-8859-15'); ?>
<!DOCTYPE html>
<html lang="es"><!-- InstanceBegin template="/Templates/ManzanaDeLaRivera.dwt" codeOutsideHTMLIsLocked="false" --><?php $entidad="eccbc";?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2"/>
<title>Manzana de la Rivera, Centro Cultural de la Ciudad de Asucni&oacute;n</title> 
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
        <section id="logocult"><a href="beta-index.php"><img src="imagenes/logo-03.png" alt="Manzana de la Rivera" ></a></section>
         
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
              --><li class="col-4"><a href="MdlR-historia.php">Historia</a></li><!-- 
              --><li class="col-4"><a href="#">9 casas</a><!-- 
                --><ul><!--  
                    --><li><a href="MdlR-C-Viola.php">Casa Viola</a></li><!-- 
                    --><li><a href="MdlR-C-Clari.php">Casa Clari</a></li><!--  
                    --><li><a href="MdlR-C-Clari-Mestre.php">Casa Clari-Mestre</a></li><!--  
                    --><li><a href="MdlR-C-Vertua.php">Casa Vert&uacute;a</a></li><!--  
                    --><li><a href="MdlR-C-Emesa.php">Casa Emesa</a></li><!--  
                    --><li><a href="MdlR-C-Castelvi.php">Casa Castelv&iacute;</a></li><!--  
                    --><li><a href="MdlR-C-Serra.php">Casa Serra I y II</a></li><!--  
                    --><li><a href="MdlR-p-Leonor.php">Patio Leonor</a></li><!--  
                    --><li><a href="MdlR-C-Ballario.php">Casa Ballario</a></li><!--  
                    --><li><a href="MdlR-C-GarciaLorca.php">La Sala Garc&iacute;a Lorca</a></li><!--  
                --></ul><!-- 
              --></li><!-- 
              --><li class="col-4"><a href="MdlR-QuienFue.php">&iquest;Qui&eacute;n Fue?</a></li><!-- 
              --><li class="col-4"><a href="MdlR-Contacto.php">Contacto</a></li><!-- 
           --></ul>

        <nav id="botones-entidad">
                <ul id="botones-entidad-nav">
                    <li><a href="MdlR-Biblioteca.php">Biblioteca</a></li>
                    <li><a href="MdlR-Auditorio.php">Auditorio Rui Dia de Guzman</a></li>
                    <li><a href="MdlR-C-GarciaLorca.php">Garcia Lorca</a></li>
                    <li><a href="MdlR-p-Leonor.php">El Patio Leonor</a></li>
                    <li><a href="MdlR-C-Ballario.php">Casa Ballario</a></li>
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
                 <h3>9 Casas</h3>
                 <h2>CASA EMASA</h2>
                 <p>Al  &nbsp;lado de esta casa, está la , antigua imprenta y papelera. La  más destruida de la Manzana, porque para poder implementar la imprenta tuvieron  que echar una parte del techo. &nbsp;En un primer lugar fue un sitio de  despachos aduaneros, quedando solamente un grupo de habitaciones muy amplias,  que son las que bordean una especie de corredor que habrá existido y que hoy se  hizo una especie de &quot;impluvium&quot; con columnas de hormigón. Este lugar  se convirtió en un espacio de exposiciones de arte denominado La Galería. En  esta casa funcionan además parte de las oficinas administrativas de la Manzana de  la Rivera.</p>
                 <p>La  Galería fue un sitio pensado para muestras de esculturas, instalaciones,  fotografías, pinturas, disciplinas desarrolladas desde la habilitación de la  Manzana de la Rivera. Hace más de diez anos, este espacio está dirigido a  jóvenes que se inician en el arte, en el marco de un proyecto desarrollado por  el CCC, denominado Manzana Joven, que cuenta actualmente con el apoyo de la  Cooperativa Universitaria Ltda.</p>
                 <p> Las obras son colocadas sobre pared o paneles  de madera, en una galería semi cerrada, cuenta con luces spots y dicroicas, y  un pequeno espacio con piletas de agua y piedras que se pueden integrar a cada muestra.  Personal capacitado para realizar los montajes.</p>
                 <p> Las exposiciones son de acceso libre y  gratuito, en el horario de: lunes a viernes, 8 a 20 h, sábados y domingos, de 8  a 18 h.</p>
                 <p>(Los  interesados en exponer deben dirigirse a la Unidad de Espacios del CCC, para  retirar requisitos y condiciones de uso. Teléfonos 442-448, 447-683, int. 109;  de lunes a viernes, de 7:30 a 15:30 h. E-mail: <a href="mailto:direccion.manzana.rivera@gmail.com">direccion.manzana.rivera@gmail.com</a>; <a href="http://www.facebook.com/">www.facebook.com</a>).</p>
               </div>
              </section>
              <!-- InstanceEndEditable --></div>  
    </section> 
  </section>
 
  <footer id="pie">

  </footer>  

</body>
<!-- InstanceEnd --></html>