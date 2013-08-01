<!DOCTYPE html>
<html lang="es"><!-- InstanceBegin template="/Templates/centroParaguayoJapones.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <title>Centro Paraguayo Japones</title> 
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
        <section id="logocult"><a href="beta-index.php"><img src="imagenes/logo-01.png" alt="Centro Paraguayo Japones" ></a></section>
         
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
          <li><a href="TeatroMunicipal.php"><img src="imagenes/logo-04.png" alt="Teatro Municipal Ignacio A. Pane"></a></li>
          <li><a href="InstitutoMunicipalDeArte.php"><img src="imagenes/logo-09.png" ></a></li>
          <li><a href="ManzanaDeLaRivera.php"><img src="imagenes/logo-03.png" ></a></li>
          <li><a href="CentroParaguayoJapones.php"><img src="imagenes/logo-01.png" ></a></li>
          <li><a href="DierccionDeAccionCulturalYTurismo.php"><img src="imagenes/logo-07.png" alt="Diercción de Acción Cultural y Turismo"></a></li>
        </ul>
      </nav>

    <section id="central">
      <div class="titulo"><h1>Centro Paraguayo Japones</h1></div>
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
              --><li class="col-4"><a href="CPJ-historia.php">Historia</a></li><!-- 
              --><li class="col-4"><a href="#">Salas</a><!-- 
                --><ul><!-- 
                    --><li><a href="CPJ-Sala-TeatroAPB.php">Teatro Agustín Pío Barrios</a></li><!--
                    --><li><a href="CPJ-Sala-Seminario.php">Sala Seminario Branislava Susnik</a><!--
                    --><li><a href="CPJ-Sala-Anfiteatro.php">Anfiteatro Oscar Cardozo Ocampo</a></li><!--
                    --><li><a href="CPJ-Sala-Exposicion.php">Sala de Exposiciones Jacinto Rivero</a></li><!--
                    --><li><a href="CPJ-Sala-Reuniones.php">Sala de Reuniones Agustina Miranda</a></li><!--
                    --><li><a href="CPJ-Sala-Biblioteca.php">Biblioteca Herib Campos Cervera</a></li><!--
                    --><li><a href="CPJ-Sala-Fisioterapia.php">Sala de Fisioterapia y Rehabilitación</a></li><!--
                --></ul><!-- 
              --></li><!-- 
              --><li class="col-4"><a href="CPJ-">Cursos</a><!-- 
                --><ul><!-- 
                   --><li><a href="CPJ-Cursos-Danza.php">Danza</a></li><!--
                    --><li><a href="CPJ-Cursos-Musica.php">Musica</a><!--
                    --><li><a href="CPJ-Cursos-Artes.php">Artes Visuales</a></li><!--
                    --><li><a href="CPJ-Cursos-Gimnasio.php">Gimnasio </a></li><!--
                    --><li><a href="CPJ-Cursos-Gimnasia.php">En Gimnasia Artástica</a></li><!--
              	--></ul><!-- 
              --></li><!-- 
              --><li class="col-4"><a href="CPJ-Contacto.php">Contacto</a></li><!-- 
           --></ul>

        <nav id="botones-entidad">
                <ul id="botones-entidad-nav">
                    <li><a href="CPJ-Sala-Seminario.php">Salon Seminario</a></li>
                    <li><a href="CPJ-Cursos.php">Cursos</a></li>
                    <li><a href="CPJ-Sala-TeatroAPB.php">Sala Teatro</a></li>
                    <li><a href="CPJ-Sala-Anfiteatro.php">Anfiteatro</a></li>
                    <li><a href="CPJ-Sala-Biblioteca.php">Biblioteca</a></li>
                </ul>
            </nav>
             <!-- InstanceBeginEditable name="INFO" -->
             <section id="cont-info">
                <div class="info">
                    <h3>Cursos</h3>
                    <a href="CPJ-Cursos-Danza.html"><h2>Academia de Danza</h2>
                    <p>La Academia de Danza del CPJ cuenta con reconocimiento del Ministerio de Educación y Cultura. Se dictan clases de danza Paraguaya, Kinder-Baby, Pre-Ballet, Clásica, Jazz, Española y Ritmos Latinos. Para niños, jóvenes y adultos a partir de 4 años.</p> 
                    <p>Cuenta con Salas especialmente equipadas con pisos de madera, espejos y barras fijas.</p>
                    <a href="CPJ-Cursos-Musica.html"><h2>Musica</h2><p>El Conservatorio de Música del Centro Paraguayo Japonés está reconocido por el Ministerio de Educación y Cultura. Ofrece clases individuales y grupales de Piano, Guitarra Popular  eléctrica y Clásica, Violín, Violonchelo, Arpa. Órgano,  Canto y Coro. Taller Musical Infantil</p>
                    <a href="CPJ-Cursos-Artes.html"><h2>En Artes Visuales</h2><p>el Centro Paraguayo Japonés ofrece Clases de Dibujo Artístico y Pintura al óleo para niños, jóvenes y adultos. </p>
                    <a href="CPJ-Cursos-Gimnasio.html"><h2>Gimnasio</h2><p>El gimnasio del Centro Paraguayo Japonés es el más completo de nuestro medio para la práctica de artes marciales y Gimnasia Artística. Clases de: Aikido, Karate Do, Judo, Taekwondo, Jiu Jitsu, Kung Fu, Bozen Do, Yawara Undo, Hap Kido y IAI DO (manejo de la espada japonesa o katana). </p>
                    <a href="CPJ-Cursos-Gimnasia.html"><h2>En Gimnasia Artística</h2><p> tenemos el gimnasio mejor equipado del país para
                    la práctica de ésta disciplina. Con equipos reglamentarios utilizados
                    y recomendados por la Federación Internacional de Gimnasia Artística,
                    de la marca Senoh, para prácticas en suelo, anillas caballetes de
                    salto, trampolines, vigas.
                    </p>
                    <a href="CPJ-Cursos-Fisiculturismo.html"><h2>Fisiculturismo y Musculación</h2><p>La Sala de Fisiculturismo y Musculación, cuenta con cintas caminadoras, bicicletas estáticas, barras, mancuernas, discos olímpicos y  equipos de musculación y steps para Gimnasia Aeróbica.</p>
                      <h2>El Centro Paraguayo Japonés, cuenta  además con importantes espacios
                    utilizados por la ciudadanía para la realización de diferentes
                    actividades y eventos a costos accesibles.</h2>
                </div>
              </section>
                  <!-- InstanceEndEditable --></div>  
    </section> 
  </section>
 
  <footer id="pie">

  </footer>  

</body>
<!-- InstanceEnd --></html>