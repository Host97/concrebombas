<title>Bienvenido a Concrebombas</title>
<link rel="stylesheet" type="text/css" href="../css/Table2.css"/>
<link rel="stylesheet" type="text/css" href="../css/style.css"/>
<link rel="shortcut icon" href="../images/ico/apple-touch-icon-57.png">
</head>

<body>
<div class="container"> <a href="ingresoCliente.php" class="brand"> <img  src="../Imagenes/LOGONAME.png" alt="Icono Empresarial:CONCREBOMBAS+BR" width="210"/></a></div>
<!-- -->
<form id="form1" name="form1" method="post" action="ingresoCliente.php">
  <p align="center">
    <a href="ingresoCliente.php">
    <button class="button button-sp" input type="submit" onClick="this.form.action = 'ingresoCliente.php'" id="button" value="volver">volver</button>
  </a>  </p>
</form>
<p>&nbsp;</p>


<div align="center">
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
$Permisos= 1;
$Activo= 1;
$relacionar= 1;
$link = mysql_connect("localhost","root","");
mysql_select_db("concrebombas",$link);
	
	
$consulta="INSERT INTO cliente(NombreCliente,NombreEmpresa,Apelativo,Domicilio,Almacen,Telefono,Movil,Fax,Email,Twiter,Facebook,CCC,IBAN,BIC,Banco,Identificacion,NumeroIdentificacion,Password,relacionar) VALUES ('$NombreCliente', '$NombreEmpresa','$Apelativo','$Domicilio','$Almacen','$Telefono','$Movil','$Fax','$Email','$Twiter','$Facebook','$CCC','$IBAN','$BIC','$Banco','$Identificacion','$NumeroIdentificacion','$Password','$relacionar')";

$consulta1="INSERT INTO usuarios(Email,Password,Permisos,Activo,relacionar) VALUES ('$Email', '$Password','$Permisos','$Activo','$relacionar')";

mysql_query($consulta) or die(mysqli_error());
mysql_query($consulta1) or die(mysqli_error());

mysql_close($link);

echo '<center>¡Datos registrados satisfactoriamente! </center>'; 
echo "</br>";
echo '<center> Tu usuario ha sido creado con tu Email:</center>'; echo $_POST['Email'];

echo "</br><strong>contraseña: </strong>";echo $_POST['Password'];

?>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<!-- Footer section start -->
<div class="footer">
    <p>&copy; PIERRE MAGIQUE Developers<br>
  SENA 2016</p>
</div>

        <!-- Footer section end -->
</body>
</html>