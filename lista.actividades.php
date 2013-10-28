
<!DOCTYPE html>
<html lang="es"><!-- InstanceBegin template="/Templates/DGCT.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta charset="utf-8" />
    <title>Direccion General de Cultura y Turismo</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/estilo-plant.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/calendario-plant.css" />
    <link rel="stylesheet" type="text/css" href="css/style4.css" />
    
     <?php include("ajax.inc.php");?>
       
</head>

<body>
        <section id="contenido">
        <header id="cabecera">
            <section id="logo-grupo">
            <section id="logocult"> <a href="beta-index.php"><img src="imagenes/DGCT.png" alt="Direccion General de Cultura y Turismo" ></a></section>
            <!-- InstanceBeginEditable name="logo" -->
            <section id="logoasu"> <img src="imagenes/logo.png" alt="logo Asu" widt="120"></section>
            <!-- InstanceEndEditable --></section>



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
       
      <ul class="cb-slideshow">
            <li><span>Image 01</span><div><h3>Instituto municipal de arte</h3></div></li>
            <li><span>Image 02</span><div><h3>Ballet Municipal Clasico y moderno</h3></div></li>
            <li><span>Image 03</span><div><h3>Centro cultural de la ciudad Manzana la rivera</h3></div></li>
            <li><span>Image 04</span><div><h3>Teatro municipal Ignacio A. Pane</h3></div></li>
            <li><span>Image 05</span><div><h3>qui·e·tude</h3></div></li>
            <li><span>Image 06</span><div><h3>re·lax·a·tion</h3></div></li>
        </ul>
        
<!-- ******************************************************* -->
            </section>
            <section >
               <nav id="menu-logos">
                     <ul id="nav-logos">    
                         <li><a href="Teatro-municipal.php"><img src="imagenes/logo-04.png" width="138" ></a></li>
                        <li><a href="OSCA.php"><img src="imagenes/logo-10.png" width="138" ></a></li>
                        <li><a href="IMA.php"><img src="imagenes/logo-09.png" width="138" ></a></li>
                        <li><a href="Manzana-de-la-rivara.php"><img src="imagenes/logo-03.png" width="138" ></a></li>
                        <li><a href="CPJ.php"><img src="imagenes/logo-01.png" width="138" ></a></li>
                    </ul>

                </nav>
            </section>
            <section id="derecha">
                <section id="agenda">
                    <img src="imagenes/T-agenda.png"><!-- InstanceBeginEditable name="Noticias" --><div class="nota"><h2>Actividades del dia</h2>
 
                      
						<?php include("listar.ultimas.actividades.inc.php");?> </div>

						<!-- InstanceEndEditable --></section>

                <section id="galeria">
                    <img src="imagenes/T-galeria.png">
                    <div id="contenerdor-media">
                        <div class="media"><a href="#"><img src="imagenes/tur.jpg" width="140"></a></div>
                        <div class="media"><a href="#"><img src="imagenes/tur.jpg" width="140"></a></div>
                        <div class="media"><a href="#"><img src="imagenes/tur.jpg" width="140"></a></div>
                        <div class="media"><a href="#"><img src="imagenes/tur.jpg" width="140"></a></div>
                    </div>
                </section>
</section>

            <section id="izquierda">

                <img src="imagenes/T-calendario.png">
             
                  <div id="cal">



                <section id="calendario">
                    <div id="calendar">
                       <?php include("calendario.inc.php");?>
                    </div>
 <img src="imagenes/sombra2.png"  align="bottom"/>
<!-- ************** Fin Calendario ********* -->



                    <h2>Buscar por tema</h2>
                         <nav id="menu-temas">
                             <ul id="nav-temas">
                                <li><a href="#"><img src="imagenes/vinheta.png" alt:"viñeta"> Cine </a></li>
                                <li><a href="#"><img src="imagenes/vinheta.png" alt:"viñeta"> Festivales </a></li>
                                <li><a href="#"><img src="imagenes/vinheta.png" alt:"viñeta"> Danza </a></li>
                                <li><a href="#"><img src="imagenes/vinheta.png" alt:"viñeta"> Ferias y Congresos </a></li>
                                <li><a href="#"><img src="imagenes/vinheta.png" alt:"viñeta"> Musica </a></li>
                                <li><a href="#"><img src="imagenes/vinheta.png" alt:"viñeta"> Exposiciones </a></li>
                                <li><a href="#"><img src="imagenes/vinheta.png" alt:"viñeta"> Museo </a></li>
                                <li><a href="#"><img src="imagenes/vinheta.png" alt:"viñeta"> Otros </a></li></ul>
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

                                <li><a href="http://www.goethe.de/ins/pa/asu/esindex.htm?wt_sc=asuncion"><img src="imagenes/vinheta.png">Instituto Cultural Paraguayo Alem&aacute;n</a></li>

                                <li><a href="http://www.ambafrance-py.org/Alianza-Francesa-de-Asuncion"><img src="imagenes/vinheta.png"> Alianza Francesa</a></li>

                                <li><a href="http://www.juandesalazar.org.py/"><img src="imagenes/vinheta.png"> Centro Cultural Juan de Salazar</a></li>

                                <li><a href="http://www.embajada-argentina.org.py/V2/cultura/"><img src="imagenes/vinheta.png"> Centro Cultural Embajada de Argentina</a></li>

                                <li><a href="http://www.cultura.gov.py/"><img src="imagenes/vinheta.png"> Secretaria Nacional de Cultura</a></li>

                                <li><a href="http://www.senatur.gov.py/"><img src="imagenes/vinheta.png">Secretaria Nacional de Turismo</a></li>

                                <li><a href="http://www.asuncionconvention.com/"><img src="imagenes/vinheta.png">Asunci&oacute;n Convention Bureau</a></li>

                                <li><a href="http://www.bcp.gov.py/"><img src="imagenes/vinheta.png"> Centro Cultural Banco Central</a></li>

                                <li><a href="http://www.quickguide.com.py/index.php?option=com_eventlist&view=categoryevents&id=1&Itemid=132"><img src="imagenes/vinheta.png"> Gu&iacute;a de Asunci&oacute;n</a></li>

                                <li><a href="http://www.aihpy.org.py"><img src="imagenes/vinheta.png">Asociaci&oacute;n de Industriales del Paraguay</a></li>
                                </ul>

                        </nav>
                     <div class="sombra"><img  src="imagenes/sombra2.png" align="bottom"/></div>

                </aside>  
            </section>




       <footer id="pie">

</footer> 


</body>
<!-- InstanceEnd --></html>