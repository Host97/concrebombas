<?php require_once('../Connections/conexion.php'); include('security.php');?>
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
  $updateSQL = sprintf("UPDATE cliente SET IDcliente=%s, NombreCliente=%s, NombreEmpresa=%s, Apelativo=%s, Domicilio=%s, Almacen=%s, Telefono=%s, Movil=%s, Fax=%s, Twiter=%s, Facebook=%s, CCC=%s, IBAN=%s, BIC=%s, Banco=%s, Identificacion=%s, NumeroIdentificacion=%s, Password=%s, usuarios_Email=%s WHERE Email=%s",
                       GetSQLValueString($_POST['IDcliente'], "int"),
                       GetSQLValueString($_POST['NombreCliente'], "text"),
                       GetSQLValueString($_POST['NombreEmpresa'], "text"),
                       GetSQLValueString($_POST['Apelativo'], "text"),
                       GetSQLValueString($_POST['Domicilio'], "text"),
                       GetSQLValueString($_POST['Almacen'], "text"),
                       GetSQLValueString($_POST['Telefono'], "int"),
                       GetSQLValueString($_POST['Movil'], "int"),
                       GetSQLValueString($_POST['Fax'], "int"),
                       GetSQLValueString($_POST['Twiter'], "text"),
                       GetSQLValueString($_POST['Facebook'], "text"),
                       GetSQLValueString($_POST['CCC'], "int"),
                       GetSQLValueString($_POST['IBAN'], "text"),
                       GetSQLValueString($_POST['BIC'], "text"),
                       GetSQLValueString($_POST['Banco'], "text"),
                       GetSQLValueString($_POST['Identificacion'], "text"),
                       GetSQLValueString($_POST['NumeroIdentificacion'], "text"),
                       GetSQLValueString($_POST['Password'], "text"),
                       GetSQLValueString($_POST['usuarios_Email'], "text"),
                       GetSQLValueString($_POST['Email'], "text"));

  mysql_select_db($database_conexion, $conexion);
  $Result1 = mysql_query($updateSQL, $conexion) or die(mysql_error());

  $updateGoTo = "Administracion.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$var_id_editClient = "0";
if (isset($_GET['recordID'])) {
  $var_id_editClient = $_GET['recordID'];
}
mysql_select_db($database_conexion, $conexion);
$query_editClient = sprintf("SELECT * FROM cliente WHERE cliente.IDcliente=%s", GetSQLValueString($var_id_editClient, "int"));
$editClient = mysql_query($query_editClient, $conexion) or die(mysql_error());
$row_editClient = mysql_fetch_assoc($editClient);
$totalRows_editClient = mysql_num_rows($editClient);
?>
<link href="../css/style.css" rel="stylesheet" type="text/css">

<style type="text/css">
body,td,th {
	font-family: Roboto, sans-serif;
	font-size: 24px;
}
body {
	background-color: #181a1c;
}
</style>

<img src="../Imagenes/LOGONAME.png" width="210" height="80" alt="logoname" />
<div class="tittle">
<h1 align="center">Editar Persona</h1>
<p align="center">Usuario Cliente</p>
</div>
<p>
  <?php
mysql_free_result($editClient);
?>
</p>
<p>&nbsp;</p>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">NombreCliente:</td>
      <td><input type="text" name="NombreCliente" value="<?php echo htmlentities($row_editClient['NombreCliente'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">NombreEmpresa:</td>
      <td><input type="text" name="NombreEmpresa" value="<?php echo htmlentities($row_editClient['NombreEmpresa'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Apelativo:</td>
      <td><input type="text" name="Apelativo" value="<?php echo htmlentities($row_editClient['Apelativo'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Domicilio:</td>
      <td><input type="text" name="Domicilio" value="<?php echo htmlentities($row_editClient['Domicilio'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Almacen:</td>
      <td><input type="text" name="Almacen" value="<?php echo htmlentities($row_editClient['Almacen'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Telefono:</td>
      <td><input type="text" name="Telefono" value="<?php echo htmlentities($row_editClient['Telefono'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Movil:</td>
      <td><input type="text" name="Movil" value="<?php echo htmlentities($row_editClient['Movil'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Fax:</td>
      <td><input type="text" name="Fax" value="<?php echo htmlentities($row_editClient['Fax'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Twiter:</td>
      <td><input type="text" name="Twiter" value="<?php echo htmlentities($row_editClient['Twiter'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Facebook:</td>
      <td><input type="text" name="Facebook" value="<?php echo htmlentities($row_editClient['Facebook'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">CCC:</td>
      <td><input type="text" name="CCC" value="<?php echo htmlentities($row_editClient['CCC'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">IBAN:</td>
      <td><input type="text" name="IBAN" value="<?php echo htmlentities($row_editClient['IBAN'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">BIC:</td>
      <td><input type="text" name="BIC" value="<?php echo htmlentities($row_editClient['BIC'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Banco:</td>
      <td><input type="text" name="Banco" value="<?php echo htmlentities($row_editClient['Banco'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Identificacion:</td>
      <td><input type="text" name="Identificacion" value="<?php echo htmlentities($row_editClient['Identificacion'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">NumeroIdentificacion:</td>
      <td><input type="text" name="NumeroIdentificacion" value="<?php echo htmlentities($row_editClient['NumeroIdentificacion'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
   
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Actualizar registro" /></td>
    </tr>
  </table>
  <input type="hidden" name="IDcliente" value="<?php echo htmlentities($row_editClient['IDcliente'], ENT_COMPAT, ''); ?>" />
  <input type="hidden" name="Email" value="<?php echo $row_editClient['Email']; ?>" />
  <input type="hidden" name="usuarios_Email" value="<?php echo htmlentities($row_editClient['usuarios_Email'], ENT_COMPAT, ''); ?>" />
  <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="Email" value="<?php echo $row_editClient['Email']; ?>" />
</form>
<p align="center">
  <a href="Administracion.php">
  <button class="button button-sp" input type="button"  id="Salir" title="Salir de cotizacion" value="Salir" alt="Este boton nos lleva de nuevo al menu se perderan los datos de la cotizacion" >SALIR</button></a></p>
<p>&nbsp;</p>
<div class="footer">
  <p align="center">&copy; PIERRE MAGIQUE Developers<br />
  SENA 2016</p>
</div>
<p>&nbsp;</p>
