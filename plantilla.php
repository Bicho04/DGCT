<?php header('Content-Type: text/html; charset=ISO-8859-15'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="content-type" content="text/html;charset=8859-2"/>
    <title>Direccion General de Cultura y Cultura</title>
    <link rel="icon" type="ico" href="imagenes/favicon.ico" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/estilo-plant.css" />
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
  <section id="contenido">
    <section id="banner">
<!-- ******************************************************* -->
       
   <div id="amazingslider-1">
        <ul class="amazingslider-slides" style="display:none;">
            <li><img src="imagenes/banner/1.jpg" alt="1"></li><!-- 
            <li><img src="imagenes/banner/2.jpg" alt="2"></li> -->
            <li><img src="imagenes/banner/3.jpg" alt="3"></li>
            <li><img src="imagenes/banner/4.jpg" alt="4"></li>
            <li><img src="imagenes/banner/5.jpg" alt="5"></li><!-- 
            <li><img src="imagenes/banner/6.jpg" alt="6"></li> --><!-- 
            <li><img src="imagenes/banner/7.jpg" alt="7"></li> -->
            <li><img src="imagenes/banner/8.jpg" alt="8"></li>
            <li><img src="imagenes/banner/9.jpg" alt="9"></li><!-- 
            <li><img src="imagenes/banner/10.jpg" alt="10"></li> --><!-- 
            <li><img src="imagenes/banner/11.jpg" alt="11"></li> -->
            <li><img src="imagenes/banner/12.jpg" alt="12"></li>
            <li><img src="imagenes/banner/13.jpg" alt="13"></li>
            <li><img src="imagenes/banner/14.jpg" alt="14"></li>
            <li><img src="imagenes/banner/15.jpg" alt="15"></li><!-- 
            <li><img src="imagenes/banner/16.jpg" alt="16"></li>
            <li><img src="imagenes/banner/17.jpg" alt="17"></li> -->
            <li><img src="imagenes/banner/18.jpg" alt="18"></li>
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
        </ul>
    </div>
       
        
<!-- ******************************************************* -->
            </section>
      
    <section id="central">
    <section id="derecha">
      <section id="agenda">
              
        <div class="titulo">En Agenda</div>

        <section id="cont-nota">
        
        <?php 
        $pagina="actividadesdeldia.inc.php";
        if(isset($_GET['codigoevento']))
        $pagina="ampliar.actividadesdeldia.inc.php";
        include("$pagina");
        ?>

        </section>
        
      </section>
		</section>

    <section id="izquierda">
      
        <div class="titulo2 "><h1>Agenda Asunci&oacute;n</h1></div>

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
                        <?php include_once("listar.temas.inc.php");?>
                      </ul>
                </nav>
            <!-- <img src="imagenes/sombra2.png"  align="bottom"/> -->
        </section>
      </div>
                <aside id="enlaces">               
                  <!-- <img src="imagenes/T-enlaces.png"> -->
                  <div class="titulo2 ">Mas eventos en...</div>
                  <nav id="menu-enlaces">
                    <ul id="nav-enlaces">
                      <li class="Enl-int"><a href="http://www.cabildoccr.gov.py/" target="_blanck"><img src="imagenes/vinheta.png"> Centro Cultural el Cabildo</a></li>

                        <li class="Enl-int"><a href="http://www.latam.citibank.com/paraguay/lapyco/centro_cultural/main.htm" target="_blanck"><img src="imagenes/vinheta.png"> Centro Cultural Citibank</a></li>

                        <li class="Enl-int"><a href="http://www.ccpa.edu.py/" target="_blanck"><img src="imagenes/vinheta.png"> Centro Cultural Paraguayo Americano</a></li>

                        <li class="Enl-int"><a href="http://www.goethe.de/ins/pa/asu/esindex.htm?wt_sc=asuncion" target="_blanck"><img src="imagenes/vinheta.png"> Instituto Cultural Paraguayo Alem&aacute;n</a></li>

                        <li class="Enl-int"><a href="http://www.ambafrance-py.org/Alianza-Francesa-de-Asuncion" target="_blanck"><img src="imagenes/vinheta.png"> Alianza Francesa</a></li>

                        <li class="Enl-int"><a href="http://www.juandesalazar.org.py/" target="_blanck"><img src="imagenes/vinheta.png"> Centro Cultural Juan de Salazar</a></li>

                        <li class="Enl-int"><a href="http://www.embajada-argentina.org.py/V2/cultura/" target="_blanck"><img src="imagenes/vinheta.png"> Centro Cultural Embajada de Argentina</a></li>

                        <li class="Enl-int"><a href="http://www.cultura.gov.py/" target="_blanck"><img src="imagenes/vinheta.png"> Secretaria Nacional de Cultura</a></li>

                        <li class="Enl-int"><a href="http://www.senatur.gov.py/" target="_blanck"><img src="imagenes/vinheta.png"> Secretaria Nacional de Turismo</a></li>

                        <li class="Enl-int"><a href="http://www.asuncionconvention.com/" target="_blanck"><img src="imagenes/vinheta.png"> Asunci&oacute;n Convention Bureau</a></li>

                        <li class="Enl-int"><a href="http://www.bcp.gov.py/" target="_blanck"><img src="imagenes/vinheta.png"> Centro Cultural Banco Central</a></li>

                        <li class="Enl-int"><a href="http://www.quickguide.com.py/index.php?option=com_eventlist&view=categoryevents&id=1&Itemid=132" target="_blanck"><img src="imagenes/vinheta.png"> Gu&iacute;a de Asunci&oacute;n</a></li>

                        <li class="Enl-int"><a href="http://www.aihpy.org.py" target="_blanck"><img src="imagenes/vinheta.png"> Asociaci&oacute;n de Industriales del Paraguay</a></li>
                    </ul>
                  </nav>
                    <div class="sombra"><img  src="imagenes/sombra2.png" align="bottom"/></div>

                  </aside>  
             </section>
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