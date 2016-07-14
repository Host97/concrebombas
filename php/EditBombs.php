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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE bombas SET Titulo=%s, ReferenciaBomba=%s, Nombre=%s, Motor=%s, MetrosBombeables=%s, Descripcion=%s, ImagenBomba=%s, PrecioBomba=%s, Activo=%s WHERE idBombas=%s",
                       GetSQLValueString($_POST['Titulo'], "text"),
                       GetSQLValueString($_POST['ReferenciaBomba'], "text"),
                       GetSQLValueString($_POST['Nombre'], "text"),
                       GetSQLValueString($_POST['Motor'], "text"),
                       GetSQLValueString($_POST['MetrosBombeables'], "text"),
                       GetSQLValueString($_POST['Descripcion'], "text"),
                       GetSQLValueString($_POST['ImagenBomba'], "text"),
                       GetSQLValueString($_POST['PrecioBomba'], "double"),
                       GetSQLValueString($_POST['Activo'], "int"),
                       GetSQLValueString($_POST['idBombas'], "int"));

  mysql_select_db($database_conexion, $conexion);
  $Result1 = mysql_query($updateSQL, $conexion) or die(mysql_error());

  $updateGoTo = "Administracion.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$var_id_editBomb = "0";
if (isset($_GET['recordID'])) {
  $var_id_editBomb = $_GET['recordID'];
}
mysql_select_db($database_conexion, $conexion);
$query_editBomb = sprintf("SELECT * FROM bombas WHERE bombas.idBombas=%s", GetSQLValueString($var_id_editBomb, "int"));
$editBomb = mysql_query($query_editBomb, $conexion) or die(mysql_error());
$row_editBomb = mysql_fetch_assoc($editBomb);
$totalRows_editBomb = mysql_num_rows($editBomb);
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
<h1 align="center">Editar información</h1>
<p align="center">Bombas</p>
</div> 
<p>
  <?php
mysql_free_result($editBomb);
?>
</p>
<p>&nbsp;</p>
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Titulo:</td>
      <td><input type="text" name="Titulo" value="<?php echo htmlentities($row_editBomb['Titulo'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">ReferenciaBomba:</td>
      <td><input type="text" name="ReferenciaBomba" value="<?php echo htmlentities($row_editBomb['ReferenciaBomba'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Nombre:</td>
      <td><input type="text" name="Nombre" value="<?php echo htmlentities($row_editBomb['Nombre'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Motor:</td>
      <td><input type="text" name="Motor" value="<?php echo htmlentities($row_editBomb['Motor'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">MetrosBombeables:</td>
      <td><input type="text" name="MetrosBombeables" value="<?php echo htmlentities($row_editBomb['MetrosBombeables'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Descripcion:</td>
      <td><input type="text" name="Descripcion" value="<?php echo htmlentities($row_editBomb['Descripcion'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">ImagenBomba:</td>
      <td><input type="text" name="ImagenBomba" value="<?php echo htmlentities($row_editBomb['ImagenBomba'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">PrecioBomba:</td>
      <td><input type="text" name="PrecioBomba" value="<?php echo htmlentities($row_editBomb['PrecioBomba'], ENT_COMPAT, ''); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Activo:</td>
      <td valign="baseline"><table>
        <tr>
          <td><input type="radio" name="Activo" value="1" <?php if (!(strcmp(htmlentities($row_editBomb['Activo'], ENT_COMPAT, ''),1))) {echo "checked=\"checked\"";} ?> />
            Mostrar</td>
        </tr>
        <tr>
          <td><input type="radio" name="Activo" value="0" <?php if (!(strcmp(htmlentities($row_editBomb['Activo'], ENT_COMPAT, ''),0))) {echo "checked=\"checked\"";} ?> />
            Ocultar</td>
        </tr>
      </table></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Actualizar registro" /></td>
    </tr>
  </table>
  <input type="hidden" name="idBombas" value="<?php echo $row_editBomb['idBombas']; ?>" />
  <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="idBombas" value="<?php echo $row_editBomb['idBombas']; ?>" />
</form>
<p>&nbsp;</p>
<div class="footer">
  <p align="center">&copy; PIERRE MAGIQUE Developers<br />
  SENA 2016</p>
</div>
