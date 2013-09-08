<?php header('Content-Type: text/html; charset=ISO-8859-15'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2"/>
     
<title>Direcci&oacute;n General de Cultura y Turismo</title>

    <link rel="icon" type="ico" href="imagenes/favicon.ico" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/calendarioIndex.css" />

    <?php include("ajax.inc.php");?>

    <style type="text/css">
    body,td,th {
    	font-family: maven_promedium;
    }
    </style>

    <script src="banner/jquery.js"></script>
    <script src="banner/amazingslider.js"></script>
    <script src="banner/initslider-1.js"></script>

</head>

<body onLoad="cargado();"> 
    <!-- ******************************* ANALYTICS ******************************************* -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-42889888-1', 'culturayturismoasu.com.py');
          ga('send', 'pageview');

        </script>
    <!-- ************************************************************************************* -->
        
        <header id="cabecera">
          <section id="logo-grupo">

            <section id="logocult"> <a href="beta-index.php"> <img src="imagenes/DGCT2.png" alt="Direccion General de Cultura y Turismo" ></a></section>
            <section id="logoasu"> <a href="beta-index.php"> <img src="imagenes/Logo-Asu.png" alt="logo Asu"></a></section>
            <section id="logoasurohayhu"> <a href="beta-index.php"> <img src="imagenes/Logo-Rohayhu-Asu.png" alt="logo Asu"></a></section>
                
            <div id="clima">
            <!-- www.TuTiempo.net - Ancho:176px - Alto:36px -->
            <div id="TT_thZgbhdhYQQ7n8GK7Azv1vkvkWllTKQ2LY1t1cC5qEz"><h3><a href="http://www.tutiempo.net">el tiempo</a></h3></div>
            <script type="text/javascript" src="http://www.tutiempo.net/widget/eltiempo_thZgbhdhYQQ7n8GK7Azv1vkvkWllTKQ2LY1t1cC5qEz"></script>
            </div>

                <nav id="menu-social">
                     <ul id="nav-social">
                        <li><a href="mailto:culturayturismoasu.com.py"><img src="imagenes/email.png" ></a></li>
                        <li><a href="https://www.facebook.com/CulturaAsu"><img src="imagenes/facebook.png" ></a></li>
                         <li><a href="https://twitter.com/CulturaAsu"><img src="imagenes/twitter.png" ></a></li>
                        <!--<li><a href="#"><img src="imagenes/skype.png" width="45"></a></li>
                        <li><a href="#"><img src="imagenes/youtube.png" width="45"></a></li>
                        <li><a href="#"><img src="imagenes/googleplus.png" width="45"></a></li> -->
                    </ul>
                </nav>

            </section>



        </header>
            <section id="banner">
<!-- ******************************************************* -->
       
   <div id="amazingslider-1">
        <ul class="amazingslider-slides" style="display:none;">
            <!-- <li><img src="images/Foto-1.jpg" alt="TITULO DE LA FOTO" data-description="Descripcion de la foto" /></li> -->
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
    </div>
       
        
<!-- ******************************************************* -->
            </section>
        <!-- <div id="borde"></div> -->
       <section id="contenido">
                      
            <section id="con-izq">
                <section id="hoy">
                    <h2>HOY en Agenda</h2>
                    
                    <?php include_once('listar.ultimas.actividades.inc.php');?>

                </section>

                <aside id="Enlaces-interes">
                    <h2>Mas eventos en...</h2>
                    <ul>
                        <li class="Enl-int"><a href="http://www.cabildoccr.gov.py/" target="_blanck"> Centro Cultural el Cabildo</a></li>

                        <li class="Enl-int"><a href="http://www.latam.citibank.com/paraguay/lapyco/centro_cultural/main.htm" target="_blanck"> Centro Cultural Citibank</a></li>

                        <li class="Enl-int"><a href="http://www.ccpa.edu.py/" target="_blanck"> Centro Cultural Paraguayo Americano</a></li>

                        <li class="Enl-int"><a href="http://www.goethe.de/ins/pa/asu/esindex.htm?wt_sc=asuncion" target="_blanck"> Instituto Cultural Paraguayo Alem&aacute;n</a></li>

                        <li class="Enl-int"><a href="http://www.ambafrance-py.org/Alianza-Francesa-de-Asuncion" target="_blanck"> Alianza Francesa</a></li>

                        <li class="Enl-int"><a href="http://www.juandesalazar.org.py/" target="_blanck"> Centro Cultural Juan de Salazar</a></li>

                        <li class="Enl-int"><a href="http://www.embajada-argentina.org.py/V2/cultura/" target="_blanck"> Centro Cultural Embajada de Argentina</a></li>

                        <li class="Enl-int"><a href="http://www.cultura.gov.py/" target="_blanck"> Secretaria Nacional de Cultura</a></li>

                        <li class="Enl-int"><a href="http://www.senatur.gov.py/" target="_blanck"> Secretaria Nacional de Turismo</a></li>

                        <li class="Enl-int"><a href="http://www.asuncionconvention.com/" target="_blanck"> Asunci&oacute;n Convention Bureau</a></li>

                        <li class="Enl-int"><a href="http://www.bcp.gov.py/" target="_blanck"> Centro Cultural Banco Central</a></li>

                        <li class="Enl-int"><a href="http://www.quickguide.com.py/index.php?option=com_eventlist&view=categoryevents&id=1&Itemid=132" target="_blanck"> Gu&iacute;a de Asunci&oacute;n</a></li>

                        <li class="Enl-int"><a href="http://www.aihpy.org.py" target="_blanck"> Asociaci&oacute;n de Industriales del Paraguay</a></li>
                    </ul>
                </aside>
            </section>
            
            <section id="col-der">
                <section id="cuadros">

                    <figure class="puerta x L">
                      <figcaption class="R">Donde Dormir</figcaption>
                      <img src="#" alt="">
                    </figure>

                    <figure class="puerta y R">
                      <figcaption><span>Donde Comer</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                      <a href="#">#fugiat ipsam incidunt omnis</a>
                      </figcaption>
                      <img src="#" alt="">
                    </figure>

                    <figure class="puerta x L">
                      <figcaption class="L">Vivi la Ciudad Como Turista</figcaption>
                      <img src="#" alt="">
                    </figure>

                </section>

                <section id="menu-temas">
                        <h2>Buscar por tema</h2>
                    <ul id="nav-temas">
                        <?php include_once("listar.temas.inc.php");?>
                    </ul>
                </section> 
                    
                <section id="calendario">
                    <h1><b>Agenda de Asunci&oacute;n</b></h1>
                    <div id="calendar">
                        <?php include("calendario.inc.php");?>
                    </div>
                </section>

            </section>

                <section id="Turismo">
                    <form class="form">
                        <h3>&iexcl;Recibi en tu correo todas las actividades de la Ciudad de Asunci&oacute;n!</h3>
                        <p class="name">
                            <input type="text" placeholder="Nombre y Apellido"name="nombre" id="name" />
                        </p>

                        <p class="email">
                            <input type="text" placeholder="Email"name="email" id="email" />
                        </p>
                        <p class="submit">
                            <input type="submit" value="ENVIAR" />
                        </p>
                    </form>
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
</html>