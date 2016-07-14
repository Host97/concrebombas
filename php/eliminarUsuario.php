<!DOCTYPE html PUBLIC >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Inhabilitar Usuario</title>
<link href="../../misitio/CSS/estilos.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="file:///C|/xampp/htdocs/concrebombas/css/table.css"
<link rel="stylesheet" type="text/css" href="file:///C|/xampp/htdocs/concrebombas/css/button.css"
</head>
<div class="container">
</div>
<body>
<div align="center">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="200" border="1">
  <tr>
    <td><div align="center"><strong>Esta Seguro de Boquear al Usuario</strong></div></td>
  </tr>
  <tr>
    <td><div align="center">
      
      <button class="button button-sp" input type="submit" onClick="this.form.action = 'ProcesoCliente.php'" id="button" value="Ingresar">ENVIAR</button>
      </div></td>
  </tr>
</table></div>
<?php
if ($consulta == 1)
{
if (isset($_GET['idCliente'])) {
$Nombre = $_GET['Nombre'];
$Apellido1 = $_GET['Apellido1'];
$Apellido2= $_GET['Apellido2'];
$Observaciones = $_GET['Observaciones'];
$codigo = $_GET['idCliente'];

$link = mysql_connect("localhost", "root", "");
mysql_select_db("restaurante", $link);
$sql = "DELETE FROM cliente WHERE idCliente=$codigo";

$result = mysql_query($sql);

mysql_close($link);

echo "El cliente con el código $codigo ha sido eliminado <a

href='paginaClientes.php'>Regresar</a>";

} else {

echo "registro no encontrado";

}
}

else

{

echo "NO TIENE ACCESO A ELIMINAR USUARIOS";

}
	?>
</body>
</html>