<?php require_once('../Connections/conexion.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_conexion, $conexion);
$query_bombas = "SELECT * FROM bombas WHERE bombas.Activo=1";
$bombas = mysql_query($query_bombas, $conexion) or die(mysql_error());
$row_bombas = mysql_fetch_assoc($bombas);
$totalRows_bombas = mysql_num_rows($bombas);

mysql_select_db($database_conexion, $conexion);
$query_producto = "SELECT * FROM productos WHERE productos.Activo=1";
$producto = mysql_query($query_producto, $conexion) or die(mysql_error());
$row_producto = mysql_fetch_assoc($producto);
$totalRows_producto = mysql_num_rows($producto);
?>
<?php
	require('conexion1.php');
	
	$query="SELECT *  FROM productos";

	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Lista Productos</title>
        <meta charset=utf-8>
<link rel="stylesheet" type="text/css" href="../css/button.css" />
<link rel="shortcut icon" href="../images/ico/favicon.ico.bmp">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../css/table.css">
<style type="text/css">
body,td,th {
	font-family: Roboto, sans-serif;
}
body {
	background-color: #181a1c;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
	<body>
	<div id="cuadro">
	  <center>
	    <img src="../Imagenes/LOGONAME.png" width="301" height="88" align="left">	    <br>
		<div id="titulo">
		<center>
		  <h1>&nbsp;</h1>
		  <h1>&nbsp;</h1>
		  <h1>&nbsp;</h1>
		  <h1>Listado de Servicios</h1>
          <p>Bombas</p>
		</center>
		</div>
	  </center
		></div>
    <div align="center">
      <table width="200" border="1">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Ref</th>
          <th scope="col">Motor</th>
          <th scope="col">M.B</th>
          <th scope="col">Precio</th>
        </tr>
        <?php do { ?>
        <tr>
          <td><?php echo $row_bombas['idBombas']; ?></td>
          <td><?php echo $row_bombas['Nombre']; ?></td>
          <td><?php echo $row_bombas['ReferenciaBomba']; ?></td>
          <td><?php echo $row_bombas['Motor']; ?></td>
          <td><?php echo $row_bombas['MetrosBombeables']; ?></td>
          <td><?php echo $row_bombas['PrecioBomba']; ?></td>
        </tr>
        <?php } while ($row_bombas = mysql_fetch_assoc($bombas)); ?>
      </table>
      
    </div>
    <h1 align="center">&nbsp;</h1>
    <h1 align="center">Listado de productos</h1>
          <p align="center">Concretos y cementos</p>
          <div align="center">
            <table width="200" border="1">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cant</th>
                <th scope="col">Descripción</th>
                <th scope="col">Precio</th>
              </tr>
              <?php do { ?>
  <tr>
    <td><?php echo $row_producto['idproducto']; ?></td>
    <td><?php echo $row_producto['NombreProducto']; ?></td>
    <td><?php echo $row_producto['ReferenciaProducto']; ?></td>
    <td><?php echo $row_producto['DescripcionProducto']; ?></td>
    <td><?php echo $row_producto['PrecioProducto']; ?></td>
  </tr>
  <?php } while ($row_producto = mysql_fetch_assoc($producto)); ?>
              </table>
          </div>
          <p align="center">&nbsp;</p>
 <form name="form3" method="post" action="empleadoPage.php">
   <p align="center">
     <a href="../index.php">
     <button class="button button-ps" input type="submit" onClick="this.form.action = '../index.php'" id="button3" value="Ingresar">Volver</button>
   </a>   </p>

 </form>
  <div class="footer">
            <p>&copy; PIERRE MAGIQUE Developers<br>
            SENA 2016</p>
        </div>
		</body>
	</html>
<?php
mysql_free_result($bombas);

mysql_free_result($producto);
?>
