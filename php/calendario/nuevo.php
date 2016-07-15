<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>jQuery UI Datepicker - Entrada de texto</title>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<script src="jquery.ui.datepicker-es.js"></script>

<script>
$(function () {
$.datepicker.setDefaults($.datepicker.regional["es"]);
$("#datepicker").datepicker({
minDate: 0
});
});
</script>

</head>

<body>
Fecha:
<input type="text" id="datepicker" />

<select name="idBomba">

<option></option>

<?php

include("config.inc.php");

$array_bomba = seleccionar('bombas', array('idBombas', 'ReferenciaBomba','Nombre', 'MetrosBombeables'), '1 ORDER BY Nombre');

while ($bomba= mysql_fetch_array($array_bomba)){

echo "<option value='$producto[0]'>$producto[1]</option>";

}

?>

</select>

</body>
</html>