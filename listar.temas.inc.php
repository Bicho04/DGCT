<?php 
include_once("vinculador.inc.php"); 
?><?php

mysql_select_db($database_conectar, $conectar);
$query_categoria = "SELECT * FROM categoriadelasnoticias";
$categoria = mysql_query($query_categoria, $conectar) or die(mysql_error());
$row_categoria = mysql_fetch_assoc($categoria);
$totalRows_categoria = mysql_num_rows($categoria);
?><?php

do {  

?>

            
<li><a href="plantilla.php?tema=<?php echo ($row_categoria['Cod_categorias']);?>#actividades"> <?php echo ($row_categoria['Descripcion_categoria']);?> </a></li>
            <?php

} while ($row_categoria = mysql_fetch_assoc($categoria));
?>