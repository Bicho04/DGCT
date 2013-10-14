<?php header('Content-Type: text/html; charset=ISO-8859-15'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
     
    <title>Agenda cultural Asuncion</title>
    <link href="css/estilo-b.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/calendar.css" media="screen">

     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
        <link rel="stylesheet" type="text/css" href="css/style4.css" />
        <link rel="stylesheet" type="text/css" href="css/calendarioIndex.css" />

   
<meta name="robots" content="noindex,follow" />
</head>

<body>
       <section id="calendario">

                    <h1><b>Agenda de Asuncion</b></h1>


                  <div id="calendar">
                    <div id="cal">
<?php include("calendario.inc.php");?>


</div>
                         <nav id="menu-temas">
                    <h2>Ver por tema</h2>
                             <ul id="nav-temas">
                              <?php

do {  

?>

            
<li><a href="?<?php echo $row_categoria['Cod_categorias'];?>"> <?php echo utf8_decode($row_categoria['Descripcion_categoria']);?> </a></li>
            <?php

} while ($row_categoria = mysql_fetch_assoc($categoria));
?>
                              
                             </ul>   
                        </nav>
            </section>

</body>
</html>