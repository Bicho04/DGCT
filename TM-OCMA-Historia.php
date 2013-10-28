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

                    <li><a href="https://www.facebook.com/TeatroMunicAsu?fref=pb"><img src="imagenes/facebook.png" width="45"></a></li>

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

                <h3>Rese&ntilde;a Hist&oacute;rica</h3>

                <h2>Orquesta de Camara de la Ciudad de Asunci&oacute;n</h2>

                <img class="central"src="imagenes/fotos/OCMA-(4).JPG" alt="Integrantes OCMA">

                <p>La OCMA es dependiente del Teatro Municipal y de la Direcci&oacute;n General de Cultura y Turismo de la Municipalidad de Asunci&oacute;n, y cuenta con el apoyo de la Sociedad Filarm&oacute;nica de Asunci&oacute;n, organizaci&oacute;n sin fines de lucro encargada de gestionar proyectos de desarrollo cultural de la orquesta para contribuir con su mejoramiento t&eacute;cnico y art&iacute;stico.</p>



                <p>Entre los objetivos de la Orquesta de C&aacute;mara Municipal de Asunci&oacute;n se destaca la difusi&oacute;n de la m&uacute;sica de c&aacute;mara, especialmente la m&uacute;sica antigua, la barroca, la cl&aacute;sica, as&iacute; como la m&uacute;sica paraguaya.</p>



                <p>Est&aacute; compuesta por 18 m&uacute;sicos, siendo su actual Director el maestro Miguel &aacute;ngel Echeverr&iacute;a. La OCMA es la precursora de la Orquesta Sinf&oacute;nica y est&aacute; conformada por instrumentos de cuerdas (viol&iacute;n, violas, violoncellos y contrabajos). Adem&aacute;s cuenta con flauta y clarinete (ambos instrumentos de viento) utilizados en la interpretaci&oacute;n de obras que los requieran, especialmente la m&uacute;sica paraguaya a la cual le da un colorido especial.</p>



                <p>La OCMA cada a&ntilde;ao presenta una Temporada cultural intensa que est&aacute; compuesta por el Ciclo de Conciertos de Temporada,   seis conciertos mensuales, con la presencia de directores y solistas nacionales e internacionales, realizados en la Sala Manuel de Falla del Centro Cultural de Espa&ntilde;a Juan de Salazar y el Ciclo de Conciertos de Extensi&oacute;n Cultural en los barrios (centros educativos, parroquias, polideportivos, clubes sociales, universidades entre otros). Este ciclo de car&aacute;cter popular va dirigido a ni&ntilde;os, j&oacute;venes y  la familia en general, ya que en forma did&aacute;ctica son presentadas las distintas obras que componen el repertorio de la Orquesta. Ambos ciclos son de acceso libre y gratuito, como una forma de facilitar a la ciudadan&iacute;a el acceso a importantes manifestaciones culturales en el &aacute;mbito musical.</p>



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