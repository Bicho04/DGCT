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

                    --><li><a href="MdlR-C-Emasa.php">Casa Emasa</a></li><!--  

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

                    <li><a href="https://www.facebook.com/pages/Centro-Cultural-Manzana-de-la-Rivera/349291535084596?fref=pb"><img src="imagenes/facebook.png" width="45"></a></li>

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

                  <h3>Acerca de la Manzana de la Rivera</h3>

                 <img class="central"src="imagenes/fotos/entrada-principal.jpg" alt="entrada de la Manza de la Rivera">

                  <p>Espacio para encuentros culturales, recreativos y de reflexi&oacute;n,  el Centro Cultural de la Ciudad es una instituci&oacute;n dependiente de la Direcci&oacute;n  de Cultura y Turismo de la Municipalidad de Asunci&oacute;n. Funciona en el espacio  denominado &nbsp;Manzana de la Rivera, abarcando las calles Ayolas, El  Paraguayo independiente, O'Leary y Benjam&iacute;n  Constant.</p>

                  <p>Entre los edificios de la ciudad de Asunci&oacute;n, sobre todo  los que corresponden a su centro hist&oacute;rico, no solamente tienen importancia los  edificios de la &eacute;poca colonial sino tambi&eacute;n los que se hicieron en el siglo XIX y XX. Este es el caso de la Manzana de la  Rivera, que re&uacute;ne construcciones de diversas &eacute;pocas, y da una idea del texto urbano  de Asunci&oacute;n.</p>

                  <p>Su denominaci&oacute;n, Manzana de la Rivera, deriva del antiguo  nombre de la calle cercana, &ldquo;Calle de la Rivera&rdquo; (algunos historiadores dicen  que es la actual calle Col&oacute;n, otros que se trata de Benjam&iacute;n Constant), del  &nbsp;Cuartel &nbsp;General o de la Rivera (ubicado muy pr&oacute;ximo a lo que ahora  es el Centro Cultural de la Rep&uacute;blica El Cabildo) y del Puerto de la Rivera (el  actual Puerto). </p>

                  <p>La  Manzana de la Rivera -un complejo de nueve casas que resumen la arquitectura  del siglo XVIII en adelante- fue abri&eacute;ndose al p&uacute;blico a medida que se  terminaban la restauraci&oacute;n, remodelaci&oacute;n y condicionamiento de los espacios. &nbsp;Estos  trabajos comenzados en 1991 fueron posibles gracias al apoyo del gobierno  espa&ntilde;ol, a trav&eacute;s de la Agencia Espa&ntilde;ola de Cooperaci&oacute;n Internacional (AECI,  ahora  ECID) y la Escuela Taller de  Asunci&oacute;n. </p>

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