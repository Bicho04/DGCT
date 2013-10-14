<?php 
include_once("vinculador.inc.php"); 
?><?php

mysql_select_db($database_conectar, $conectar);
$query_categoria = "SELECT * FROM categoriadelasnoticias";
$categoria = mysql_query($query_categoria, $conectar) or die(mysql_error());
$row_categoria = mysql_fetch_assoc($categoria);
$totalRows_categoria = mysql_num_rows($categoria);
?>
<?php
 
/*  Set some variables  */
$date=01; 
$day=01; 
$off=0; 


$entidad=1;
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
?><table id="calendar" cellspacing="0" cellpadding="0" summary="Calendario de actividades"><tr> 

<caption><h2><a href="?mes=<?php echo round($month)-1?>&anio=<?php echo round($year)?>" title="previous month" class="nav">&laquo;</a>  <?php echo $meses[round($month)]; ?> <a href="?mes=<?php echo round($month)+1?>&anio=<?php echo round($year)?>" title="next month" class="nav">&raquo;</a></h2></caption>
<?php
echo "<th>Dom</th>"; 
echo "<th>Lun</th>"; 
echo "<th>Mar</th>"; 
echo "<th>Mier</th>"; 
echo "<th>Juev</th>"; 
echo "<th>Vier</th>"; 
echo "<th>Sab</th>"; 
 
/*  Start the table data and make sure the number of days does not exceed 
    the total for the month  - $date will always be one more than the total 
    number of days in the momth  */
echo "<tr>"; 
while ($day<$date): 


$clase="";
$resultado=buscarevento($day,$month,$year,$entidad);
$texto="";
if($resultado>0)
{
	$clase="class='event'";
	$texto="($resultado Eventos)";
}
if($resultado==1)
$texto="(1 Evento)";

$link="<a href='actividades.php?dia=$day&mes=$month&anio=$year&entidad=$entidad'>$texto</a>";


/*  Figure what day of the week the first falls on and set the number of 
    preceding and trailing cells accordingly  */
if ($day == '01' and date('l', mktime(0,0,0,$month,$day,$year)) == 'Sunday') { 

?><td <?php echo $clase ?>><?php echo $day ?> <br />
<?php echo $link ?></td>
<?php
$off = '01'; 
} 
elseif ($day == '01' and date('l', mktime(0,0,0,$month,$day,$year)) == 
'Monday') { 
echo "<td></td>";
?><td <?php echo $clase ?>><?php echo $day ?> <br />
<?php echo $link ?></td>
<?php
$off= '02'; 
} 
elseif ($day == '01' and date('l', mktime(0,0,0,$month,$day,$year)) == 
'Tuesday') { 
echo "<td></td><td></td>";
?><td <?php echo $clase ?>><?php echo $day ?> <br />
<?php echo $link ?></td>
<?php 
$off= '03'; 
} 
elseif ($day == '01' and date('l', mktime(0,0,0,$month,$day,$year)) == 
'Wednesday') { 
echo "<td></td><td></td><td></td>";
?><td <?php echo $clase ?>><?php echo $day ?> <br />
<?php echo $link ?></td>
<?php 
$off= '04'; 
} 
elseif ($day == '01' and date('l', mktime(0,0,0,$month,$day,$year)) == 
'Thursday') { 
echo "<td></td><td></td><td></td><td></td>";
?><td <?php echo $clase ?>><?php echo $day ?> <br />
<?php echo $link ?></td>
<?php
$off= '05'; 
} 
elseif ($day == '01' and date('l', mktime(0,0,0,$month,$day,$year)) == 
'Friday') { 
echo "<td></td><td></td><td></td><td></td><td></td>";
?><td <?php echo $clase ?>><?php echo $day ?> <br />
<?php echo $link ?></td>
<?php
$off= '06'; 
} 
elseif ($day == '01' and date('l', mktime(0,0,0,$month,$day,$year)) == 
'Saturday') { 
echo "<td></td><td></td><td></td><td></td><td></td><td></td>";
?><td <?php echo $clase ?>><?php echo $day ?> <br />
<?php echo $link ?></td>
<?php
$off= '07'; 
} 
else { 
?>

<td <?php echo $clase ?>><?php echo $day ?> <br />
<?php echo $link ?></td>
<?php 
} 
 
/*  Increment the day and increment the cells that go before the end of the row 
    and end the row when appropriate */
$day++; 
$off++; 
 
if ($off>7) { 
echo "</tr><tr>"; 
$off='01'; 
} else { 
echo ""; 
} 
 
endwhile; 
 
echo "</table>"; 
 
?>