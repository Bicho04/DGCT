<?php header('Content-Type: text/html; charset=ISO-8859-15'); ?> 
<!DOCTYPE html>
<html lang="es"><!-- InstanceBegin template="/Templates/TeatroMunicipal.dwt" codeOutsideHTMLIsLocked="false" -->
<?php $entidad="c4ca4";?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2"/>
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Teatro Municioal Ignacio A. Pane</title> 
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
              --><li class="col-3"><a href="TM-sala.php">Escacios</a><!--
                --><ul><!-- 
                    --><li><a href="TM-TgnacioA.Pane.php">Ignacio A. Pane</a></li><!-- 
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
                        <li><a href="TM-OSCA-Director.php">Direcctor</a></li> 
                        <li><a href="TM-OSCA-Integrantes.php">Integrantes</a></li>
                      </ul>
                    </li>
                    <li><a href="#">OCMA</a>
                      <ul> 
                        <li><a href="TM-OCMA-Historia.php">Historia</a></li>  
                        <li><a href="TM-OCMA-Director.php">Direcctor</a></li> 
                        <li><a href="TM-OCMA-Integrantes.php">Integrantes</a></li>
                      </ul>
                    </li>
                    <li><a href="#">Ballet Cl&aacute;sico y Folcl&oacute;rico Municipal</a>
                      <ul> 
                        <li><a href="TM-BCYFM-Historia.php">Historia</a></li>  
                        <li><a href="TM-BCYFM-Director.php">Direcctor</a></li> 
                        <li><a href="TM-BCYFM-Integrantes.php">Integrantes</a></li>
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
                 <h3>Resena Historica</h3>
                 <h2>Orquesta Sinf�nica de la Ciudad de Asunci�n</h2>
                 <p>La primera referencia acerca de la existencia de orquestas en el Paraguay data del ano 1945, con la formaci�n de un grupo musical integrado por los espanoles Juan de Xara, Gregorio de Acosta y otros. Luego de este periodo se destacan las experiencias de los Jesuitas, quienes organizaron orquestas y coros conformados por ind�genas en las c�lebres reducciones. Y que alcanzaron niveles extraordinarios. En tiempos de la independencia (1881 en adelante) florecieron conjuntos musicales populares que entonaban los primeros aires con acento nacional derivados de la m�sica espanola, adem�s de las bandas de m�sica impulsadas principalmente por instituciones militares. A mediados de la d�cada de 1850, el gobierno de Don Carlos Antonio L�pez contrata, con rango de ministro, al m�sico franc�s Francisco Sauvageot de Dupuis, para la creaci�n de escuelas y bandas de m�sica, llegando en pocos anos a consolidar unas treinta agrupaciones.-</p>
                 <p> Espor�dicamente se conformaban grupos orquestales para actuar junto a compan�as de zarzuelas espanolas y �peras italianas que visitaban el pa�s hacia fines del siglo. El Semanario del 9 de mayo de 1863, refer�a: &quot;siguen con notables adelantos las lecciones de la nueva orquesta que esta bajo la direcci�n del joven inteligente Cantalicio Guerrero, sargento de la banda de m�sica de Dragones&quot;. En 1980 se creo la orquesta nacional dirigida por el citado Guerrero, gozando de apoyo estatal. Esta agrupaci�n de cuarenta m�sicos participaba en las representaciones l�ricas del teatro nacional.-</p>
                    <p>Con el correr de los anos se organizaban agrupaciones orquestales de menores dimensiones, y tambi�n de ef�mera existencia con el apoyo de entidades culturales como el Instituto Paraguayo, el Gimnasio Paraguayo con la direcci�n de Nicolino Pellegrini, Fernando Centuri�n y otros. En 1912 se cre� la Banda de M�sicos de la Polic�a de la Capital, instituci�n que supli� durante d�cadas la falta de una orquesta sinf�nica estable a trav�s de sus c�lebres retretas (conciertos al aire libre en plazas p�blicas). En 1928 Remberto Gim�nez organiz� la primera orquesta sinf�nica, de vida breve y presentaciones espor�dicas. En 1945, bajo propuesta del Concejal Municipal Honorio Campuzano, se creo la Orquesta Sinf�nica de Asunci�n, dependiente del municipio capitalino, pero sin lograrse su puesta en ejecuci�n. Igual, su situaci�n se debati� ese ano en el Parlamento para la creaci�n de la Orquesta Sinf�nica Nacional, proyecto truncado por los sucesos pol�ticos del momento. Luego de numerosos intentos la Asociaci�n de M�sicos del Paraguay cre� la Orquesta Folkl�rica, convertida a partir de 1950 en la Orquesta Sinf�nica de la AMP, con hist�ricas actuaciones bajo la direcci�n de Carlos Lara Bareiro. En 1957 siendo Intendente Municipal de Asunci�n el Ing. Nicol�s de Bari Flecha, se creo la Orquesta Sinf�nica de la Ciudad de Asunci�n (OSCA), su primer director fue Remberto Gim�nez hasta 1973, luego Florent�n Jim�nez hasta 1990 y en la actualidad Luis Szar�n. En los �ltimos anos, mediante un convenio entre la Municipalidad de Asunci�n y la Sociedad Filarm�nica de Asunci�n, esta �ltima instituci�n cultural sin fines de lucro, asumi� la responsabilidad de organizar, administrar y promocionar las actividades de la OSCA.-</p>
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
          <li><a href="DierccionDeAccionCulturalYTurismo.php"><img src="imagenes/Logo-DACT.png" alt="Diercci�n de Acci�n Cultural y Turismo"></a></li>
      </ul>
   </nav>
  </footer>

</body>
<!-- InstanceEnd --></html>