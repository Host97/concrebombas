<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Añadir Bombas - Concrebombas</title>
<link href="../css/Table2.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../images/ico/apple-touch-icon-144.png">
</head>

<body>
 <div class="container">
                    <a href="#" class="brand">
                        <img  src="../Imagenes/LOGONAME.png" alt="Icono Empresarial:CONCREBOMBAS+BR" width="210"/></a></div>
                        
<p>&nbsp;</p>

<div class="title">
                    <h1 title="menú de servicios" align="center">Cotización Bombas</h1>
                    
                   
</div>
   <!-- Explain section start -->
<div class="section secondary-section">
            <div class="triangle"></div>
            <div class="container centered">
                <p class="large-text">En esta sección puedes seleccionar la bomba que más se acomode a sus necesidades, una vez seleccionada podrás sumar al carrito las bombas dando click al botón añadir</p>
                
            </div>
        </div>
<form id="form1" name="form1" method="post" onsubmit="return validar_Lista()" action="cotizacionCompleta.php">
	<?php
		
		  include_once 'libreria.php';
		 /*  $ref1=1;
  		 $correo= select('cliente', array('Email'),"IDcliente='".$ref1."'");
		  $correo1 = mysql_fetch_row($correo);
		  */
		  
		?>
  <table width="667" border="0" align="center">
    <tr>
      <td width="326" height="67"><div align="right">
      Bombas</div></td>
      <td width="325"> <label for="bombas"></label>
        <select name="bombas" size="1" id="bombas"alt="Esto es una lista desplegable de las bombas" title="Seleccione una bomba">
          <option>Seleccione bomba</option>
            <?php
			 include_once 'security.php';
include_once 'libreria.php';
$array_bombas =  select('bombas', array('idBombas', 'ReferenciaBomba','PrecioBomba'), '1 ORDER BY ReferenciaBomba');

while ($producto = mysql_fetch_array($array_bombas)){

echo "<option value='$producto[0]'>$producto[1]</option>";

}

?>
        </select> </td>
    </tr>
    <tr>
      <td height="74" ><div align="right">Metros</div></td>
      <td><input type="text" name="cantidad" id="cantidad"alt="Esto es un campo de texto para ingresar los metros de productos" title="Ingrese un número" /></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input name="Añadir" type="submit" class="button" id="Añadir" title="añadir los productos " onclick="cotizacionCompleta.php"value="Añadir" alt="Esto es un boton para añadir los prodcutos " />
      </div></td>
    </tr>
  </table>
</form>
<div align="center">
  <table width="430" border="0">
    <tr>
      <td><form id="form2" name="form2" method="post" action="cotizacionCompleta.php">
        <div align="center">
          <input name="Volver" type="submit" class="button" id="Volver" title="Volver a la cotizacion" onclick="cotizacionCompleta.php"value="Volver" alt="Esto es un boton que vuelve a la cotizacion" />
        </div>
      </form></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
        <!-- Footer section start -->
        <div class="footer">
            <p>&copy; PIERRE MAGIQUE Developers<br>
            SENA 2016</p>
        </div>
        <!-- Footer section end -->
</body>
</html>
 <script>

function validar_Lista()
{
         var msg = "No se ha seleccionado ningun Producto";
       var  bombas = document.getElementById("bombas");
            var msg1 = "No a ingresado una cantidad";
       var  cantidad= document.getElementById("cantidad");
       
       if( bombas.selectedIndex == null || bombas.selectedIndex == 0)
       {
               alert(msg);
               return false
       }
	   
       if( cantidad.value == 0 || cantidad.value == "")
       {
               alert(msg1);
               return false
       }
       
}



</script>