 <?php 

include_once('admin/Connections/conectar.php'); 

?>

<?php
$tipo="noticias";
if(isset($_GET['tipo']))
$tipo=$_GET['tipo'];

if(isset($_GET['id']))
$codigoevento=$_GET['id'];

$adjuntos="";

$extension[]='gif';
$extension[]='zip';
$extension[]='jpg';
$extension[]='doc';
$extension[]='xls';
$extension[]='png';
$extension[]='txt';
$extension[]='csv';
$extension[]='pdf';
$extension[]='rtf';

$imagene="<img src='images/bajar.gif' alt='download' border='0' /> Clic para Bajar el documento ";

?>
<?php
foreach($extension as $ex)
{
 if (file_exists("upload/{$tipo}/{$tipo}".$codigoevento.".$ex"))
 {
 if(@$a=fopen("upload/{$tipo}/{$tipo}".$codigoevento.".$ex.html","r"))
 {
$t="";

 while (!feof($a)) 
 {
 $buffer = fgets($a,2000);
 $t=$t.$buffer;
 }
 $imagene=$t;
 }
$adjuntos.="<a href='upload/{$tipo}/{$tipo}".$codigoevento.".$ex' target=_blank>$imagene</a> ";
 }
 for($x=1; $x<=5; $x++)
 {
 if (file_exists("upload/{$tipo}/{$tipo}".$codigoevento."-".$x.".$ex"))
 {
 if(@$a=fopen("upload/{$tipo}/{$tipo}".$codigoevento."-".$x.".$ex.html","r"))
 {
 $t="";

 while (!feof($a)) 
 {
 $buffer = fgets($a,2000);
 $t=$t.$buffer;
 }
 $imagene=$t;
 }
 $adjuntos.="<a href='upload/{$tipo}/{$tipo}".$codigoevento."-".$x.".$ex' target=_blank>$imagene</a> -->  <br/>";
 }
 }
}
?>
<?php
if(strlen($adjuntos)>0)
{
	?><h3>Adjunto(s)</h3>
    <?php
	echo $adjuntos;
	
	}
?>

