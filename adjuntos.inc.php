<?php
//adjuntos
 $codigoevento=$row_areaCono['Cod_noticias'];
$tipo="noticias";
$adjuntos="<span id='adjuntos'><h4>Adjunto(s)</h4><ul>";
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
		$adjuntos.="<li><a href='upload/{$tipo}/{$tipo}".$codigoevento.".$ex' target=_blank>$imagene</a> </li>";
		
		 }			 
	}
	$adjuntos.="</ul></span>";
	//fin adjuntos
?>