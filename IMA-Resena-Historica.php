<?php header('Content-Type: text/html; charset=ISO-8859-15'); ?> 

<!DOCTYPE html>

<html lang="es"><!-- InstanceBegin template="/Templates/InstitutoMunicipalDeArte.dwt" codeOutsideHTMLIsLocked="false" -->

<?php $entidad="c81e7";?>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2"/>

<title>Instituto Minicipal de Arte</title> 

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

            <!-- <li><img src="images/Foto-1.jpg" alt="TITULO DE LA FOTO" data-description="Descripcion de la foto" /></li> -->

            <li><img src="imagenes/banner/1.jpg" alt=""></li><!-- 

            <li><img src="imagenes/banner/2.jpg" alt=""></li> -->

            <li><img src="imagenes/banner/3.jpg" alt=""></li>

            <li><img src="imagenes/banner/4.jpg" alt=""></li>

            <li><img src="imagenes/banner/5.jpg" alt=""></li><!-- 

            <li><img src="imagenes/banner/6.jpg" alt=""></li> --><!-- 

            <li><img src="imagenes/banner/7.jpg" alt=""></li> -->

            <li><img src="imagenes/banner/8.jpg" alt=""></li>

            <li><img src="imagenes/banner/9.jpg" alt=""></li><!-- 

            <li><img src="imagenes/banner/10.jpg" alt=""></li> --><!-- 

            <li><img src="imagenes/banner/11.jpg" alt=""></li> -->

            <li><img src="imagenes/banner/12.jpg" alt=""></li>

            <li><img src="imagenes/banner/13.jpg" alt=""></li>

            <li><img src="imagenes/banner/14.jpg" alt=""></li>

            <li><img src="imagenes/banner/15.jpg" alt=""></li><!-- 

            <li><img src="imagenes/banner/16.jpg" alt=""></li>

            <li><img src="imagenes/banner/17.jpg" alt=""></li> -->

            <li><img src="imagenes/banner/18.jpg" alt=""></li>

        </ul>

        <ul class="amazingslider-thumbnails" style="display:none; ">

            <li><img src="imagenes/banner/1-tn.jpg" alt="1"></li><!-- 

            <li><img src="imagenes/banner/2-tn.jpg" alt="2"></li> -->

            <li><img src="imagenes/banner/3-tn.jpg" alt="3"></li>

            <li><img src="imagenes/banner/4-tn.jpg" alt="4"></li>

            <li><img src="imagenes/banner/5-tn.jpg" alt="5"></li><!-- 

            <li><img src="imagenes/banner/6-tn.jpg" alt="6"></li> --><!-- 

            <li><img src="imagenes/banner/7-tn.jpg" alt="7"></li> -->

            <li><img src="imagenes/banner/8-tn.jpg" alt="8"></li>

            <li><img src="imagenes/banner/9-tn.jpg" alt="9"></li><!-- 

            <li><img src="imagenes/banner/10-tn.jpg" alt="10"></li> --><!-- 

            <li><img src="imagenes/banner/11-tn.jpg" alt="11"></li> -->

            <li><img src="imagenes/banner/12-tn.jpg" alt="12"></li>

            <li><img src="imagenes/banner/13-tn.jpg" alt="13"></li>

            <li><img src="imagenes/banner/14-tn.jpg" alt="14"></li>

            <li><img src="imagenes/banner/15-tn.jpg" alt="15"></li><!-- 

            <li><img src="imagenes/banner/16-tn.jpg" alt="16"></li>

            <li><img src="imagenes/banner/17-tn.jpg" alt="17"></li> -->

            <li><img src="imagenes/banner/18-tn.jpg" alt="18"></li>

    </div>

       

        

