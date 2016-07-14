@Pierre_Magique
version 2.0
<title>proceso Cliente</title>
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
    <button class="button button-sp" input type="submit" onClick="this.form.action = 'login.php'" id="button" value="volver">volver</button>
  </a>  </p>
</form>
<p>&nbsp;</p>
</body>

<?php

$NombreCliente = $_POST["NombreCliente"];
$NombreEmpresa = $_POST["NombreEmpresa"];
$Identificacion = $_POST["Identificacion"];
$NumeroIdentificacion = $_POST["NumeroIdentificacion"];
$Apelativo = $_POST["Apelativo"];
$Domicilio = $_POST["Domicilio"];
$Almacen = $_POST["Almacen"];
$Telefono = $_POST["Telefono"];
$Movil = $_POST["Movil"];
$Fax = $_POST["Fax"];
$Email = $_POST["Email"];
$Twiter = $_POST["Twiter"];
$Facebook  = $_POST["Facebook"];
$CCC = $_POST["CCC"];
$IBAN = $_POST["IBAN"];
$BIC = $_POST["BIC"];
$Banco = $_POST["Banco"];
$Password = $_POST["Password"];
$Permisos= 0;
$link = mysql_connect("localhost","root","");
mysql_select_db("concrebombas",$link);
	
	
$consulta="INSERT INTO cliente(NombreCliente,NombreEmpresa,Apelativo,Domicilio,Almacen,Telefono,Movil,Fax,Email,Twiter,Facebook,CCC,IBAN,BIC,Banco,Identificacion,NumeroIdentificacion,Password) VALUES ('$NombreCliente', '$NombreEmpresa','$Apelativo','$Domicilio','$Almacen','$Telefono','$Movil','$Fax','$Email','$Twiter','$Facebook','$CCC','$IBAN','$BIC','$Banco','$Identificacion','$NumeroIdentificacion','$Password')";

$consulta1="INSERT INTO usuarios(Email,Password,Permisos) VALUES ('$Email', '$Password','$Permisos')";

mysql_query($consulta) or die(mysqli_error());
mysql_query($consulta1) or die(mysqli_error());

mysql_close($link);

echo '<center>¡Datos registrados satisfactoriamente! </center>'; 
echo "</br>";
echo '<center> Tu usuario ha sido creado con tu Email </center>';
echo "</br>";

?>
</html>