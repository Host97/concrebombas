<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<style type="text/css">


/* Datagrid */
	body {
	font: normal medium/1.4 sans-serif;
	background: linear-gradient( 0deg, #C0C0C0   , #FC0);
	background-color: #FC0;
}
table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  padding: 0.25rem;
  border: 1px solid #ccc;
}
tbody tr:nth-child(odd) {
  background: #eee;
}
.centro{
  padding: 0.5rem;
  background: #484848 ;
  color: white;
  text-align: center;
  font-size: 21px;

}

#cuadro{
	width: 90%;
	background: #FCO ;
	padding: 25px;
	margin: 5px auto;
	border: 3px solid #D8D8D8;
}
#titulo{
	width: 100%;
	background: #282828;
	color:white;

}
	</style>
</head>

<body>
<p>
  
  
  
<div id="titulo">
		<center>
		  <h1>Cotizacion</h1></center>
</div>
  
  
  <?php

error_reporting(0);

session_start();

include_once 'libreria.php';

if (! $_SESSION['nroFactura']){

$datoFactura = select ('cotizacion', array('MAX(idCotizacion)','idCliente','FechaCotizacion'));

$nroFactura = mysql_fetch_row($datoFactura);

$_SESSION['nroFactura'] = $nroFactura[0] + 1;

}


echo "Nro. Cotizacion: ".$_SESSION['nroFactura']."<br>";



if ($_POST['aceptar']){

$dato_producto = select('productos'&& 'bombas', array('idproducto', 'NombreProducto','PrecioProducto','idBombas','ReferenciaBomba','PrecioBoma'), 'idproducto'||'idBomba=' . $_POST['idproducto'||'idBombas']);

	

$dato_producto = select('productos', array('idproducto', 'NombreProducto','PrecioProducto',), 'idproducto=' . $_POST['idproducto']&& 'bombas',array('idBombas', 'ReferenciaBomba','PrecioBomba',), 'idBombas=' . $_POST['idBombas']);

$dato = mysql_fetch_row($dato_producto);

$item = $dato[1];

}

$cantidad = $_POST['cantidad'];

$itemsEnCesta = $_SESSION['itemsEnCesta'];

if ($item) {

if (!isset($itemsEnCesta)) {

$itemsEnCesta[$item] = $cantidad;

} else {

foreach ($itemsEnCesta as $k => $v) {

if ($item == $k) {

$itemsEnCesta[$k] += $cantidad;

$encontrado = 1;

}

}

if (!$encontrado)
$itemsEnCesta[$item] = $cantidad;

}

}

$_SESSION['itemsEnCesta'] = $itemsEnCesta;

?>
  </p>
  <tt>
</tt></p>
        <tt>
<form action="cotizacion3.php" method="post">

  
  Seleccione el producto
  
    <select name="idproducto">
    
  <option></option>
    
  <?php

$array_productos = select('productos', array('idproducto', 'NombreProducto',

'PrecioProducto',), '1 ORDER BY NombreProducto'&& 'bombas', array('idBombas', 'ReferenciaBomba',

'PrecioBomba',), '1 ORDER BY ReferenciaBomba');

while ($producto = mysql_fetch_array($array_productos)){

echo "<option value='$producto[0]'>$producto[1]</option>";

}

?>
    
  </select>
  
  
  Cantidad : <input type="text" name="cantidad" />
  
  <input type="submit" name="aceptar" value="Añadir a la cesta"><br>
  
</form>

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

$datoArticulo = select('productos', array('idproducto', 'NombreProducto','PrecioProducto'), "NombreProducto='" . $k . "'"&&'bombas', arrayarray('idBombas', 'ReferenciaBomba',

'PrecioBomba'), "NombreProducto||ReferenciaBomba='" . $k . "'");

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

<form action="" method="post">
  
  <input type="submit" name="okFacturar" value="Facturar" onclick="this.form.action = ''" />
  
  <input type="reset" name="Guardar2" id="Guardar2"  onclick="this.form.action = 'clientePage.php'" value="Volver" />
</form>
        </tt>
        <p><tt>
        </tt>	</p>
        <p>&nbsp;</p>
<p>&nbsp;</p>
        
<?php
	require('conexion1.php');
	
	$query="SELECT *  FROM productos";

	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
	
<style type="text/css">


/* Datagrid */
	body {
	font: normal medium/1.4 sans-serif;
	background: linear-gradient( 0deg, #C0C0C0   , #FC0);
	background-color: #FC0;
}
table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  padding: 0.25rem;
  border: 1px solid #ccc;
}
tbody tr:nth-child(odd) {
  background: #eee;
}
.centro{
  padding: 0.5rem;
  background: #484848 ;
  color: white;
  text-align: center;
  font-size: 21px;

}

#cuadro{
	width: 90%;
	background: #FCO ;
	padding: 25px;
	margin: 5px auto;
	border: 3px solid #D8D8D8;
}
#titulo{
	width: 100%;
	background: #282828;
	color:white;

}
	</style>
<body>
	
		<center>
<h1>Listado de productos</h1></center>
		</div>
		
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
    <p>&nbsp;</p>
    <p>
      <?php
	require('conexion1.php');
	
	$query="SELECT *  FROM bombas";

	$resultado=$mysqli->query($query);
	
?>
    </p>
    <center>
      <h1>Listado de Bombas</h1>
    </center>
    </div>
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
    <h1 align="center"></h1>
    <h1 align="center">&nbsp;</h1>

</body>
</html>	
	


</body>

</html>
</body>
</html>