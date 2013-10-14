<?php header('Content-Type: text/html; charset=ISO-8859-1'); ?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Direccion General de Cultura y Cultura</title>
    <link href="css/estilo-plant.css" rel="stylesheet" type="text/css" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
        <link rel="stylesheet" type="text/css" href="css/style4.css" />
        <link rel="stylesheet" type="text/css" href="css/calendario.css" />
       
</head>

<body>

<section id="derechas">
                <section id="agenda">
                  <div class="nota">
						
					<h2>Actividades del dia</h2>
				
                    <?php include("actividadesdeldia.inc.php");?>      
                       
                  </div>
              </section>
        </section>

            <section id="izquierdas">
              <div id="cal">
      <?php include("calendario.inc-copia.php");?>          
  
  <h3>Ver por tema</h3>
                         <nav id="menu-temas">
                             <ul id="nav-temas">
                                <li><a href="#"><img src="imagenes/vinheta.png" alt:"vi eta"> Cine </a></li>
                                <li><a href="#"><img src="imagenes/vinheta.png" alt:"vi eta"> Festivales </a></li>
                                <li><a href="#"><img src="imagenes/vinheta.png" alt:"vi eta"> Danza </a></li>
                                <li><a href="#"><img src="imagenes/vinheta.png" alt:"vi eta"> Ferias y Congresos </a></li>
                                <li><a href="#"><img src="imagenes/vinheta.png" alt:"vi eta"> Musica </a></li>
                                <li><a href="#"><img src="imagenes/vinheta.png" alt:"vi eta"> Exposiciones </a></li>
                                <li><a href="#"><img src="imagenes/vinheta.png" alt:"vi eta"> Museo </a></li>
                                <li><a href="#"><img src="imagenes/vinheta.png" alt:"vi eta"> Otros </a></li></ul>
                        </nav>
              </div>
               <aside id="enlaces">
                 <nav id="menu-enlaces">
                    <div class="sombra"></div>

              </aside>  
            </section>

</body>
</html>