<!-- ******************************************************* -->

            </section>



    <section id="central">

      <div class="titulo"><h1>Instituto Municipal de Arte</h1></div>

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

              --><li class="col-2"><a href="IMA-Resena-Historica.php">Historia</a></li><!-- 

              <li class="col-4"><a href="IMA-Espacios.php">Espacios</a></li>

              <li class="col-4"><a href="IMA-Futura-Sede.php">Futura sede</a></li>

              --><li class="col-2"><a href="IMA-Contacto.php">Contacto</a></li><!-- 

           --></ul>



        <nav id="botones-entidad">

                <ul id="botones-entidad-nav">

                      <li><a href="IMA-Escuela-de-Arte-Infantil.php">Escuela Municipal de Arte Infantil</a><!--

                      <ul>

                        <li><a href="IMA-EAI-historia">Historia</a></li>

                        <li><a href="IMA-EAI-Contenido">Contenido</a></li>

                        <li><a href="IMA-EAI-Requisitos">Requisitos</a></li>

                        <li><a href="IMA-EAI-Ubicacion">Ubicaci&oacute;n</a></li>

                      </ul>

                   --> </li>

                    <li><a href="IMA-Escuela-de-Arte-Dramatico.php">Escuela Municipal de Arte Dram&aacute;tico</a>

                     <!--  <ul>

                        <li><a href="IMA-AD-historia">Historia</a></li>

                        <li><a href="IMA-AD-Contenido">Contenido</a></li>

                        <li><a href="IMA-AD-Requisitos">Requisitos</a></li>

                        <li><a href="IMA-AD-Ubicacion">Ubicaci&oacute;n</a></li>

                      </ul> -->

                    </li>

                    <li><a href="IMA-Escuela-de-Danza.php">Escuela Municipal de Danza</a>

                     <!--  <ul>

                        <li><a href="IMA-ED-historia">Historia</a></li>

                        <li><a href="IMA-ED-Contenido">Contenido</a></li>

                        <li><a href="IMA-ED-Requisitos">Requisitos</a></li>

                        <li><a href="IMA-ED-Ubicacion">Ubicaci&oacute;n</a></li>

                      </ul> -->

                    </li>

                    <li><a href="IMA-Conservatorio-de-Musica.php">Conservatorio Municipal de M&uacute;sica</a>

                      <!-- <ul>

                        <li><a href="IMA-CM-historia">Historia</a></li>

                        <li><a href="IMA-CM-Contenido">Contenido</a></li>

                        <li><a href="IMA-CM-Requisitos">Requisitos</a></li>

                        <li><a href="IMA-CM-Ubicacion">Ubicaci&oacute;n</a></li>

                      </ul> -->

                    </li>

                    <li><a href="IMA-Escuela-de-Locucion.php">Escuela Municipal de Locuci&oacute;n</a>

                     <!--  <ul>

                        <li><a href="IMA-EL-historia">Historia</a></li>

                        <li><a href="IMA-EL-Contenido">Contenido</a></li>

                        <li><a href="IMA-EL-Requisitos">Requisitos</a></li>

                        <li><a href="IMA-EL-Ubicacion">Ubicaci&oacute;n</a></li>

                      </ul> -->

                    </li>

                    <li><a href="IMA-Escuela-de-Canto.php">Escuela Municipal de Canto</a>

                      <!-- <ul>

                        <li><a href="IMA-EC-historia">Historia</a></li>

                        <li><a href="IMA-EC-Contenido">Contenido</a></li>

                        <li><a href="IMA-EC-Requisitos">Requisitos</a></li>

                        <li><a href="IMA-EC-Ubicacion">Ubicaci&oacute;n</a></li>

                      </ul> -->

                    </li>

                    <li><a href="IMA-Taller-Teatro.php">Taller Municipal Teatro</a>

                      <!-- <ul>

                        <li><a href="IMA-TT-historia">Historia</a></li>

                        <li><a href="IMA-TT-Contenido">Contenido</a></li>

                        <li><a href="IMA-TT-Requisitos">Requisitos</a></li>

                        <li><a href="IMA-TT-Ubicacion">Ubicaci&oacute;n</a></li>

                      </ul> -->

                    </li>

                </ul>



                <aside id="menu-social">

                  <ul id="nav-social">

                    <li><a href="mailto:direcciondeturismo@mca.gov.py"><img src="imagenes/email.png" width="45"></a></li>

                    <li><a href="https://www.facebook.com/pages/Instituto-Municipal-de-Arte/154944157891993"><img src="imagenes/facebook.png" width="45"></a></li>

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

            <p>El Instituto Municipal de Arte (IMA) es un centro de formaci&oacute;n art&iacute;stica que forma parte de la Direcci&oacute;n General de Cultura y Turismo de la Municipalidad de Asunci&oacute;n.<p/>
            <p>El IMA es una Instituci&oacute;n de reconocido prestigio en el &aacute;mbito local e internacional, por el alto desempe&ntilde;o de sus alumnos y est&aacute; dirigido por la destacada guitarrista nacional la Lic. Luz Mar&iacute;a Bobadilla en la actualidad.<p/>
            <p>El objetivo de esta Instituci&oacute;n es promover y desarrollar la formaci&oacute;n cultural de la comuna en el terreno de las artes y otras disciplinas t&eacute;cnicas, en favor de la capacidad expresiva y creadora de nuevos artistas. Es la Instituci&oacute;n l&iacute;der en la formaci&oacute;n acad&eacute;mica del arte y est&aacute; comprometido a contribuir al pleno desarrollo art&iacute;stico, emocional e intelectual de las personas a trav&eacute;s de iniciativas y actividades culturales.<p/>
            <p>En la Instituci&oacute;n, reciben clases en las diversas disciplinas m&aacute;s de 700 alumnos entre ni&ntilde;os, j&oacute;venes y adultos. El IMA brinda a la poblaci&oacute;n ense&ntilde;anza gratuita de primer nivel, garantizando la igualdad de oportunidades y la no discriminaci&oacute;n de ninguna naturaleza.<p/>
            <p> e ingresantes en el a&ntilde;o 2013 alrededor de 250 nuevos alumnos, atendidos por un calificado n&uacute;cleo de especialistas con m&aacute;s de 100 miembros entre maestros, auxiliares y personal t&eacute;cnico<p/>.
           <p> Antecedentes:<p/>
            <p>La Direcci&oacute;n del IMA tiene su origen en el Departamento de Cultura y Arte iniciada en el a&ntilde;o 1952 con la Intendencia del Ingeniero Jos&eacute; Domingo Ocampo, posteriormente a trav&eacute;s de la Resoluci&oacute;n de Intendencia 361/64 se unifica varias Jefaturas existentes en el &aacute;mbito Municipal tales como Escuela de Arte Esc&eacute;nico, Escuela de Danza Folkl&oacute;rica, y el Conservatorio Municipal de M&uacute;sica. Que posteriormente fueron constituy&eacute;ndose por medio de Resoluciones emanadas de la Intendencia nro. 211/64, tambi&eacute;n la Escuela Municipal de Arte Infantil y la Escuela Municipal de Canto por Resoluci&oacute;n nro. 112/66.<p/>
            <p>El Instituto Municipal de Arte fue creado por Decreto nro. 2021/70 del Poder Ejecutivo.<p/>
<br>
            <p>FAVOR CAMBIAR ESTOS ITEMS EN LA PARTE DONDE HABLAN DE LAS SGTES ESCUELAS:<p/>
<br>
            <p>-Conservatorio de M&uacute;sica <p/>
            <p>*LOCAL : Juan de Salazar 331 casi Artigas (ANGLO)<p/>
<br>
            <p>-Esc. de LOCUCION <p/>
            <p>*LOCAL : Juan de Salazar entre Artigas y San Jos&eacute; (ANGLO)<p/>
<br>
            <p>-Taller de teatro “Mar&iacute;a Elena Sachero”<p/>
            <p>*LOCAL:  Colegio de Economistas Graduados Mcal. L&oacute;pez casi Tacuary<p/>




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