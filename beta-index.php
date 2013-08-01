<?php header('Content-Type: text/html; charset=ISO-8859-15'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2"/>
     
<title>Direcion General de Cultura y Turismo</title>

    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/calendarioIndex.css" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,follow" />

    <?php include("ajax.inc.php");?>

<style type="text/css">
body,td,th {
	font-family: maven_promedium;
}
</style>
</head>

<body onLoad="cargado();">
        <header id="cabecera">
          <section id="logo-grupo">

                <section id="logocult"> <img src="imagenes/DGCT2.png" alt="Direccion General de Cultura y Turismo" ></section>
                <section id="logoasu"> <img src="imagenes/logo2.png" alt="logo Asu"></section>

            </section>
    
            <aside>
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
            </aside>

        </header>

       <section id="contenido">
            <section id="con-izq">
                <section id="hoy">
                    <h2>HOY en Agenda</h2>
                    

                    <?php include_once('listar.ultimas.actividades.inc.php');?>


                </section>


                <aside id="Enlaces-interes">
                    <h2>Enlaces de Interes</h2>
                    <ul><li class="Enl-int"><a href="http://www.cabildoccr.gov.py/"><img src="imagenes/enlace.png"> Centro Cultural el Cabildo</a></li>

                        <li class="Enl-int"><a href="http://www.latam.citibank.com/paraguay/lapy/centro_cultural/main.htm"><img src="imagenes/enlace.png"> Centro Cultural Citi Bank</a></li>

                        <li class="Enl-int"><a href="http://www.ccpa.edu.py/"><img src="imagenes/enlace.png"> Centro Cultural Paraguayo Americano</a></li>

                        <li class="Enl-int"><a href="http://www.goethe.de/ins/pa/asu/esindex.htm?wt_sc=asuncion"><img src="imagenes/enlace.png"> Instituto Cultural Paraguayo Alem&aacute;n</a></li>

                        <li class="Enl-int"><a href="http://www.ambafrance-py.org/Alianza-Francesa-de-Asuncion"><img src="imagenes/enlace.png"> Alianza Francesa</a></li>

                        <li class="Enl-int"><a href="http://www.juandesalazar.org.py/"><img src="imagenes/enlace.png"> Centro Cultural Juan de Salazar</a></li>

                        <li class="Enl-int"><a href="http://www.embajada-argentina.org.py/V2/cultura/"><img src="imagenes/enlace.png"> Centro Cultural Embajada de Argentina</a></li>

                        <li class="Enl-int"><a href="http://www.cultura.gov.py/"><img src="imagenes/enlace.png"> Secretaria Nacional de Cultura</a></li>

                        <li class="Enl-int"><a href="http://www.senatur.gov.py/"><img src="imagenes/enlace.png"> Secretaria Nacional de Turismo</a></li>

                        <li class="Enl-int"><a href="http://www.asuncionconvention.com/"><img src="imagenes/enlace.png"> Asunci&oacute;n Convention Bureau</a></li>

                        <li class="Enl-int"><a href="http://www.bcp.gov.py/"><img src="imagenes/enlace.png"> Centro Cultural Banco Central</a></li>

                        <li class="Enl-int"><a href="http://www.quickguide.com.py/index.php?option=com_eventlist&view=categoryevents&id=1&Itemid=132"><img src="imagenes/enlace.png"> Gu&iacute;a de Asunci&oacute;n</a></li>

                        <li class="Enl-int"><a href="http://www.aihpy.org.py"><img src="imagenes/enlace.png"> Asociaci&oacute;n de Industriales del Paraguay</a></li>
                    </ul>
                </aside>
            </section>
            
            <section id="col-der">
                         <nav id="menu-Logos">
                             <ul id="nav-logos">   
                                <li><a href="TeatroMunicipal.php"><img src="imagenes/logo-04.png" alt="Teatro Municipal Ignacio A. Pane"></a></li>
          <li><a href="InstitutoMunicipalDeArte.php"><img src="imagenes/logo-09.png" ></a></li>
          <li><a href="ManzanaDeLaRivera.php"><img src="imagenes/logo-03.png" ></a></li>
          <li><a href="CentroParaguayoJapones.php"><img src="imagenes/logo-01.png" ></a></li>
          <li><a href="DierccionDeAccionCulturalYTurismo.php"><img src="imagenes/logo-07.png" alt="Diercción de Acción Cultural y Turismo"></a></li>
        </ul>
                            </ul>
                         </nav>
                <section id="calendario">

                    <h1><b>Agenda de Asunci&oacute;n</b></h1>

                    <div id="calendar">
                        
                        <?php include("calendario.inc.php");?>
                        
                    </div>

                        <div id="clear"></div>


                         <nav id="menu-temas">
                            <nav id="menu-temas">
                             <ul id="nav-temas">
                                <h2>Ver por tema</h2>
                            <?php include_once("listar.temas.inc.php");?>
                            </ul>

                        </nav> 
                </section>
                       
            <section id="Turismo">
                    <form class="form">
                        <h3>&iexcl;Recibi en tu correo todas las actividades de la Cuidad de Asunci&oacute;n!</h3>
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
            <!-- <p>Derechos reservados</p>
            <p>Contactenos en info@&iquest;?.com</p> -->
        </footer>

</body>
</html>