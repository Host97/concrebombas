<title>Bienvenido a Concrebombas</title>
<link rel="stylesheet" type="text/css" href="../css/Table2.css"/>
<link rel="stylesheet" type="text/css" href="../css/style.css"/>
<link rel="shortcut icon" href="../images/ico/apple-touch-icon-144.png"
</head>

<body>
<div class="container"> <a href="ingresoEmpleado.php" class="brand"> <img  src="../Imagenes/LOGONAME.png" alt="Icono Empresarial:CONCREBOMBAS+BR" width="210"/></a></div>
<form id="form1" name="form1" method="post" action="ingresoEmpleado.php">

  <p align="center">
    <a href="ingresoEmpleado.php">
    <button class="button button-sp" input type="submit" onClick="this.form.action = 'ingresoEmpleado.php'" id="button" value="Ingresar">volver</button>
  </a>  </p>
</form>

<div align="center">
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
$Permisos= 2;
$Activo= 1;
$relacionar= 1;
$link = mysql_connect("localhost","root","");
mysql_select_db("concrebombas",$link);
	
$consulta="INSERT INTO empleado(Nombre,Apellido,Identificacion,NumeroIdentificacion,Telefono,Movil,Email,Cargo,Password,relacionar) VALUES ('$Nombre', '$Apellido','$Identificacion','$NumeroIdentificacion','$Telefono','$Movil','$Email','$Cargo','$Password','$relacionar')";

$consulta1="INSERT INTO usuarios(Email,Password,Permisos,Activo,relacionar) VALUES ('$Email', '$Password','$Permisos','$Activo','$relacionar')";

mysql_query($consulta) or die(mysql_error());
mysql_query($consulta1) or die(mysql_error());

mysql_close($link);

echo '<center>¡Datos registrados satisfactoriamente! </center>'; 
echo "</br>";
echo '<center> Tu usuario ha sido creado con tu Email</center>';echo $_POST['Email'];

echo "</br><center> contraseña: </center>";echo $_POST['Password'];
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