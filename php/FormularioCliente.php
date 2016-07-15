<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nuevo cliente - Concrebombas</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/Table2.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../images/ico/apple-touch-icon-144.png">
</head>

<body>
<!-- Title section start -->
 <div class="container">
                    <a href="../index.php" class="brand">
                        <img  src="../Imagenes/LOGONAME.png" alt="Icono Empresarial:CONCREBOMBAS+BR" width="210"/></a></div>
                        
<p>&nbsp;</p>

<div class="title">
                    <h1 title="menú de servicios" align="center">Formulario para cliente nuevo</h1>
                    
                   
                </div>
   <!-- Title section start -->             
   <!-- Explain section start -->
        <div class="section secondary-section">
            <div class="triangle"></div>
            <div class="container centered">
                <p class="large-text">Todos los campos son obligatorios, una vez diligenciado en su totalidad dar clic al botón enviar</p>
                
            </div>
        </div>
    <!-- Explain section end -->
    <!-- Form section start -->
   <p>&nbsp;</p>   
<form id="form1" name="form1" method="post" onsubmit="return validar_Captcha()" action="FormularioCliente.php">
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
        
        <option selected>Cedula </option>
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
      <th scope="row">Teléfono</th>
      <td><input type="tel" name="Telefono"  id="Telefono" /></td>
      </tr>
    <tr>
      <th scope="row">Móvil</th>
      <td><input type="tel" name="Movil" required="required" id="Movil" /></td>
      </tr>
    <tr>
      <th scope="row">Fax</th>
      <td><input type="text" name="Fax" id="Fax" /></td>
      </tr>
    <tr>
      <th scope="row">E-mail</th>
      <td><input type="email" name="Email" required="required" id="Email" /></td>
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
      <th scope="row" width="54%">Contraseña</th>
      <td><input  type="password" name="Password" required id="Password" /></td>
    </tr>
  </table>
  <h3>Este es un captcha de seguridad <br>
   por favor digite el texto indicado</h3>
     <table width="70%" border="1">
     <tr>
       <th scope="row" width="63%">Digite el siguiente texto: 22A01*</th>
       <td width="37%"><input type="text" name="captcha" required id="captcha" /></td>  
     </tr>
   </table>
  <p>&nbsp;</p>
</div>
<p align="center">&nbsp;</p>
<p align="center">
  <button class="button button-sp" input type="submit" onClick="this.form.action = 'ProcesoCliente.php'" id="button" value="Ingresar">ENVIAR</button>
</p>
</form>
     
<!-- Form section end -->
  <p align="center">
  <a href="../index.php">
  <button class="button button-sp" input type="button"  id="Salir" title="Volver" value="Salir" alt="Este botón nos lleva  al menú anterior se perderan los datos escritos" >SALIR</button></a></p>
</form>
 <!-- Footer section start -->
        <div class="footer">
            <p>&copy; PIERRE MAGIQUE Developers<br>
            SENA 2016</p>
        </div>
        <!-- Footer section end -->
</body>
</html>
 
 <script>

function validar_Captcha()
{
       var captcha = document.getElementById("captcha");
            var msg = "el captcha digitado es incorrecto";
       
	   
	   if(captcha.value != "22A01")
       {
               alert(msg);
               return false
       }
       
}

</script>