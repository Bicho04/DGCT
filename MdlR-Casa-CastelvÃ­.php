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

                    <li><a href="https://www.facebook.com/pages/Centro-Cultural-Manzana-de-la-Rivera/349291535084596?fref=pb"><img src="imagenes/facebook.png" width="45"></a></li>

                    <!--<li><a href="#"><img src="imagenes/twitter.png" width="45"></a></li>

                    <li><a href="#"><img src="imagenes/skype.png" width="45"></a></li>

                    <li><a href="#"><img src="imagenes/youtube.png" width="45"></a></li>

                    <li><a href="#"><img src="imagenes/googleplus.png" width="45"></a></li> -->

                  </ul>

                </aside>



            </nav>

              <!-- InstanceBeginEditable name="INFO" -->

              

                  <?php 

                      $pagina="actividadesdeldia.inc.php";

                      if(isset($_GET['codigoevento']))

					  {

						?>

                          <section id="cont-info">

								  <?php  

                      $pagina="ampliar.actividadesdeldia.inc.php";

					

                              include("$pagina");

                           ?></section>

                           <?php

					  }

					  else

					  {

						  ?>

                          <section id="cont-nota">

								  <?php

                              include("$pagina");

                              ?></section>

                              <?php

					  }

					  ?>

                        

              

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