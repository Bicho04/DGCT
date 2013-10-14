<?php 
include_once("vinculador.inc.php"); 
?><?php
$tituloH3="Titulo";
$vinculoampliacion="plantilla.php";
?><?php 
//Recepcion de variables
$filtro="";
$filtroentidad="";
if(isset($_GET['entidad']))
{
	$codentidad=$_GET['entidad'];
	//$codentidad=$codentidad[0];
	$filtro="WHERE  no.origen_noticias =  '$codentidad' ";
	$tituloH3="Listado por Entidad";
}
if(isset($entidad))
{
	//$codentidad=$codentidad[0];
	$filtro="WHERE  
Activo_noticias=1
AND (Fecha_noticias >=  '".date('Y')."-".date('m')."-".date('d')."'
OR
fecha_fin >=  '".date('Y')."-".date('m')."-".date('d')."') ";
	$filtroentidad=" AND no.origen_noticias =  '$entidad' ";
	$tituloH3="Listado por Entidad";
}
	
if(isset($_GET['dia']))
{
	

$day=$_GET['dia'];
$mes=round($_GET['mes']);
$year=$_GET['anio'];
//fin recepcion de variables
$tituloH3=diaespaniol($mes,$day,$year)." ".$day ." de ".$meses[$mes]." de ".$year;


//filtros
$filtro="WHERE  no.Fecha_noticias =  '$year-$mes-$day' ";
$filtro="WHERE  (
`Fecha_noticias` >=  '$year-$mes-$day' AND  `fecha_fin` <=  '$year-$mes-$day' AND Activo_noticias=1
OR 
`Fecha_noticias` <= '$year-$mes-$day' AND `fecha_fin` >= '$year-$mes-$day'
OR  `Fecha_noticias` =  '$year-$mes-$day' AND  Activo_noticias=1
)

";
}
if(isset($_GET['tema']))
{
	$tema=$_GET['tema'];
	$filtro="WHERE  cate.Cod_categorias =  $tema ";
	$tituloH3="Listado por tema";
}
$filtro.=" AND no.Cod_categoria=cate.Cod_categorias ";
//fin filtros
$orden="ORDER BY no.Cod_noticias desc";
?>
<a name="actividades" id="actividades"></a>
<h3><?php echo $tituloH3;?></h3>
	<?php
	global $database_conectamos;
	global $conectamos;
	mysql_select_db($database_conectamos, $conectamos);
	$query_evento = "SELECT no.*, cate.*
	FROM  `noticias` no, categoriadelasnoticias cate
	$filtro
	$filtroentidad
	$orden
	";

	$areaCono = mysql_query($query_evento, $conectamos) or die(mysql_error());
	$row_areaCono = mysql_fetch_assoc($areaCono);
	$totalRows_areaCono = mysql_num_rows($areaCono);
	if ($totalRows_areaCono==0)
	{
		echo "No hay eventos";
	}
	else
	{ // inicio si existen datos
		do { 
		// inicio loop de datos
		//echo $row_areaCono['Cod_noticias'];
		?>
        <div class="nota"> <?php funcionbuscarimagen($row_areaCono['Cod_noticias'],1);?>
        <?php
		$addentidad="";
		if(isset($entidad))
		{
			$addentidad="&entidad=$entidad";
			$vinculoampliacion=$Lorigen[$row_areaCono['origen_noticias']];
		}
		?>
			<h2><a href="<?php echo $vinculoampliacion ?>?codigoevento=<?php echo $row_areaCono['Cod_noticias']?><?php echo $addentidad ?>#ampliar"><?php  echo ($row_areaCono['Titulo_noticias']); ?></a></h2> 
            <span><a href="<?php  echo $Lorigen[$row_areaCono['origen_noticias']]; ?>"><?php  echo $Torigen[$row_areaCono['origen_noticias']]; ?></a>
           <!--a href="#"><?php  echo $row_areaCono['Responsable_noticias']; ?></a-->
           <a href="<?php echo $vinculoampliacion ?>?tema=<?php echo $row_areaCono['Cod_categoria'] ?>#actividades"><?php  echo ($row_areaCono['Descripcion_categoria']); ?></a>
         </span>
        <h4 id="hora"><?php  echo strlen($row_areaCono['hora_noticias'])>0?" ".$row_areaCono['hora_noticias']:''; ?></h4> <h4><?php  echo convertirfecha($row_areaCono['Fecha_noticias']); ?>
						<?php  
						if(strlen($row_areaCono['fecha_fin'])>0 && $row_areaCono['Fecha_noticias']!=$row_areaCono['fecha_fin'])
						echo strlen($row_areaCono['fecha_fin'])>0?" al ".convertirfecha($row_areaCono['fecha_fin']):''; 
						
						?> </h4> 
           <!--img src="imagenes/logo-01.png"/-->   <p>     
         
      
			  <?php  $texto=str_replace('style="padding: 0px; margin: 0px"',"",$row_areaCono['Desarrollo_noticias']);
			  $texto=str_replace('<div>',"",$texto);
			  $texto=str_replace('</div>',"",$texto);
						$texto=explode(chr(13),$texto);
						
						echo $texto[0]; ?>

	
              

              </p>
        </div>
<?php
			//fin loop de datos	    
			 } while ($row_areaCono = mysql_fetch_assoc($areaCono));
mysql_free_result($areaCono);
} //fin si existen datos
?>
  
   
  
    
       

                        
                       
