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
                    --><li><a href="MdlR-C-Emesa.php">Casa Emesa</a></li><!--  
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
                 <h3>Quien fue...?</h3>
                 <h2>... DOMINGO MARTINEZ  DE IRALA</h2>
                 <p> Hab&iacute;a nacido en un pueblo de Guip&uacute;zcoa llamado Vergara, el ano 1510.  Era hijo del escribano real don Mart&iacute;n P&eacute;rez de Irala y de dona Marina de  Toledo Albis&uacute;a. Embarc&oacute; en la expedici&oacute;n de don Pedro de Mendoza como  secretario de Juan de Ayolas.</p>
                 <p>Cuando &eacute;ste subi&oacute;  con su expedici&oacute;n a la Sierra de la Plata lo llev&oacute; consigo, confi&aacute;ndole el  mando de uno de los tres bergantines expedicionarios. Antes de internarse en el  Chaco, Ayolas le nombr&oacute; su teniente general dej&aacute;ndolo al cuidado de los barcos  con orden de esperarle en Candelaria.</p>
                 <p>Irala fue apresado  en Tap&uacute;a y durante ese tiempo hab&iacute;a vuelto Ayolas y ca&iacute;do asesinado por los  payagu&aacute;es. Estando Irala de regreso en el fuerte de Asunci&oacute;n, en abril de 1539  qued&oacute; establecido que el puesto de teniente de gobernador le correspond&iacute;a a &eacute;l,  por el mandato que le dejara Ayolas.<br>
                   As&iacute;, Domingo  Mart&iacute;nez de Irala asumi&oacute; el gobierno del Paraguay y R&iacute;o de la Plata. Su primera  medida de gobierno consisti&oacute; en ordenar la despoblaci&oacute;n del puerto del Buen  Aire y reunir en el fuerte de<br>
                   Asunci&oacute;n los  reducidos restos de aquella brillante expedici&oacute;n como elemental disposici&oacute;n de  seguridad para evitar su total aniquilamiento.</p>
                 <p>El 16 de setiembre  de 1541, cre&oacute; el primer cabildo asunceno convirtiendo de este modo el fuerte en  la primera ciudad del Plata.</p>
                 <h2>... LEONOR</h2>
                 <p>La  captura e intercambio de las mujeres ind&iacute;genas inicia el largo proceso de  mestizaje en el que Asunci&oacute;n es el n&uacute;cleo. Una de esas primeras mujeres  descendiente del cacique Moquirace fue Leonor, quien tuvo descendencia con  Domingo Mart&iacute;nez de Irala. La hija de ambos, Ursula, fue la madre de Ruy D&iacute;az  de Guzm&aacute;n.                 </p>
                 <h2>. RUY DIAZ DE  GUZMAN</h2>
                 <p>Es el primer historiador paraguayo. Criollo, nacido hacia 1554, hijo  del capit&aacute;n Alonso Riquelme de Guzm&aacute;n y de Ursula, una de las hijas mestizas de  Domingo Mart&iacute;nez de Irala, es el primero que escribe un libro en esta regi&oacute;n de  Am&eacute;rica.                 </p>
                 <p>Soldado desde los 16  anos, asistente a la fundaci&oacute;n de la Villa Rica del Esp&iacute;ritu Santo, teniente  del Guair&aacute; y fundador, en 1593, de la ciudad de Santiago de Jerez, su actuaci&oacute;n  p&uacute;blica se dilata con honores hasta su muerte, acaecida en Asunci&oacute;n en junio de  1629, cuando era Alcalde Ordinario de Primer Voto.                 </p>
                 <p>En 1612, concluy&oacute; de  escribir &ldquo;La Argentina&rdquo;, cr&oacute;nica de la conquista del Paraguay y del R&iacute;o de la  Plata, que ha servido por mucho tiempo como principal fuente de informaci&oacute;n a  los estudiosos de la historia.                 </p>
                 <p>Ruy D&iacute;az de Guzm&aacute;n y  sus contempor&aacute;neos Hernando Arias de Saavedra y Roque Gonz&aacute;lez de Santa Cruz,  nativos de los incipientes n&uacute;cleos urbanos aqu&iacute; establecidos, representan, con  sus luchas y sus fatigas, con su acci&oacute;n sostenida y con sus proezas, la  incorporaci&oacute;n efectiva del criollo a la conducci&oacute;n de la sociedad paraguaya.                 </p>
                 <p>Mestizo por su  sangre y europeo por su cultura, Guzm&aacute;n no es ni indio ni espanol: constituye  un nuevo tipo de hombre, el paraguayo, que va surgiendo, quiz&aacute; sin clara  conciencia de ello, y que ha de erigirse en protagonista decisivo de la  historia de esta tierra. </p>
                 <h2>. JUAN A. SAMUDIO</h2>
                 <p>Naci&oacute; en Asunci&oacute;n en 1878; desde temprana edad se inici&oacute; en el estudio del  dibujo. Recibi&oacute; sus primeras lecciones de pintura en el antiguo Ateneo  Paraguayo, hasta que en 1903 obtiene con Pablo Adorno una beca ofrecida por el  gobierno italiano. Ingresan en la Academia Real de Roma y en 1906 participa  Samudio en la Exposici&oacute;n Internacional de Roma, &ldquo;honor que se otorga s&oacute;lo a los  pintores de m&eacute;rito&rdquo;. En 1908, Samudio y Alborno regresan a la patria y fundan  la &ldquo;Academia Nacional de Bellas Artes&rdquo;.                 </p>
                 <p>Fue Samudio uno de  los pintores nacionales que m&aacute;s sobresali&oacute; en el paisaje; intent&oacute; algo del &ldquo;impresionismo&rdquo;,  pero en realidad su pintura fue de tendencia &ldquo;naturalista&rdquo;. &nbsp;Samudio  falleci&oacute; en Asunci&oacute;n en el ano 1936.</p>
                 <h2>... MIGUEL ACEVEDO</h2>
                 <p>Era un artista del l&aacute;piz, pero tambi&eacute;n manejaba la pluma. Escrib&iacute;a con sencillez  y claridad. Sus caricaturas hicieron &eacute;poca en &ldquo;Cr&oacute;nica&rdquo;; asimismo, ilustr&oacute; las  p&aacute;ginas de &ldquo;El Diario&rdquo; y otros peri&oacute;dicos asuncenos.                 </p>
                 <p>Nacido en Villa  Florida, en 1889, curs&oacute; estudios en el Colegio Nacional de Asunci&oacute;n. Viaj&oacute; por  Francia en 1914. Su breve estada en Par&iacute;s enriqueci&oacute; su cultura y afin&oacute; su  l&aacute;piz. Falleci&oacute; en Asunci&oacute;n en 1915.</p>
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