
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <title>Direccion General de Cultura y Cultura</title>
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
  <section id="contenido">
    <header id="cabecera">
      <section id="logo-grupo">
        <section id="logocult"> <a href="beta-index.php"><img src="imagenes/Logo-08.png" alt="Direccion General de Cultura y Turismo" ></a></section>
         
        <section id="logoasu"> <img src="imagenes/logo.png" alt="logo Asu"></section>
      </section>

    
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
          <li><a href="Teatro-municipal.php"><img src="imagenes/logo-04.png" ></a></li>
          <li><a href="IMA.php"><img src="imagenes/logo-09.png" ></a></li>
          <li><a href="Manzana-de-la-rivara.php"><img src="imagenes/logo-03.png" ></a></li>
          <li><a href="CPJ.php"><img src="imagenes/logo-01.png" ></a></li>
          <li><a href="DACY.php"><img src="imagenes/logo-07.png" ></a></li>
        </ul>
      </nav>

    <section id="central">
      <div class="titulo"><h1>Centro Cultural Paraguayo Japones</h1></div>
      <ul class="hovercal">
        <li>
          <div class="titulo2">Agenda de la ciudad</div>
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
              --><li class="col-7"><a href="#">Histotia</a></li><!-- 
              --><li class="col-7"><a href="#">Histotia</a></li><!-- 
              --><li class="col-7"><a href="#">Histotia</a></li><!-- 
              --><li class="col-7"><a href="#">Histotia</a></li><!-- 
              --><li class="col-7"><a href="#">sub entidades</a><!--
                --><ul><!--
                  --><li><a href="#">1</a></li><!--
                  --><li><a href="#">2</a></li><!--
                  --><li><a href="#">3</a><!--
                  --><li><a href="#">3</a><!--
                  --><li><a href="#">3</a><!--
                  --><li><a href="#">3</a><!--
                    --><ul><!--
                      --><li><a href="#">1</a></li><!--
                      --><li><a href="#">2</a></li><!--
                      --><li><a href="#">2</a></li><!--
                      --><li><a href="#">2</a></li><!--
                    --></ul><!--
                  --></li><!--
                --></ul><!--
              --></li><!--
              --><li class="col-7"><a href="#">contacto</a></li><!--
              --><li class="col-7"><a href="#">algo mas</a><!--
                --><ul><!--
                  --><li><a href="#">1</a></li><!--
                  --><li><a href="#">2</a><!--
                    --><ul><!--
                      --><li><a href="#">1</a></li><!--
                      --><li><a href="#">2</a></li><!--
                      --><li><a href="#">2</a></li><!--
                      --><li><a href="#">2</a></li><!--
                      --><li><a href="#">2</a></li><!--
                      --><li><a href="#">2</a></li><!--
                      --><li><a href="#">2</a></li><!--
                    --></ul><!--
                  --></li><!--
                  --><li><a href="#">3</a><!--
                    --><ul><!--
                      --><li><a href="#">1</a></li><!--
                      --><li><a href="#">2</a></li><!--
                    --></ul><!--
                  --></li><!--
                --></ul><!--
              --></li><!--
             --></ul>

              <nav id="botones-entidad">
                <ul id="botones-entidad-nav">
                  <li><a href="#">Salon Seminario</a></li>
                  <li><a href="#">Cursos</a></li>
                  <li><a href="#">Sala Teatro</a></li>
                  <li><a href="#">Anfiteatro</a></li>
                  <li><a href="#">Biblioteca</a></li>
                </ul>
              </nav>

              <section id="cont-nota">
                <div class="nota">
                  <h2>Actividades</h2>
                  <img src="imagenes/logo-01.png"/>
                  <h3>Encuentro en el cpj</h3>
                  <span>
                    <a href="#">TEMA</a>
                    <a href="#">TAG-LARGO</a>
                  </span> 
                  <p>Espacio para encuentros culturales, recreativos y de reflexión, el Centro Cultural de la Ciudad es una institución dependiente de la Dirección de Cultura y Turismo de la Municipalidad de Asunción. </p>
                  <p>Espacio para encuentros culturales, recreativos y de reflexión, el Centro Cultural de la Ciudad es una institución dependiente de la Dirección de Cultura y Turismo de la Municipalidad de Asunción. </p>
                  <p>Espacio para encuentros culturales, recreativos y de reflexión, el Centro Cultural de la Ciudad es una institución dependiente de la Dirección de Cultura y Turismo de la Municipalidad de Asunción. </p>
                </div>
              </section>

            </div>   
          </div>
      </section>
    </section>
 
  <footer id="pie">

  </footer>  

</body>
</html>