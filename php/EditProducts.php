<?php require_once('../Connections/conexion.php'); include('security.php');
error_reporting(0);?>
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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE productos SET tituloProducto=%s, NombreProducto=%s, PrecioProducto=%s, ReferenciaProducto=%s, DescripcionProducto=%s, imagen=%s, Activo=%s, cotizacion_idcotizacion=%s WHERE idproducto=%s",
                       GetSQLValueString($_POST['tituloProducto'], "text"),
                       GetSQLValueString($_POST['NombreProducto'], "text"),
                       GetSQLValueString($_POST['PrecioProducto'], "double"),
                       GetSQLValueString($_POST['ReferenciaProducto'], "text"),
                       GetSQLValueString($_POST['DescripcionProducto'], "text"),
                       GetSQLValueString($_POST['imagen'], "text"),
                       GetSQLValueString($_POST['Activo'], "int"),
                       GetSQLValueString($_POST['cotizacion_idcotizacion'], "int"),
                       GetSQLValueString($_POST['idproducto'], "int"));

  mysql_select_db($database_conexion, $conexion);
  $Result1 = mysql_query($updateSQL, $conexion) or die(mysql_error());

  $updateGoTo = "Administracion.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$var_id_editProduct = "0";
if (isset($_GET['recordID'])) {
  $var_id_editProduct = $_GET['recordID'];
}
mysql_select_db($database_conexion, $conexion);
$query_editProduct = sprintf("SELECT * FROM productos WHERE productos.idproducto=%s", GetSQLValueString($var_id_editProduct, "int"));
$editProduct = mysql_query($query_editProduct, $conexion) or die(mysql_error());
$row_editProduct = mysql_fetch_assoc($editProduct);
$totalRows_editProduct = mysql_num_rows($editProduct);
?>
<style type="text/css">
body {
	background-color: #181a1c;
}
</style>
<link href="../css/style.css" rel="stylesheet" type="text/css" />

<style type="text/css">
body,td,th {
	font-family: Roboto, sans-serif;
	font-size: 24px;
}
</style>

<img src="../Imagenes/LOGONAME.png" width="210" height="80" alt="logoname" />
<div class="tittle">
  <h1 align="center">Editar Información</h1>
  <p align="center">Productos</p>
</div>
<p>
  <?php
mysql_free_result($editProduct);
?>
</p>
<p>&nbsp;</p>
<script>
function updateImage()
{
	self.name = 'opener';
	remote = open('questionImage.php', 'remote', 'width=400, heigth=150,location=no,scrollbars=yes, menubars=no, toolbars=no, resizable=yes, fullscreen=no, status=yes');
	remote.focus();
}
</script>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Titulo Producto:</td>
      <td><input type="text" name="tituloProducto" value="<?php echo htmlentities($row_editProduct['tituloProducto'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Nombre Producto:</td>
      <td><input type="text" name="NombreProducto" value="<?php echo htmlentities($row_editProduct['NombreProducto'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Precio Producto:</td>
      <td><input type="text" name="PrecioProducto" value="<?php echo htmlentities($row_editProduct['PrecioProducto'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Referencia Producto:</td>
      <td><input type="text" name="ReferenciaProducto" value="<?php echo htmlentities($row_editProduct['ReferenciaProducto'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Descripcion Producto:</td>
      <td><input type="text" name="DescripcionProducto" value="<?php echo htmlentities($row_editProduct['DescripcionProducto'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Imagen:</td>
      <td><input type="text" name="strTmagen" value="<?php echo htmlentities($row_editProduct['imagen'], ENT_COMPAT, ''); ?>" size="32" />
        <input type="button" name="button" id="button" value="Buscar.." onclick="script:UpdateImage();" />
      </td>
    </tr>
    <tr valign="baseline"> 
      <td nowrap="nowrap" align="right">Activo:</td>
      <td valign="baseline"><table>
        <tr>
          <td><input type="radio" name="Activo" value="1" <?php if (!(strcmp(htmlentities($row_editProduct['Activo'], ENT_COMPAT, ''),1))) {echo "checked=\"checked\"";} ?> />
            Mostrar</td>
        </tr>
        <tr>
          <td><input type="radio" name="Activo" value="0" <?php if (!(strcmp(htmlentities($row_editProduct['Activo'], ENT_COMPAT, ''),0))) {echo "checked=\"checked\"";} ?> />
            Ocultar</td>
        </tr>
      </table></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Actualizar registro" /></td>
    </tr>
  </table>
  <input type="hidden" name="idproducto" value="<?php echo $row_editProduct['idproducto']; ?>" />
  <input type="hidden" name="cotizacion_idcotizacion" value="<?php echo htmlentities($row_editProduct['cotizacion_idcotizacion'], ENT_COMPAT, ''); ?>" />
  <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="idproducto" value="<?php echo $row_editProduct['idproducto']; ?>" />
</form>
<p align="center">
  <a href="Administracion.php">
  <button class="button button-sp" input type="button"  id="Salir" title="Salir de cotizacion" value="Salir" alt="Este boton nos lleva de nuevo al menu se perderan los datos de la cotizacion" >SALIR</button></a></p>
<p>&nbsp;</p>
<div class="footer">
  <p align="center">&copy; PIERRE MAGIQUE Developers<br />
  SENA 2016</p>
</div>


