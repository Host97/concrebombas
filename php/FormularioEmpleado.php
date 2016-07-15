<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nuevo empleado - Concrebombas</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/Table2.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../images/ico/apple-touch-icon-144.png">
</head>

<body>
<!-- Title section start -->
 <div class="container">
                    <a href="#" class="brand">
                        <img  src="../Imagenes/LOGONAME.png" alt="Icono Empresarial:CONCREBOMBAS+BR" width="210"/></a></div>
                        
<p>&nbsp;</p>

<div class="title">
                    <h1 title="menú de servicios" align="center">Formulario para empleado nuevo</h1>
                    
                   
                </div>
   <!-- Title section start -->             
   <!-- Explain section start -->
        <div class="section secondary-section">
            <div class="triangle"></div>
            <div class="container centered">
                <p class="large-text">Todos los campos son obligatorios, una vez diligenciado en su totalidad dar click al botón enviar</p>
                
            </div>
        </div>
    <!-- Explain section end -->
    <!-- Form section start -->
      <p>&nbsp;</p>
    <form id="form1" name="form1" method="post" onsubmit="return validar_Captcha()" action="ProcesoEmpleado.php">
 <div align="center">
   <table width="329%" height="294" border="1">
     <tr>
       <th scope="row">Nombre*</th>
       <td><strong>
         <input type="text" name="Nombre" required="required" id="Nombre" title="Escriba aquí su nombre" />
       </strong></td>
     </tr>
     <tr>
       <th scope="row">Apellido*</th>
       <td><strong>
         <input type="text" name="Apellido" required="required" id="Apellido" title="Escriba aquí sus Apellidos" />
       </strong></td>
     </tr>
     <tr>
       <th scope="row">Identificación*</th>
       <td><strong>
         <select name="Identificacion"  required="required"id="Identificacion*" alt="Sub menú de opciones, haga clic para desplegar" title="Seleccione su tipo de documento">
           <option selected="selected">Cedula </option>
           <option>Pasaporte</option>
           <option>D.N.I</option>
           <option>Cedula Militar</option>
           <option>Cedula Extrangeria</option>
         </select>
       </strong></td>
     </tr>
     <tr>
       <th scope="row">Número identificación*</th>
       <td><strong>
         <input type="text" name="NumeroIdentificacion" required="required" id="NumeroIdentificacion"  title="Escriba aqui su número de cedula"/>
       </strong></td>
     </tr>
     <tr>
       <th scope="row">Teléfono</th>
       <td><strong>
         <input type="tel" name="Telefono" required="required" id="Telefono" />
       </strong></td>
     </tr>
     <tr>
       <th scope="row">Móvil</th>
       <td><strong>
         <input type="tel" name="Movil" required="required" id="Movil" />
       </strong></td>
     </tr>
     <tr>
       <th scope="row">E-mail*</th>
       <td><strong>
         <input type="email" name="Email" required="required" id="Email" />
       </strong></td>
     </tr>
     <tr>
       <th scope="row">Cargo</th>
       <td><strong>
         <input type="text" name="Cargo" required="required" id="Cargo" />
       </strong></td>
     </tr>
   </table>
   <h3>Por favor cree una contraseña que <br>
   servirá para ingresar a su usuario</h3>
   <table width="70%" border="1">
     <tr>
       <th scope="row" width="63%">Contraseña*</th>
       <td width="37%"><input type="password" name="Password" required id="Password" /></td>  
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

   <button class="button button-sp" input type="submit" onClick="this.form.action = 'ProcesoEmpleado.php'" id="button" value="Volver">ENVIAR</button>
</div>
</form>
    
    <!-- Form section end -->
  <p align="center">
  <a href="../index.php">
  <button class="button button-sp" input type="button"  id="Salir" title="Salir de cotizacion" onclick=" return validar_Lista()" value="Salir" alt="Este boton nos lleva de nuevo al menu se perderan los datos de la cotizacion" >SALIR</button></a></p>
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
 