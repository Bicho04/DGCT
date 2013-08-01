
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
     
    <title>Direcion General de Cultura y Turismo</title>

    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/calendarioIndex.css" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,follow" />

    <?php include("ajax.inc.php");?>

</head>

<body onLoad="cargado();">
        <header id="cabecera">
            <section id="logo-grupo">

                <section id="logocult"> <img src="imagenes/DGCT2.png" alt="Direccion General de Cultura y Turismo" ></section>
                <section id="logoasu"> <img src="imagenes/logo2.png" alt="logo Asu" widt="130"></section>

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
            <section id="con-izq">
                <section id="hoy">
                    <h2>HOY en Agenda</h2>

                   <?php include_once('listar.ultimas.actividades.inc.php');?>

                </section>


                <aside id="Enlaces-interes">
                    <h2>Enlaces de Interes</h2>
                    <ul>
                        <li class="Enl-int"><a href="www.#.com"><img src="imagenes/enlace.png"> Centro Cultural el Cavildo</a></li>
                        <li class="Enl-int"><a href="http://www.cabildoccr.gov.py/"><img src="imagenes/enlace.png"> Centro Cultural el Cavildo</a></li>

                        <li class="Enl-int"><a href="http://www.latam.citibank.com/paraguay/lapy/centro_cultural/main.htm"><img src="imagenes/enlace.png"> Centro Cultural Citi Banck</a></li>

                        <li class="Enl-int"><a href="http://www.ccpa.edu.py/"><img src="imagenes/enlace.png"> Centro Cultural Paraguayo Americano</a></li>

                        <li class="Enl-int"><a href="http://www.goethe.de/ins/pa/asu/esindex.htm?wt_sc=asuncion"><img src="imagenes/enlace.png"> Instituto Cultural Paraguayo Alemán</a></li>

                        <li class="Enl-int"><a href="http://www.ambafrance-py.org/Alianza-Francesa-de-Asuncion"><img src="imagenes/enlace.png"> Alianza Francesa</a></li>

                        <li class="Enl-int"><a href="http://www.juandesalazar.org.py/"><img src="imagenes/enlace.png"> Centro Cultural Juan de Salazar</a></li>

                        <li class="Enl-int"><a href="http://www.embajada-argentina.org.py/V2/cultura/"><img src="imagenes/enlace.png"> Centro Cultural Embajada de Argentina</a></li>

                        <li class="Enl-int"><a href="http://www.cultura.gov.py/"><img src="imagenes/enlace.png"> Secretaria Nacional de Cultura</a></li>

                        <li class="Enl-int"><a href="http://www.senatur.gov.py/"><img src="imagenes/enlace.png"> Secretaria Nacional de Turismo</a></li>

                        <li class="Enl-int"><a href="http://www.asuncionconvention.com/"><img src="imagenes/enlace.png"> Asunción Convention Bureau</a></li>

                        <li class="Enl-int"><a href="http://www.bcp.gov.py/"><img src="imagenes/enlace.png"> Centro Cultural Banco Central</a></li>

                        <li class="Enl-int"><a href="http://www.quickguide.com.py/index.php?option=com_eventlist&view=categoryevents&id=1&Itemid=132"><img src="imagenes/enlace.png"> Guía de Asunción</a></li>

                        <li class="Enl-int"><a href="http://www.aihpy.org.py"><img src="imagenes/enlace.png"> Asociación de Industriales del Paraguay</a></li>
                    </ul>
                </aside>
            </section>
            
            <section id="col-der">
                <section id="calendario">

                    <h1><b>Agenda de Asuncion</b></h1>

                    <div id="calendar">
                        <h2>
                            <a href="#" >&laquo;</a>  MAYO <a href="#" >&raquo;</a>
                        </h2>
                         <div id="filas">
                            <div class="dia" title="Lunes">Lun</div>
                            <div class="dia" title="Martes">Mar</div>
                            <div class="dia" title="Miercoles">Mier</div>
                            <div class="dia" title="Jueves">Juev</div>
                            <div class="dia" title="Viernes">Vier</div>
                            <div class="dia" title="Sabado">Sab</div>
                            <div class="dia" title="Domingo">Dom</div>
                         </div>
                         <div id="filas">
                            <div class="celdas">&nbsp;</div>
                            <div class="celdas">&nbsp;</div>
                            <div class="celdas"><a href="#">01</a></div>
                            <div class="celdas event"><a href="#">02</a></div>
                            <div class="celdas event">03<a href="#"> <img src="imagenes/numero_eventos/C-3_Evento.png" alt="3 eventos en este dia"></a></div>
                            <div class="celdas event"><a href="#">04</a></div>
                            <div class="celdas event"><a href="#">05</a></div>
                         </div>
                         <div id="filas">
                            <div class="celdas"<a href="#">06</a></div>
                            <div class="celdas"><a href="#">07</a></div>
                            <div class="celdas event"><a href="#">08</a></div>
                            <div class="celdas event"><a href="#">09</a></div>
                            <div class="celdas"><a href="#">10</a></div>
                            <div class="celdas event"><a href="#">11</a></div>
                            <div class="celdas event"><a href="#">12</a></div>
                         </div>
                         <div id="filas">
                            <div class="celdas"><a href="#">13</a></div>
                            <div class="celdas"><a href="#">14</a></div>
                            <div class="celdas"><a href="#">15</a></div>
                            <div class="celdas"><a href="#">16</a></div>
                            <div class="celdas event"><a href="#">17</a></div>
                            <div class="celdas event"><a href="#">18</a></div>
                            <div class="celdas event"><a href="#">19</a></div>
                         </div>
                         <div id="filas">
                            <div class="celdas">20</div>
                            <div class="celdas "><a href="#">21</a></div>
                            <div  class="celdas"><a href="#">22</a></div>
                            <div class="celdas event"><a href="#">23</a></div>
                            <div class="celdas"><a href="#">24</a></div>
                            <div class="celdas event"><a href="#">25</a></div>
                            <div class="celdas"><a href="#">26</a></div>
                         </div>
                         <div id="filas">
                            <div class="celdas event"><a href="#">27</a></div>
                            <div class="celdas event"><a href="#">28</a></div>
                            <div class="celdas"><a href="#">29</a></div>
                            <div class="celdas event"><a href="#">30</a></div>
                            <div class="celdas event"><a href="#">31</a></div>
                            <div class="celdas"><a href="#">&nbsp;</a></div>
                            <div class="celdas"><a href="#">&nbsp;</a></div>
                         </div>
                    </div>

                        <div id="clear"></div>


                         <nav id="menu-temas">
                            <h2>Ver por tema</h2>
                            <ul id="nav-temas">
                               <li><a href="#"> Cine </a></li>
                               <li><a href="#"> Festivales </a></li>
                               <li><a href="#"> Danza </a></li>
                               <li><a href="#"> Ferias y Congresos </a></li>
                               <li><a href="#"> Musica </a></li>
                               <li><a href="#"> Exposiciones </a></li>
                               <li><a href="#"> Museo </a></li>
                               <li><a href="#"> Otros </a></li>
                            </ul>   
                        </nav>
                </section> 
                         <nav id="menu-Logos">
                             <ul id="nav-logos">  
                             <h2>Entidades. ¡?</h2>  
                                <li><a href="TeatroMunicipal.php"><img src="imagenes/logo-04.png" alt="Teatro Municipal Ignacio A. Pane"></a></li>
                                <li><a href="InstitutoMunicipalDeArte.php"><img src="imagenes/logo-09.png" ></a></li>
                                <li><a href="ManzanaDeLaRivera.php"><img src="imagenes/logo-03.png" ></a></li>
                                <li><a href="CentroParaguayoJapones.php"><img src="imagenes/logo-01.png" ></a></li>
                                <li><a href="DierccionDeAccionCulturalYTurismo.php"><img src="imagenes/logo-07.png" alt="Diercción de Acción Cultural y Turismo"></a></li>
                            </ul>
                         </nav>
                       
            <section id="Turismo">
                    <form class="form">
                        <h3>¡Recibi en tu correo todas las actividades de la Cuidad de Asunción!</h3>
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
            <p>Derechos reservados</p>
            <p>Contactenos en info@¿?.com</p>
        </footer>

</body>
</html>