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
$query_productos = "SELECT * FROM bombas, productos WHERE productos.Activo AND bombas.Activo = 1";
$productos = mysql_query($query_productos, $conexion) or die(mysql_error());
$row_productos = mysql_fetch_assoc($productos);
$totalRows_productos = mysql_num_rows($productos);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>cotizacion</title>

<link rel="stylesheet" type="text/css" href="../css/button.css" />
<link rel="shortcut icon" href="../images/ico/favicon.ico.bmp">
<link href="../css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../css/table.css">
<style type="text/css">
body,td,th {
	font-family: Roboto, sans-serif;
	color: #000;
}
body {
	background-color: #fc0;
}
</style>
</head>

<body>
<p>
  
  
  
<div id="titulo">
		<center>
		  <h1 align="center">Cotizacion</h1></center>
</div>
  
  
  
<form action="cotizacion.php" method="post">
    <div align="center">
      <p><tt>
        
        
        <span class="black"><strong>Seleccione el producto</strong></span>
<select name="idproducto" title="<?php echo $row_productos['']; ?>">
          
        <option></option>
          
        <?php

$array_productos = select('productos', array('idproducto', 'NombreProducto',

'PrecioProducto',), '1 ORDER BY NombreProducto');

while ($producto = mysql_fetch_array($array_productos)){

echo "<option value='$producto[0]'>$producto[1]</option>";

}

?>
          
        </select>
        
        
        <span class="black"><strong>Cantidad :</strong></span>
      <input type="text" name="cantidad" />
        
      </tt></p>
      <p><tt>
        <input name="aceptar" type="submit" class="button" value="Añadir a la cesta">
        <br>
        
        
      </tt></p>
  </div>
</form>

  <div align="center">
    <p><tt>
      <?php

if (isset($itemsEnCesta)) {

echo "<table border=1>

<tr>

<th>Cod. Prod</th><th>productos</th><th>Vr. Unitario</th><th>Cantidad</th><th>Vr.
<tr>
Total</th>
</tr>";
//"<th>IVA</th><th>Vr. Total Iva</th>"



foreach ($itemsEnCesta as $k => $v) {

$datoArticulo = select('productos', array('idproducto', 'NombreProducto','PrecioProducto'), "NombreProducto='" . $k . "'");

$infoArticulo = mysql_fetch_row($datoArticulo);

echo "

<td>" . $infoArticulo[0] ."</td>

<td>" . $infoArticulo[1] ."</td>

<td>$ " . number_format($infoArticulo[2], 2, ',', '.') ."</td>

<td>" . $v ."</td>";

$vrTotal = $infoArticulo[2] * $v;

echo "<td>$ " . number_format($vrTotal,2,',','.') . "</td>";

echo"<td>" . $infoArticulo[3] ."</td>";

$vrTotalIVA = (($vrTotal * $infoArticulo[3])/100) + $vrTotal;

echo "<td>$ " . number_format($vrTotalIVA,2,',','.') . "</td>
</tr>";

$valorTotalFactura += $vrTotalIVA;

$valorTotalFactura = round(sprintf("%.2f", $valorTotalFactura )* 100/100);

}

$_SESSION['vrTotalFactura'] = $valorTotalFactura;

echo "<tr>

<td colspan=6>Total Factura</td><td>$ " .

number_format($_SESSION['vrTotalFactura'],2,',','.') . "</td>

</tr>

</table>";

}

?>
      
    </tt></p>
    <p><tt>
      <input name="clean" type="reset" class="button" id="clean" value="nuevo" />
    </tt></p>
  </div>
<form action="clientePage.php" method="post">
    <div align="center"><tt>
      <input name="Guardar2" type="submit" class="button" id="Guardar2"  onclick="'clientePage.php'" value="Volver" />
  </tt></div>
</form>
        
        <p align="center"><tt>
        </tt>	</p>
        <p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
        
<div align="center">
  <?php
	require('conexion1.php');
	
	$query="SELECT *  FROM productos";

	$resultado=$mysqli->query($query);
	
?>
  
  <html>
  <head>
  <body>
  
  
  
</div>
<h1 align="center">Listado de productos</h1>
		</div>
		
        <div align="center">
          <table>
            <thead>
              <tr class="centro">
                <td>idProducto</td>
                <td>NombreProducto</td>
                <td>PrecioProducto</td>
                <td>ReferenciaProducto</td>
                <td>DescripcionProducto</td>
                </tr>
              <tbody>
                <?php while($row=$resultado->fetch_assoc()){ ?>
                <tr>
                  <td><?php echo $row['idproducto'];?>
                    </td>
                  <td>
                    <?php echo $row['NombreProducto'];?>
                    </td>
                  <td>
                    <?php echo $row['PrecioProducto'];?>
                    </td>
                  <td>
                    <?php echo $row['ReferenciaProducto'];?>
                    </td>
                  <td>
                    <?php echo $row['DescripcionProducto'];?>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
            </table>	
          </center
		></div>
        </div>
    <p align="center">&nbsp;</p>
    <p align="center">
      <?php
	require('conexion1.php');
	
	$query="SELECT *  FROM bombas";

	$resultado=$mysqli->query($query);
	
?>
    </p>
    <h1 align="center">Listado de Bombas</h1>
    
    </div>
    <div align="center">
      <table>
        <thead>
          <tr class="centro">
            <td>id Bombas</td>
            <td>Referencia Bomba</td>
            <td>Color</td>
            <td>Precio Bombas</td>
            
            </tr>
          </thead>
        <tbody>
          <?php while($row=$resultado->fetch_assoc()){ ?>
          <tr>
            <td><?php echo $row['idBombas'];?></td>
            <td><?php echo $row['ReferenciaBomba'];?></td>
            <td><?php echo $row['Color'];?></td>
            <td><?php echo $row['PrecioBomba'];?></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </center
		>
      </div>
    </div>
    <h1 align="center"></h1>
    <h1 align="center">&nbsp;</h1>

</body>
<
<?php
mysql_free_result($productos);
?>
/html>
</body>
</html>
</body>
</html>
