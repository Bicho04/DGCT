<?php 
include("dxss/dXSS.inc.php");
$g = new dXSS();
$g->url = 'error.php';
$g->longitud = 255;
$g->TestGet();
$g->TestPOST();

?>
<?php
/*function urlamigable($texto)
{
	$texto=htmlentities($texto);
	$texto=strtolower($texto);
	$texto=str_replace(' ','-',$texto);
	$texto=str_replace("'",'',$texto);
	$texto=str_replace('"','',$texto);
	return($texto);
	}*/
?>
<?php
function titulos($texto)
{
	$texto=str_replace("-"," ",$texto);
	return($texto);
	}
?>
<?php
function urlamigable($url)
{
$url=strtolower($url);
$url=str_replace("Á","a",$url);
$url=str_replace("É","e",$url);
$url=str_replace("Í","i",$url);
$url=str_replace("Ó","o",$url);
$url=str_replace("Ú","u",$url);
$url=str_replace("Ñ","n",$url);
$url=str_replace("°","",$url);
$url=str_replace(",","",$url);
$url=str_replace("ó","o",$url);
$url=str_replace(" ","-",$url);
$url=str_replace("í","i",$url);
$url=str_replace("ú","u",$url);
$url=str_replace("á","a",$url);
$url=str_replace("&aacute;","a",$url);
$url=str_replace("&eacute;","e",$url);
$url=str_replace("&iacute;","i",$url);
$url=str_replace("&oacute;","o",$url);
$url=str_replace("&uacute;","u",$url);
$url=str_replace("é","e",$url);
$url=str_replace("ñ","n",$url);
$url=str_replace('"',"",$url);
$url=str_replace("'","",$url);
$url=str_replace(".","",$url);
$url=str_replace("“","",$url);
$url=str_replace("”","",$url);
$url=str_replace("/","-",$url);
$url=str_replace("---","-",$url);
$url=str_replace("--","-",$url);
$url=substr($url,0,150);

		$urllimpia="";
		
		for($i=0;$i<=strlen($url);$i++)
		{
			if((ord(substr($url,$i,1))>96 && ord(substr($url,$i,1))<123) || (ord(substr($url,$i,1))>47 && ord(substr($url,$i,1))<58) || substr($url,$i,1)=="-")
			{
				$urllimpia.=substr($url,$i,1);
				}
			}
		$url=$urllimpia;
return($url);
	}
	
?>