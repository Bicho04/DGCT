<?php 
include_once("vinculador.inc.php"); 
?><?php
//Recepcion de variables
//$day=$_GET['dia'];
//$mes=round($_GET['mes']);
//$year=$_GET['anio'];
$codigoeventoaampliar=$_GET['codigoevento'];
$vinculoampliacion="plantilla.php";
?>
<a name="ampliar" id="ampliar"></a>
<?php
global $database_conectamos;
global $conectamos;
mysql_select_db($database_conectamos, $conectamos);
$query_evento = "SELECT no.*, cate.*
FROM  `noticias` no, categoriadelasnoticias cate
WHERE   no.Cod_categoria=cate.Cod_categorias
AND no.Cod_noticias=$codigoeventoaampliar
";

//no.Fecha_noticias =  '$year-$mes-$day'  
//AND
$areaCono = mysql_query($query_evento, $conectamos) or die(mysql_error());
$row_areaCono = mysql_fetch_assoc($areaCono);
$totalRows_areaCono = mysql_num_rows($areaCono);

//do { 

//echo $row_areaCono['Cod_noticias'];
?><?php
		$addentidad="";
		if(isset($entidad))
		{
			$addentidad="&entidad=$entidad";
			$vinculoampliacion=$Lorigen[$row_areaCono['origen_noticias']];
		}
		?>
        <div class="ampliacion-nota">   
        <h2> <?php  echo $row_areaCono['Titulo_noticias']; ?></h2>
         <span>
                   <!--a href="#"><?php  echo $row_areaCono['Responsable_noticias']; ?></a-->
                   <a href="<?php echo $vinculoampliacion ?>?tema=<?php echo $row_areaCono['Cod_categoria'] ?>#actividades"><?php  echo utf8_decode($row_areaCono['Descripcion_categoria']); ?></a>
                   <a href="<?php  echo $Lorigen[$row_areaCono['origen_noticias']]; ?>"><?php  echo $Torigen[$row_areaCono['origen_noticias']]; ?> </a>
                
                 </span><h4 id="hora"><strong>Hora: </strong><?php  echo strlen($row_areaCono['hora_noticias'])>0?"".$row_areaCono['hora_noticias']:''; ?> 
                 </h4><h4><strong>Fecha: </strong><?php  echo convertirfecha($row_areaCono['Fecha_noticias']); ?><?php  echo strlen($row_areaCono['fecha_fin'])>0?" al ".convertirfecha($row_areaCono['fecha_fin']):''; ?> </h4>
			 <?php funcionbuscarimagen($row_areaCono['Cod_noticias']);?> <p>
         <?php 
       
	
        require("adjuntos.inc.php");
		?> <?php  
          $texto=str_replace('style="padding: 0px; margin: 0px"',"",$row_areaCono['Desarrollo_noticias']); 
          $texto=str_replace('<div>',"",$texto);
          $texto=str_replace('</div>',"",$texto);
          echo $texto;
          ?>
          
		


<?php

if(strlen($adjuntos)>55)
{
	?>
    <?php
	echo $adjuntos;
	
	}
?>
          
              </p>
<?php
				    
			// } while ($row_areaCono = mysql_fetch_assoc($areaCono));
mysql_free_result($areaCono);

?></div>
          
                        
                       
