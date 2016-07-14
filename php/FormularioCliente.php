@Pierre_Magique
version 2.0
<title>Formulario Cliente</title>
<link rel="stylesheet" type="text/css" href="../css/button.css" />
<link rel="stylesheet" type="text/css" href="../fonts/pluton.ttf"/>
<link rel="shortcut icon" href="../images/ico/favicon.ico.bmp">
<script type="text/javascript">
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
</script>
</head>
<style type="text/css">
body,td,th {
	color: #FFF;
}
body {
	background-image: url(../Imagenes/grunge-danger-background.jpg);
}
</style>
<body>
<form name="form3" method="post" action="index.html">
<p align="center">
  <a href="../index.html">
  <button class="button button-ps" input type="submit" onClick="this.form.action = 'index.html'" id="button2" value="Ingresar"><strong>Home</strong></button>
  </a></p>
</form>


<p align="center"><img src="../Imagenes/placaName.png" width="501" height="222" /></p>
<p align="center">&nbsp;</p>
<h1 align="center"><strong>FORMULARIO PARA CLIENTE NUEVO</strong></h1>
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="FormularioCliente.php">
<p>&nbsp;</p>
<div align="center">
  <table width="200" border="1">
    <tr>
      <th scope="row">Nombre</th>
      <td><input type="text" name="NombreCliente" required="required" id="NombreCliente" /></td>
      </tr>
    <tr>
      <th scope="row">Nombre Empresa</th>
      <td><input type="text" name="NombreEmpresa"   id="NombreEmpresa" /></td>
      </tr>
    <tr>
      <th scope="row">Identificación</th>
      <td><select name="Identificacion" id="Identificacion">
        <option>----------------------</option>
        <option>Cedula </option>
        <option>Pasaporte</option>
        <option>D.N.I</option>
        <option>Cedula Militar</option>
        <option>Cedula Extrangeria</option>
      </select></td>
      </tr>
    <tr>
      <th scope="row">Numero identificación</th>
      <td><input type="text" name="NumeroIdentificacion" required="required" id="NumeroIdentificacion" /></td>
      </tr>
    <tr>
      <th scope="row">Apelativo</th>
      <td><label for="Apelativo"></label>
        <select name="Apelativo" id="Apelativo">
          <option>---------------</option>
          <option>Señor</option>
          <option>Señora</option>
          <option>Señorita</option>
          <option>Doctor</option>
          <option>Doctora</option>
          <option>Ingeniero</option>
        </select></td>
      </tr>
    <tr>
      <th scope="row">Domicilio</th>
      <td><input type="text" name="Domicilio" required="required" id="Domicilio" /></td>
      </tr>
    <tr>
      <th scope="row">Almacen</th>
      <td><input type="text" name="Almacen"  id="Almacen" /></td>
      </tr>
    <tr>
      <th scope="row">Telefono</th>
      <td><input type="text" name="Telefono"  id="Telefono" /></td>
      </tr>
    <tr>
      <th scope="row">Movil</th>
      <td><input type="text" name="Movil" required="required" id="Movil" /></td>
      </tr>
    <tr>
      <th scope="row">Fax</th>
      <td><input type="text" name="Fax" id="Fax" /></td>
      </tr>
    <tr>
      <th scope="row">E-mail</th>
      <td><input type="text" name="Email" required="required" id="Email" /></td>
      </tr>
    <tr>
      <th scope="row">Twiter</th>
      <td><input type="text" name="Twiter"  id="Twiter" /></td>
      </tr>
    <tr>
      <th scope="row">Facebook</th>
      <td><input type="text" name="Facebook"  id="Facebook" /></td>
      </tr>
    <tr>
      <th scope="row">C.C.C </th>
      <td><input type="text" name="CCC"  id="CCC" /></td>
      </tr>
    <tr>
      <th scope="row">IBAN</th>
      <td><input type="text" name="IBAN"   id="IBAN" /></td>
      </tr>
    <tr>
      <th scope="row">BIC</th>
      <td><input type="text" name="BIC" id="BIC" /></td>
      </tr>
    <tr>
      <th scope="row">Banco</th>
      <td><input type="text" name="Banco" id="Banco" /></td>
      </tr>
  </table>
</div>
<div align="center">
  <h3><strong>Por favor cree una contraseña que <br>
    servira para ingresar a su usuario</strong></h3>
  <table width="200" border="1">
    <tr>
      <th scope="row">Contraseña</th>
      <td><input  type="password" name="Password" required id="Password" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
<p align="center">&nbsp;</p>
<p align="center">
  <button class="button button-sp" input type="submit" onClick="this.form.action = 'ProcesoCliente.php';MM_openBrWindow('ventana.php','','width=300,height=300')" id="button" value="Ingresar">ENVIAR</button>
</p>
</form>
<form id="form2" name="form2" method="post" action="login.php">
  <div align="center">
    <button class="button button-sp" input type="submit" onClick="this.form.action = 'login.php'" id="button" value="Ingresar">VOLVER</button>
  </div>
</form>
<p>&nbsp;</p>
<p> <div class="footer">
            <p align="center">&copy; PIERRE MAGIQUE Developers<br>
            SENA 2016</p><br />
</p>
</body>
</html>