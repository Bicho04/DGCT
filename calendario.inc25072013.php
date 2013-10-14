<?php 
include_once("vinculador.inc.php"); 
?>
<?php
 
/*  Set some variables  */
$date=01; 
$day=01; 
$off=0; 
$entidad=1;

if(isset($codentidad) || isset($_GET['entidad']))
{
	$entidad=isset($_GET['entidad'])?$_GET['entidad']:$codentidad;
	
}

/*  The month and year variables can (should) be passed from a preceding 
    web page rather than hard coded  */
	$month = date("m");	
	if(isset($_GET['mes']))
		$month = $_GET['mes'];
	
 	$year = date("Y");	
	if(isset($_GET['anio']))
		$year = $_GET['anio'];
			
	if($month==0)
	{
		$month=12;
		$year=$year-1;
		
	}
	if($month==13)
	{
		$month=1;
		$year=$year+1;
		}
		
//$month = '06'; 


		
/*  Figure out how many days are in this month  */
while (checkdate($month,$date,$year)): 
$date++; 
endwhile; 
 
/*  Create a table with days of the week headers  */
?>
<style type="text/css">

</style>


                            <h2><a href="javascript:cargadocalendario(<?php echo round($month)-1?>,<?php echo round($year)?>,'<?php echo $entidad;?>');""?mes=<?php echo round($month)-1?>&anio=<?php echo round($year)?>" title="previous month" class="nav">&laquo;</a>  <?php echo $meses[round($month)]; ?> <a href="javascript:cargadocalendario(<?php echo round($month)+1?>,<?php echo round($year)?>,'<?php echo $entidad;?>');""?mes=<?php echo round($month)+1?>&anio=<?php echo round($year)?>" title="next month" class="nav">&raquo;</a></h2>
                      


<div id="filas">
                              <div class="dia" title="Domingo">Dom</div>
                            <div class="dia" title="Lunes">Lun</div>
                            <div class="dia" title="Martes">Mar</div>
                            <div class="dia" title="Miercoles">Mier</div>
                            <div class="dia" title="Jueves">Juev</div>
                            <div class="dia" title="Viernes">Vier</div>
                            <div class="dia" title="Sabado">Sab</div>
                         
                         </div>

<div id="filas">
                        

<?php
while ($day<$date): 


$clase="";
$resultado=buscarevento($day,$month,$year,$entidad);
$texto="";
if($resultado>0)
{
	$clase="event";
	$texto="$resultado Eventos";
	$texto='<img src="imagenes/numero_eventos/E'.$resultado.'.png" />';
}
if($resultado==1)
{
?>

<?php
$texto="1 Evento";
$texto='<img src="imagenes/numero_eventos/E1.png" />';
}

$link="<a href='plantilla.php?dia=$day&mes=$month&anio=$year&entidad=$entidad#actividades' target='_top'>$texto</a>";


/*  Figure what day of the week the first falls on and set the number of 
    preceding and trailing cells accordingly  */
if ($day == '01' and date('l', mktime(0,0,0,$month,$day,$year)) == 'Sunday') { 

?><div class="celdas <?php echo $clase ?>">&nbsp;<?php echo $day ?> <br />
<?php echo $link ?></div>
<?php
$off = '01'; 
} 
elseif ($day == '01' and date('l', mktime(0,0,0,$month,$day,$year)) == 
'Monday') { 
echo '<div class="celdas">&nbsp;</div>';
?><div class="celdas <?php echo $clase ?>">&nbsp;<?php echo $day ?> <br />
<?php echo $link ?></div>
<?php
$off= '02'; 
} 
elseif ($day == '01' and date('l', mktime(0,0,0,$month,$day,$year)) == 
'Tuesday') { 
echo '
<div class="celdas">&nbsp;</div>
<div class="celdas">&nbsp;</div>';
?>
<div class="celdas <?php echo $clase ?>">&nbsp;<?php echo $day ?> <br />
<?php echo $link ?></div>
<?php 
$off= '03'; 
} 
elseif ($day == '01' and date('l', mktime(0,0,0,$month,$day,$year)) == 
'Wednesday') { 
echo '
<div class="celdas">&nbsp;</div>
<div class="celdas">&nbsp;</div>
<div class="celdas">&nbsp;</div>';
?>
<div class="celdas <?php echo $clase ?>">&nbsp;<?php echo $day ?> <br />
<?php echo $link ?></div>
<?php 
$off= '04'; 
} 
elseif ($day == '01' and date('l', mktime(0,0,0,$month,$day,$year)) == 
'Thursday') { 
echo '
<div class="celdas">&nbsp;</div>
<div class="celdas">&nbsp;</div>
<div class="celdas">&nbsp;</div>
<div class="celdas">&nbsp;</div>';
?>
<div class="celdas <?php echo $clase ?>">&nbsp;<?php echo $day ?> <br />
<?php echo $link ?></div>
<?php
$off= '05'; 
} 
elseif ($day == '01' and date('l', mktime(0,0,0,$month,$day,$year)) == 
'Friday') { 
echo '
<div class="celdas">&nbsp;</div>
<div class="celdas">&nbsp;</div>
<div class="celdas">&nbsp;</div>
<div class="celdas">&nbsp;</div>
<div class="celdas">&nbsp;</div>';
?>
<div class="celdas <?php echo $clase ?>">&nbsp;<?php echo $day ?> <br />
<?php echo $link ?></div>
<?php
$off= '06'; 
} 
elseif ($day == '01' and date('l', mktime(0,0,0,$month,$day,$year)) == 
'Saturday') { 
echo '
<div class="celdas">&nbsp;</div>
<div class="celdas">&nbsp;</div>
<div class="celdas">&nbsp;</div>
<div class="celdas">&nbsp;</div>
<div class="celdas">&nbsp;</div>
<div class="celdas">&nbsp;</div>';
?>
<div class="celdas <?php echo $clase ?>">&nbsp;<?php echo $day ?> <br />
<?php echo $link ?></div>
<?php
$off= '07'; 
} 
else { 
?>
	<div class="celdas <?php echo $clase ?>">&nbsp;<?php echo $day ?> <br />
<?php echo $link ?></div>

<?php 
} 
 
/*  Increment the day and increment the cells that go before the end of the row 
    and end the row when appropriate */
$day++; 
$off++; 
 
if ($off>7) { 
echo '
</div>
<div id="filas">'; 
$off='01'; 
} else { 
echo ''; 
} 
 
endwhile; 
 
echo "</div>"; 
 
?> <div id="clear"></div>
