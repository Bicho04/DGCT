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

              <section id="cont-info"><div class="info"><h3>Las Casas de la Manzana</h3>

               <h2>CASA VERT&Uacute;A</h2>

                 <p>Era la &uacute;nica que ten&iacute;a posibilidades de tener una segunda planta. Construida en 1898, de estilo neocl&aacute;sico, &nbsp;en este recinto funcionaba una confiter&iacute;a bajo el mismo nombre. En 1993 se instala en esta casa la Biblioteca  Municipal. </p>

                 <p>La Biblioteca Municipal &quot;Augusto Roa Bastos&rdquo; &nbsp;tiene un acervo de aproximadamente 32.000 vol&uacute;menes; cuenta con dos salas de lectura, pupitres individuales (rescatados del Teatro Municipal y que fueran utilizados en la primera Constituyente) y personal capacitado para atenci&oacute;n al p&uacute;blico y catalogaci&oacute;n de los libros. Asimismo, tiene una sala destinada a literatura paraguaya, llamada &ldquo;Alfredo Seiferheld&rdquo;, y una Hemeroteca, sitio para lectura actualizada y r&aacute;pida sobre diversos aspectos del arte y la cultura de diferentes pa&iacute;ses del mundo.</p>

                 <p>En planta alta, la Casa de Andaluc&iacute;a-Paraguay tiene un servicio de inform&aacute;tica para uso gratuito de Internet.</p>

                 <p>El horario de atenci&oacute;n al p&uacute;blico es de lunes a viernes, de 7 a 19 h, y s&aacute;bados y domingos, de 8 a 18 h. &uacute;nico requisito para usufructo de la Biblioteca, presentaci&oacute;n del documento de identidad.</p>

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