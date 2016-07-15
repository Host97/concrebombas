<?php 

$idCotizacion=$_POST["idCotizacion"];


  mysql_connect('localhost','root','') or die (mysql_error());
	   mysql_select_db('concrebombas') or die (mysql_error());	
	   
	mysql_query("DELETE FROM cotizacion WHERE idCotizacion = '$idCotizacion'");
	$link = mysql_connect("localhost","root","");
	        mysql_select_db("concrebombas",$link);
header('Location: cotizacionCompleta.php');

?>
