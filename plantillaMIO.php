
<!DOCTYPE html>
<html lang="es"><!-- InstanceBegin template="/Templates/DGCT.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <title>Direccion General de Cultura y Cultura</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/estilo-plant.css" />
    <link rel="stylesheet" type="text/css" href="css/calendario-plant.css" />

<?php
$noscript=true;
include("ajax.inc.php");
?>


     <script src="sliderengine/jquery.js"></script>
    <script src="sliderengine/amazingslider.js"></script>
    <script src="sliderengine/initslider-1.js"></script>
    
       
</head>

<body onLoad="cargado();">
  <section id="contenido">
    <header id="cabecera">
      <section id="logo-grupo">

      <section id="logocult"> <a href="beta-index.php"><img src="imagenes/Logo-08.png" alt="Direccion General de Cultura y Turismo" ></a></section>
      <section id="logoasu"> <img src="imagenes/logo.png" alt="logo Asu" widt="120"></section>

      </section>}

      <aside>
        <nav id="menu-social">
          <ul id="nav-social">
            <li><a href="mailto:direcciondeturismo@mca.gov.py"><img src="imagenes/email.png" width="45"></a></li>
            <li><a href="https://www.facebook.com/CulturaAsu"><img src="imagenes/facebook.png" width="45"></a></li>
            <!--  <li><a href="#"><img src="imagenes/twitter.png" width="45"></a></li>
            <li><a href="#"><img src="imagenes/skype.png" width="45"></a></li>
            <li><a href="#"><img src="imagenes/youtube.png" width="45"></a></li>
            <li><a href="#"><img src="imagenes/googleplus.png" width="45"></a></li> -->
          </ul>
        </nav>
      </aside>
    </header>
    <section id="banner">
<!-- ******************************************************* -->
       
   <div id="amazingslider-1">
        <ul class="amazingslider-slides">
            <li><img src="images/Foto-1.jpg" alt="Foto-1" /></li>
            <li><img src="images/Foto-2.jpg" alt="Foto-2" /></li>
            <li><img src="images/Foto-3.jpg" alt="Foto-3" /></li>
            <li><img src="images/Foto-4.jpg" alt="Foto-4" /></li>
        </ul>
    </div>
       
        
<!-- ******************************************************* -->
    </section>
      <nav id="menu-logos">
        <ul id="nav-logos">    
          <li><a href="Teatro-municipal.php"><img src="imagenes/logo-04.png" width="138" ></a></li>
          <li><a href="OSCA.php"><img src="imagenes/logo-10.png" width="138" ></a></li>
          <li><a href="IMA.php"><img src="imagenes/logo-09.png" width="138" ></a></li>
          <li><a href="Manzana-de-la-rivara.php"><img src="imagenes/logo-03.png" width="138" ></a></li>
          <li><a href="CPJ.php"><img src="imagenes/logo-01.png" width="138" ></a></li>
         </ul>
      </nav>


    <section id="central">
    <section id="derecha">
      <section id="agenda">
              
        <img src="imagenes/T-agenda.png"> 
        <h2>Actividades del dia</h2>
        <?php include("actividadesdeldia.inc.php");?>
        
      </section>
		</section>

    <section id="izquierda">
      <img src="imagenes/T-calendario.png">
      <div id="cal">
        <section id="calendario">
          <div id="calendar">
            <!-- <?php include("calendario.inc.php");?> -->
              
          </div>
                    <img src="imagenes/sombra2.png"  align="bottom"/>
                  <!-- ************** Fin Calendario ********* -->



                    <h2>Buscar por tema</h2>
                         <nav id="menu-temas">
                             <ul id="nav-temas">
                                
                                <?php include_once("listar.temas.inc.php");?>
                        </nav>


                    <img src="imagenes/sombra2.png"  align="bottom"/>
             </section>
              </div>
                <aside id="enlaces">               
                  <img src="imagenes/T-enlaces.png">
                  <nav id="menu-enlaces">
                    <ul id="nav-enlaces">
                      <li><a href="http://www.cabildoccr.gov.py/"><img src="imagenes/vinheta.png"> Centro Cultural el Cavildo</a></li>

                      <li><a href="http://www.latam.citibank.com/paraguay/lapy/centro_cultural/main.htm"><img src="imagenes/vinheta.png"> Centro Cultural Citi Banck</a></li>

                      <li><a href="http://www.ccpa.edu.py/"><img src="imagenes/vinheta.png"> Centro Cultural Paraguayo Americano</a></li>

                      <li><a href="http://www.goethe.de/ins/pa/asu/esindex.htm?wt_sc=asuncion"><img src="imagenes/vinheta.png"> Instituto Cultural Paraguayo Alem&aacute;n</a></li>

                      <li><a href="http://www.ambafrance-py.org/Alianza-Francesa-de-Asuncion"><img src="imagenes/vinheta.png"> Alianza Francesa</a></li>

                      <li><a href="http://www.juandesalazar.org.py/"><img src="imagenes/vinheta.png"> Centro Cultural Juan de Salazar</a></li>

                      <li><a href="http://www.embajada-argentina.org.py/V2/cultura/"><img src="imagenes/vinheta.png"> Centro Cultural Embajada de Argentina</a></li>

                      <li><a href="http://www.cultura.gov.py/"><img src="imagenes/vinheta.png"> Secretaria Nacional de Cultura</a></li>

                      <li><a href="http://www.senatur.gov.py/"><img src="imagenes/vinheta.png"> Secretaria Nacional de Turismo</a></li>

                      <li><a href="http://www.asuncionconvention.com/"><img src="imagenes/vinheta.png"> Asunci&oacute;n Convention Bureau</a></li>

                      <li><a href="http://www.bcp.gov.py/"><img src="imagenes/vinheta.png"> Centro Cultural Banco Central</a></li>

                      <li><a href="http://www.quickguide.com.py/index.php?option=com_eventlist&view=categoryevents&id=1&Itemid=132"><img src="imagenes/vinheta.png"> Gu&iacute;a de Asunci&oacute;n</a></li>

                      <li><a href="http://www.aihpy.org.py"><img src="imagenes/vinheta.png"> Asociaci&oacute;n de Industriales del Paraguay</a></li>
                    </ul>
                  </nav>
                    <div class="sombra"><img  src="imagenes/sombra2.png" align="bottom"/></div>

                  </aside>  
             </section>
          </section>
        </section>




       <footer id="pie">

      </footer> 


</body>
<!-- InstanceEnd --></html>www.quickguide.com.py/index.php?option=com_eventlist&view=categoryevents&id=1&Itemid=132"><img src="imagenes/vinheta.png"> Gu&iacute;a de Asunci&oacute;n</a></li>

                      <li><a href="http://www.aihpy.org.py"><img src="imagenes/vinheta.png"> Asociaci&oacute;n de Industriales del Paraguay</a></li>
                    </ul>
                  </nav>
                    <div class="sombra"><img  src="imagenes/sombra2.png" align="bottom"/></div>

                  </aside>  
             </section>
          </section>
        </section>




       <footer id="pie">

      </footer> 


</body>
<!-- InstanceEnd --></html>