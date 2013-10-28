<?php 
include_once("vinculador.inc.php");
$limite="LIMIT 0,4"; 
?>

<?php
$filtroentidad="";
if(isset($entidad))
	$filtroentidad=" AND no.origen_noticias='$entidad' ";
global $database_conectamos;
global $conectamos;
mysql_select_db($database_conectamos, $conectamos);
$query_evento = "SELECT * 
FROM  `noticias` 

order by Cod_noticias desc  $limite
";
$query_evento ="SELECT no.*, cate.*
FROM  `noticias` no, categoriadelasnoticias cate
WHERE   no.Cod_categoria=cate.Cod_categorias
$filtroentidad
AND Activo_noticias=1
AND (Fecha_noticias >=  '".date('Y')."-".date('m')."-".date('d')."'
OR
fecha_fin >=  '".date('Y')."-".date('m')."-".date('d')."')
order by Fecha_noticias,fecha_fin, Cod_noticias desc  $limite
";


$areaCono = mysql_query($query_evento, $conectamos) or die(mysql_error());
$row_areaCono = mysql_fetch_assoc($areaCono);
$totalRows_areaCono = mysql_num_rows($areaCono);
if($totalRows_areaCono)
{
	do { 

//echo $row_areaCono['Cod_noticias'];
?>

                   
                   
        <article class="evento">
                  <figure><?php funcionbuscarimagen($row_areaCono['Cod_noticias'],3);?></figure>

                  <h2><a href="plantilla.php?codigoevento=<?php  echo utf8_decode($row_areaCono['Cod_noticias']); ?>#ampliar"><?php  echo $row_areaCono['Titulo_noticias']; ?></a></h2>

                  <!--a href="#"><?php  echo ($row_areaCono['Responsable_noticias']); ?></a-->
                  <p><span class="blod">Lugar:</span>
                  <a  class="mark" href="<?php  echo $Lorigen[$row_areaCono['origen_noticias']]; ?>"><?php  echo $Torigen[$row_areaCono['origen_noticias']]; ?> </a>
                 </span>
                 
									<p><span class="blod">Hora:</span>
                      <?php  echo strlen($row_areaCono['hora_noticias'])>0?" ".$row_areaCono['hora_noticias']:''; ?></p> 

									<p><span class="blod">Fecha:</span>
                  		<?php  echo convertirfecha($row_areaCono['Fecha_noticias']); ?>
											<?php if(strlen($row_areaCono['fecha_fin'])>0 && $row_areaCono['Fecha_noticias']!=$row_areaCono['fecha_fin'])
											echo strlen($row_areaCono['fecha_fin'])>0?" al ".convertirfecha($row_areaCono['fecha_fin']):''; 			
											?> </p>

                  <a  class="mark" href="plantilla.php?tema=<?php echo $row_areaCono['Cod_categoria'] ?>#actividades"><?php  echo ($row_areaCono['Descripcion_categoria']); ?></a></p>

         <!--img src="imagenes/logo-01.png"  width="120" hspace="12" align="left" /-->
                        <p><?php  
						$texto=str_replace('style="padding: 0px; margin: 0px"',"",$row_areaCono['Desarrollo_noticias']);
						$texto=str_replace("<div>&nbsp;</div>",chr(13),$texto);
					$texto=str_replace("</p><p>",chr(13),$texto);	
						$texto=explode(chr(13),$texto);
						//echo $texto[0];
						/*if(count($texto)>1)
						{
						?>
                         <br />
 <a href="?">ver m&aacute;s &raquo;</a>
<?php
						}*/
						 ?></p>
        </article>
           
         
			  
<?php
				    
			 } while ($row_areaCono = mysql_fetch_assoc($areaCono));
mysql_free_result($areaCono);
}
else
{ 
echo "No hay eventos";
}
?>
          
                        
                       
