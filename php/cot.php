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
$query_bomb = "SELECT * FROM bombas ORDER BY idBombas ASC";
$bomb = mysql_query($query_bomb, $conexion) or die(mysql_error());
$row_bomb = mysql_fetch_assoc($bomb);
$totalRows_bomb = mysql_num_rows($bomb);

mysql_select_db($database_conexion, $conexion);
$query_producto = "SELECT * FROM productos WHERE activo = 1";
$producto = mysql_query($query_producto, $conexion) or die(mysql_error());
$row_producto = mysql_fetch_assoc($producto);
$totalRows_producto = mysql_num_rows($producto);
?>
<title>carrito</title>
<?php
mysql_free_result($bomb);

mysql_free_result($producto);
?>
<form name="form1" method="post" action="">
  <p>Bomba 
    <label for="select"></label>
    <select name="select" id="select">
      <?php
do {  
?>
      <option value="<?php echo $row_bomb['idBombas']?>"<?php if (!(strcmp($row_bomb['idBombas'], $row_bomb['PrecioBomba']))) {echo "selected=\"selected\"";} ?>><?php echo $row_bomb['Nombre']?></option>
      <?php
} while ($row_bomb = mysql_fetch_assoc($bomb));
  $rows = mysql_num_rows($bomb);
  if($rows > 0) {
      mysql_data_seek($bomb, 0);
	  $row_bomb = mysql_fetch_assoc($bomb);
  }
?>
    </select>
  </p>
  <p>Productos
    <label for="select2"></label>
    <select name="select2" id="select2">
      <?php
do {  
?>
      <option value="<?php echo $row_producto['NombreProducto']?>"<?php if (!(strcmp($row_producto['NombreProducto'], $row_producto['PrecioProducto']))) {echo "selected=\"selected\"";} ?>><?php echo $row_producto['ReferenciaProducto']?></option>
      <?php
} while ($row_producto = mysql_fetch_assoc($producto));
  $rows = mysql_num_rows($producto);
  if($rows > 0) {
      mysql_data_seek($producto, 0);
	  $row_producto = mysql_fetch_assoc($producto);
  }
?>
    </select>
  </p>
</form>
