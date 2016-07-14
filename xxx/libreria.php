
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

</head>

<body>
<?php
 
 function select ($tabla, $array_campos,$condicion=1)
 {
	 $campos = implode (',',$array_campos);
	 $sql = "select $campos from $tabla where $condicion";
	 $retorno = conectar ($sql);
	 return $retorno;
	 }
?>
<?php	 
function conectar ($sql)
{
	$link = mysql_connect('localhost','root','') or die (mysql_error());
	mysql_select_db('concrebombas') or die (mysql_error());
	$retorno=mysql_query($sql,$link)or die (mysql_error());
	mysql_close($link);
	return $retorno;
	
	}
 
?>

<?php
function insert($table,$array_campos,$array_valores)
{
$campos=implode(',',$array_campos);
$valores=implode("','",$array_valores);
$sql="INSERT INTO $table ($campos) VALUES ('$valores')";
return $sql;
}
?>


<p>&nbsp;</p>
<p>&nbsp; </p>
</body>
</html>