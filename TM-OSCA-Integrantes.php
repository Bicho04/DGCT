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
                 <h3>Integrantes</h3>
                 <h2>Orquesta Sinfónica de la Ciudad de Asunción (OSCA)</h2>
                   <p><strong>Director: Maestro Luis Szarán</strong><br>
                  <strong>Integrantes:</strong></p>
                 <p><strong>Violines  I</strong><br>
                   Miguel A. Echeverría<br>
                   (Concertino)<br>
                   José María Calvo<br>
                   Rubén Darío Jara<br>
                   María Liz Calvo<br>
                   Juan Carlos Alvarenga<br>
                   Azucena Araujo<br>
                   Jaime Castillo<br>
                   Fátima Sánchez<br>
                   Gustavo Barrientos<br>
                   Ada Antúnez<br>
  <strong>Violines  II</strong><br>
                   José Miguel Echeverría<br>
                   (Solista)<br>
                   Gladys Barreto<br>
                   Fredeslinda Benítez<br>
                   Liliana Cardozo<br>
                   Paola Franco<br>
                   Jorge Zayas<br>
                   Sonia Martínez<br>
                   Blas Vivé<br>
                   Paola Goydy</p>
                 <p><strong>Violas</strong><br>
                   Luis Graziani (solista)<br>
                   Iván Celano<br>
                   Oscar Mendoza<br>
                   Saúl Gaona<br>
                   Andrés Báez Méndez<br>
                   Gloria Brítez Scolari<br>
                   Karina Florentín<br>
                   Rubén M. Jimenez</p>
                 <p><strong>Violoncellos</strong><br>
                   Oswaldo Rodríguez (solista)<br>
                   Glenda Campos<br>
                   Diógenes Acevedo<br>
                   Modesto Gómez<br>
                   Jorge Servián<br>
                   Liza Raquel González</p>
                 <p><strong>Contrabajos</strong><br>
                   Carlos Balbuena (solista)<br>
                   Lucas Franco<br>
                   Raquel Matiauda<br>
                   Miguel Angel Sosa<br>
                   Eliodoro Fleitas</p>
                 <p><strong>Flautas</strong><br>
                   Simón Santander (solista)<br>
                   Díosmedes Ruíz Diaz<br>
                   Hugo Valenzuela</p>
                 <p><strong>Oboes</strong><br>
                   Gabriel Graziani (solista)<br>
                   Martín Acosta Conde<br>
                   Fanny Gamarra</p>
                 <p><strong>Clarinetes</strong><br>
                   Carlos Jara (solista)<br>
                   Gustavo Pérez<br>
                   Roberto Benítez</p>
                 <p><strong>Fagotes</strong><br>
                   Hilaria Ferrari (solista)<br>
                   Tomás Ortiz</p>
                 <p><strong>Cornos</strong><br>
                   Juan B. Reyes (solista)<br>
                   Ramón Zaracho<br>
                   Giulio Andreotti<br>
                   Alcides Acosta<br>
                   Ramón O. Peralbo </p>
                 <p><strong>Trompetas</strong><br>
                   Valeriano Benitez (solista)<br>
                   Néstor R. Barreto<br>
  <strong>Trombones</strong><br>
                   Pablino Bordón (solista)<br>
                   Gabriel Ruiz<br>
                   César Daniel Sánchez</p>
                 <p><strong>Tuba</strong><br>
                   Cayo Franco</p>
                 <p><strong>Timbal</strong><br>
                   Benjamín Dos Santos</p>
                 <p><strong>Percusión</strong><br>
                   César Cipolla</p>
                 <p><strong>Piano</strong><br>
                   César Manuel Barrios</p>
                 <p><strong>Arpa</strong><br>
                   Marcos Lucena </p>
                 <p><strong>Secretario</strong><br>
                   A.Martínez Medina</p>
                 <p><strong>Archivo  Musical</strong><br>
                   Guillermo Benitez</p>
                 <p><strong>Auxiliares</strong><br>
                   Hugo Escurra<br>
                   Mirko Scappini<br>
                   Julián Balbuena<br>
                   Guillermo Bogado</p>
                 <p><strong>Producción</strong><br>
                   Raquel Becko</p>
                 <p><strong>Coordinación  General</strong><br>
                   Elba Perito</p>
                 <p><strong>Prensa  y Difusión</strong><br>
Techi</p>
 </div>
              </section>
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