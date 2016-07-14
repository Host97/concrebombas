@Pierre_Magique
version 2.0
<title>formulario Empleado</title>
<link rel="stylesheet" type="text/css"  href="../css/button.css" />
<link rel="shortcut icon" href="../images/ico/favicon.ico.bmp">
<style type="text/css">
body,td,th {
	color: #FC0;
}
body {
	background-image: url(../Imagenes/grunge-danger-background.jpg);
}
</style>
</head>

<body>
<form name="form2" method="post" action="../index.html">
<p align="center">
 <a href="../index.html">
  <button class="button button-ps" input type="submit" onClick="this.form.action = '../index.html'" id="button2" value="Ingresar"><strong>Home</strong></button>
</a></p></form>

<p align="center"><a href="../index.html"><img src="../Imagenes/placaName.png" width="477" height="230"></a></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="ProcesoEmpleado.php">
 <div align="center">
   <table width="329" height="294" border="1">
     <tr>
       <th class="button-sp" scope="row">Nombre</th>
       <td class="button-ps"><input type="text" name="Nombre" required="required" id="Nombre" /></td>
     </tr>
     <tr>
       <th class="button-sp" scope="row">Apellido</th>
       <td class="button-ps"><input type="text" name="Apellido" required="required" id="Apellido" /></td>
     </tr>
     <tr>
       <th class="button-sp" scope="row">Identificación</th>
       <td class="button-ps"><select name="Identificacion"  required="required"id="Identificacion">
         <option>-------------------------</option>
         <option>Cedula </option>
         <option>Pasaporte</option>
         <option>D.N.I</option>
         <option>Cedula Militar</option>
         <option>Cedula Extrangeria</option>
       </select></td>
     </tr>
     <tr>
       <th class="button-sp" scope="row">Numero identificación</th>
       <td class="button-ps"><input type="text" name="NumeroIdentificacion" required="required" id="NumeroIdentificacion" /></td>
     </tr>
     <tr>
       <th class="button-sp" scope="row">Telefono</th>
       <td class="button-ps"><input type="text" name="Telefono" required="required" id="Telefono" /></td>
     </tr>
     <tr>
       <th class="button-sp" scope="row">Movil</th>
       <td class="button-ps"><input type="text" name="Movil" required="required" id="Movil" /></td>
     </tr>
     <tr>
       <th class="button-sp" scope="row">E-mail</th>
       <td class="button-ps"><input type="text" name="Email" required="required" id="Email" /></td>
     </tr>
     <tr>
       <th class="button-sp" scope="row">Cargo</th>
       <td class="button-ps"><input type="text" name="Cargo" required="required" id="Cargo" /></td>
     </tr>
   </table>
   <h2>Por favor cree una contraseña que <br>
   servira para ingresar a su usuario</h2>
   <table width="200" border="1">
     <tr>
       <th scope="row">Contraseña</th>
       <td class="button-ps"><input type="password" name="Password" required id="Password" /></td>
     </tr>
   </table>
   <p>&nbsp;</p>
   <p><br>
   </p>
   <button class="button button-sp" input type="submit" onClick="this.form.action = 'ProcesoEmpleado.php'" id="button" value="Volver">ENVIAR</button>
</div>
</form>
</form>
</div>
<div class="footer">
           <p align="center"><strong>&copy; PIERRE MAGIQUE Developers<br>
            SENA 2016</strong></p>
</div>
<p><br />
</p>
</body>
</html>