@Pierre_Magique
version 2.0
<title>proceso Empleado</title>
<link rel="stylesheet" type="text/css" href="../css/button.css" />
<link rel="shortcut icon" href="../images/ico/favicon.ico.bmp">
<style type="text/css">
body {
	background-image: url(../Imagenes/font3.png);
	background-color: #000;
	background-repeat: no-repeat;
}
body,td,th {
	color: #FFF;
	font-family: Verdana, Geneva, sans-serif;
	font-weight: bold;
	font-size: 18px;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="login.php">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p align="center">
    <a href="login.php">
    <button class="button button-sp" input type="submit" onClick="this.form.action = 'login1.php'" id="button" value="Ingresar">volver</button>
  </a>  </p>
</form>
</body>

<?php

$Nombre = $_POST["Nombre"];
$Apellido = $_POST["Apellido"];
$Identificacion = $_POST["Identificacion"];
$NumeroIdentificacion = $_POST["NumeroIdentificacion"];
$Telefono = $_POST["Telefono"];
$Movil = $_POST["Movil"];
$Email = $_POST["Email"];
$Cargo = $_POST["Cargo"];
$Password = $_POST["Password"];
$Permisos= 1;
$link = mysql_connect("localhost","root","");
mysql_select_db("concrebombas",$link);
	
$consulta="INSERT INTO empleado(Nombre,Apellido,Identificacion,NumeroIdentificacion,Telefono,Movil,Email,Cargo,Password) VALUES ('$Nombre', '$Apellido','$Identificacion','$NumeroIdentificacion','$Telefono','$Movil','$Email','$Cargo','$Password')";

$consulta1="INSERT INTO usuarios(Email,Password,Permisos) VALUES ('$Email', '$Password','$Permisos')";

mysql_query($consulta) or die(mysql_error());
mysql_query($consulta1) or die(mysql_error());

mysql_close($link);

echo '<center>¡Datos registrados satisfactoriamente! </center>'; 
echo "</br>";
echo '<center> Tu usuario ha sido creado con tu Email </center>';
echo "</br>";
?>
</html>