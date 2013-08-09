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
              --><li class="col-3"><a href="MdlR-Contacto.php">Contacto</a></li><!-- 
           --></ul>

        <nav id="botones-entidad">
                <ul id="botones-entidad-nav">
                    <li><a href="MdlR-Biblioteca.php">Biblioteca "Augusto Roa Bastos"</a></li>
                    <li><a href="MdlR-Auditorio.php">Auditorio Ru&iacute; Diaz de Guzman</a></li>
                    <li><a href="MdlR-Teatro-GarciaLorca.php">Teatro Garc&iacute;a Lorca</a></li>
                    <li><a href="MdlR-Patio-Leonor.php">Patio Leonor</a></li>
                    <li><a href="MdlR-Casa-Ballario.php">Casa Ballario</a></li>
                    <li><a href="MdlR-Museo-memoria-de-la-ciudad.php">Museo "memoria de la ciudad"</a></li>
                    <li><a href="MdlR-Bar-Casa-Clari.php">Bar Casa Clari</a></li>
                    <li><a href="MdlR-Espacio-Miguel Acevedo.php">Espacio Miguel Acevedo</a></li>
                    <li><a href="MdlR-La-aleria.php">La Galeria</a></li>
                    <li><a href="MdlR-Casa-Castelví.php">Casa Castelv&iacute;</a></li>
                    <li><a href="MdlR-Casa-Ballario.php">Patio Arecaya</a></li>
                    <li><a href="MdlR-Casa-Ballario.php">Casa Ballario</a></li>
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
                 <h2>CASA SERRA</h2>
                 <p>La recuperación posterior de las otras  casas como la  1 y la CASA SERRA 2, que son también tipologías de  viviendas neoclásicas de habitaciones ubicadas sobre la calle, tienen dos  zaguanes, por lo que suponemos eran dos casas gemelas que se unieron.</p>
                 <p>En una de estas casas actualmente  funciona el Depto. de Audiovisuales, que desarrolla diversos programas para  estudiantes de primaria, tercer ciclo y educación media de escuelas y colegios  de Asunción y ciudades aledanas. Dichos programas son: &ldquo;Viaje gratis&rdquo;, videos  sobre patrimonio histórico de Asunción; &ldquo;Conociendo Asunción&rdquo;, recorrido por los  espacios de la Manzana de la Rivera y del centro histórico; &ldquo;Cine de grandes  para pequenos&rdquo;, exhibición de películas relevantes de la filmografía universal;  &ldquo;Conciertos al mediodía - Asaje rire&rdquo;, con la actuación de los elencos  municipales (Banda, Ballet y Conjunto Folklórico, Orquesta Sinfónica, Orquesta  de Cámara) y artistas invitados.<br>
                   Asimismo, este Depto. tiene a su cargo la  Videoteca Municipal, inaugurada el 31 de marzo de 1995 tras un convenio con la  &nbsp;Fundación Cabildo; ofrece videos con temas educativos, ecológicos,  artísticos y culturales, dirigidos especialmente a estudiantes e instituciones educativas.</p>
                 <p>Estos programas son gratuitos y se los  realiza según calendario elaborado en conjunto entre el Depto. de  Audiovisuales, las escuelas y colegios y los centros municipales. Se cuenta con  personal capacitado para las visitas guiadas y recorridos y personal técnico  para las exhibiciones de videos y películas. Las funciones se realizan en el Auditorio  Ruy Díaz de Guzmán y la Sala García Lorca.</p>
                 <p>(Los interesados en participar de  estos programas deben dirigirse al Depto. de Audiovisuales del CCC, teléfonos  442-448, 447-683, int. 109; de lunes a viernes, de 7:00 a 12:30 h. E-mail: <a href="mailto:direccion.manzana.rivera@gmail.com">direccion.manzana.rivera@gmail.com</a>; <a href="http://www.facebook.com/">www.facebook.com</a>).</p>
               </div>
              </section>
              <!-- InstanceEndEditable --></div>  
    </section> 
  </section>
 
  <footer>
     <nav id="menu-Logos">
       <ul id="nav-logos">   
          <li><a href="TeatroMunicipal.php"><img src="imagenes/Logo-TeatroMunicipal.png" alt="Teatro Municipal Ignacio A. Pane"></a></li>
          <li><a href="InstitutoMunicipalDeArte.php"><img src="imagenes/Logo-IMA.png" ></a></li>
          <li><a href="ManzanaDeLaRivera.php"><img src="imagenes/Logo-Manzana.png" ></a></li>
          <li><a href="CentroParaguayoJapones.php"><img src="imagenes/Logo-CPJ.png" ></a></li>
          <li><a href="DierccionDeAccionCulturalYTurismo.php"><img src="imagenes/Logo-DACT.png" alt="Diercción de Acción Cultural y Turismo"></a></li>
      </ul>
   </nav>
  </footer> 

</body>
<!-- InstanceEnd --></html>