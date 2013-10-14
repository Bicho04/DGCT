<?php
if(!isset($noscript))
{
?>
<script src="js/jquery-1.7.1.js" >
<?php
}
?>

</script><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script type="text/javascript">
function cargado()
{
$('#calendar').load('cargando.html', function() {
});
$('#calendar').load('calendario.inc.php', function() {
  //alert('Load was performed.');
});
}

function cargadocalendario(mes,anio,entidad)
{
$('#calendar').load('cargando.html', function() {
});
$('#calendar').load('calendario.inc.php?mes='+mes+"&anio="+anio+"&entidad="+entidad, function() {
  //alert('Load was performed.');
});
}
</script>