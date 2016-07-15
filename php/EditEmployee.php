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
  $updateSQL = sprintf("UPDATE empleado SET IDempleado=%s, Nombre=%s, Apellido=%s, Identificacion=%s, NumeroIdentificacion=%s, Telefono=%s, Movil=%s, Cargo=%s, Password=%s, usuarios_Email=%s WHERE Email=%s",
                       GetSQLValueString($_POST['IDempleado'], "int"),
                       GetSQLValueString($_POST['Nombre'], "text"),
                       GetSQLValueString($_POST['Apellido'], "text"),
                       GetSQLValueString($_POST['Identificacion'], "text"),
                       GetSQLValueString($_POST['NumeroIdentificacion'], "int"),
                       GetSQLValueString($_POST['Telefono'], "int"),
                       GetSQLValueString($_POST['Movil'], "int"),
                       GetSQLValueString($_POST['Cargo'], "text"),
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

$var_id_editEmp = "0";
if (isset($_GET['recordID'])) {
  $var_id_editEmp = $_GET['recordID'];
}
mysql_select_db($database_conexion, $conexion);
$query_editEmp = sprintf("SELECT * FROM empleado WHERE empleado.IDempleado=%s", GetSQLValueString($var_id_editEmp, "int"));
$editEmp = mysql_query($query_editEmp, $conexion) or die(mysql_error());
$row_editEmp = mysql_fetch_assoc($editEmp);
$totalRows_editEmp = mysql_num_rows($editEmp);
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
mysql_free_result($editEmp);
?>
</p>
<p>&nbsp;</p>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Nombre:</td>
      <td><input type="text" name="Nombre" value="<?php echo htmlentities($row_editEmp['Nombre'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Apellido:</td>
      <td><input type="text" name="Apellido" value="<?php echo htmlentities($row_editEmp['Apellido'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Identificacion:</td>
      <td><input type="text" name="Identificacion" value="<?php echo htmlentities($row_editEmp['Identificacion'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">NumeroIdentificacion:</td>
      <td><input type="text" name="NumeroIdentificacion" value="<?php echo htmlentities($row_editEmp['NumeroIdentificacion'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Telefono:</td>
      <td><input type="text" name="Telefono" value="<?php echo htmlentities($row_editEmp['Telefono'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Movil:</td>
      <td><input type="text" name="Movil" value="<?php echo htmlentities($row_editEmp['Movil'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Cargo:</td>
      <td><input type="text" name="Cargo" value="<?php echo htmlentities($row_editEmp['Cargo'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
   
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Actualizar registro" /></td>
    </tr>
  </table>
  <input type="hidden" name="IDempleado" value="<?php echo htmlentities($row_editEmp['IDempleado'], ENT_COMPAT, ''); ?>" />
  <input type="hidden" name="Email" value="<?php echo $row_editEmp['Email']; ?>" />
  <input type="hidden" name="usuarios_Email" value="<?php echo htmlentities($row_editEmp['usuarios_Email'], ENT_COMPAT, ''); ?>" />
  <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="Email" value="<?php echo $row_editEmp['Email']; ?>" />
</form>
<p>&nbsp;</p>
<p align="center">
  <a href="Administracion.php">
  <button class="button button-sp" input type="button"  id="Salir" title="Salir de cotizacion" value="Salir" alt="Este boton nos lleva de nuevo al menu se perderan los datos de la cotizacion" >SALIR</button></a></p>
<div class="footer">
  <p align="center">&copy; PIERRE MAGIQUE Developers<br />
  SENA 2016</p>
</div>
<p>&nbsp;</p>
