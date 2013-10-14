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
              --><li class="col-3"><a href="TM-sala.php">Espacios</a><!--
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
                 <h3>Rese&ntilde;a Hist&oacute;rica</h3>
                 <h2>Orquesta Sinf&oacute;nica de la Ciudad de Asunci&oacute;n</h2>
                 <img src="imagenes/fotos/Teatro Vista escenario.jpg" alt="Orquesta sinfonica en el teatro" class="central">
                 <p>La primera referencia acerca de la existencia de orquestas en el Paraguay data del a&ntilde;o 1945, con la formaci&oacute;n de un grupo musical integrado por los espa&ntilde;oles Juan de Xara, Gregorio de Acosta y otros. Luego de este periodo se destacan las experiencias de los Jesuitas, quienes organizaron orquestas y coros conformados por ind&iacute;genas en las c&eacute;lebres reducciones, que alcanzaron niveles extraordinarios. En tiempos de la independencia (1881 en adelante) florecieron conjuntos musicales populares que entonaban los primeros aires con acento nacional derivados de la m&uacute;sica espa&ntilde;ola, adem&aacute;s de las bandas de m&uacute;sica impulsadas principalmente por instituciones militares. A mediados de la d&eacute;cada de 1850, el gobierno de Don Carlos Antonio L&oacute;pez contrata, con rango de ministro, al m&uacute;sico franc&eacute;s Francisco Sauvageot de Dupuis, para la creaci&oacute;n de escuelas y bandas de m&uacute;sica, llegando en pocos a&ntilde;os a consolidar unas treinta agrupaciones.</p>
                 <p> Espor&aacute;dicamente se conformaban grupos orquestales para actuar junto a compan&iacute;as de zarzuelas espa&ntilde;olas y &oacute;peras italianas que visitaban el pa&iacute;s hacia fines del siglo. El Semanario del 9 de mayo de 1863, refer&iacute;a: &quot;siguen con notables adelantos las lecciones de la nueva orquesta que esta bajo la direcci&oacute;n del joven inteligente Cantalicio Guerrero, sargento de la banda de m&uacute;sica de Dragones&quot;. En 1980 se creo la orquesta nacional dirigida por el citado Guerrero, gozando de apoyo estatal. Esta agrupaci&oacute;n de cuarenta m&uacute;sicos participaba en las representaciones l&iacute;ricas del teatro nacional.</p>
                    <p>Con el correr de los a&ntilde;os se organizaban agrupaciones orquestales de menores dimensiones, y tambi&eacute;n de ef&iacute;mera existencia con el apoyo de entidades culturales como el Instituto Paraguayo, el Gimnasio Paraguayo con la direcci&oacute;n de Nicolino Pellegrini, Fernando Centuri&oacute;n y otros. En 1912 se cre&oacute; la Banda de M&uacute;sicos de la Polic&iacute;a de la Capital, instituci&oacute;n que supli&oacute; durante d&eacute;cadas la falta de una orquesta sinf&oacute;nica estable a trav&eacute;s de sus c&eacute;lebres retretas (conciertos al aire libre en plazas p&uacute;blicas). En 1928 Remberto Gim&eacute;nez organiz&oacute; la primera orquesta sinf&oacute;nica, de vida breve y presentaciones espor&aacute;dicas. En 1945, bajo propuesta del Concejal Municipal Honorio Campuzano, se creo la Orquesta Sinf&oacute;nica de Asunci&oacute;n, dependiente del municipio capitalino, pero sin lograrse su puesta en ejecuci&oacute;n. Igual, su situaci&oacute;n se debati&oacute; ese a&ntilde;o en el Parlamento para la creaci&oacute;n de la Orquesta Sinf&oacute;nica Nacional, proyecto truncado por los sucesos pol&iacute;ticos del momento. Luego de numerosos intentos la Asociaci&oacute;n de M&uacute;sicos del Paraguay cre&oacute; la Orquesta Folkl&oacute;rica, convertida a partir de 1950 en la Orquesta Sinf&oacute;nica de la AMP, con hist&oacute;ricas actuaciones bajo la direcci&oacute;n de Carlos Lara Bareiro. En 1957 siendo Intendente Municipal de Asunci&oacute;n el Ing. Nicol&aacute;s de Bari Flecha, se creo la Orquesta Sinf&oacute;nica de la Ciudad de Asunci&oacute;n (OSCA), su primer director fue Remberto Gim&eacute;nez hasta 1973, luego Florent&iacute;n Jim&eacute;nez hasta 1990 y en la actualidad Luis Szar&aacute;n. En los &uacute;ltimos a&ntilde;os, mediante un convenio entre la Municipalidad de Asunci&oacute;n y la Sociedad Filarm&oacute;nica de Asunci&oacute;n, esta &uacute;ltima instituci&oacute;n cultural sin fines de lucro, asumi&oacute; la responsabilidad de organizar, administrar y promocionar las actividades de la OSCA.</p>
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