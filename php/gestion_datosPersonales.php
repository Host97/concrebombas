<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gestión de servicio/datos Personales - Concrebombas</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="../css/Table2.css" />
<link rel="stylesheet" type="text/css" href="../css/style.css" />

</head>

<body>
<!-- Title section start -->
 <div class="container">
                    <a href="#" class="brand">
                        <img  src="../Imagenes/LOGONAME.png" alt="Icono Empresarial:CONCREBOMBAS+BR" width="210"/></a></div>
                        
<p>&nbsp;</p>

<div class="title">
                    <h1 align="center">Gestión de Servicio</h1>
                    
                   
                </div>
   <!-- Title section start -->             
   <!-- Explain section start -->
        <div class="section secondary-section">
            <div class="triangle"></div>
            <div class="container centered">
                <p class="large-text">En esta sección se debe diligenciar todos los campos en su totalidad.<br />
Al terminar darle clic al botón <strong>SIGUENTE</strong> para continuar el reporte.
              </p>
                
            </div>
        </div>
    <!-- Explain section end -->
 
<form id="form1" name="form1" method="post" onsubmit="return validar_Lista()" action="guardarVar.php">

  <div align="center">
    <p>&nbsp;</p>
    <table width="123%" border="1">
      <tr>
        <td width="60%"><div align="right">Nombre Cliente</div></td>
        <td width="50%"><div align="left">
          <input type="text" name="Cliente" id="Cliente" required="required" />
        </div></td>
      </tr>
      <tr>
        <td><div align="right">Correo cliente</div></td>
        <td><div align="left">
          <input type="Email" name="EmailCliente" id="EmailCliente" required="required"/>
        </div></td>
      </tr>
      <tr>
        <td><div align="right">Codigo Obra</div></td>
        <td><div align="left">
          <input type="text" name="CodigoObra" id="CodigoObra2" required="required"/>
        </div></td>
      </tr>
      <tr>
        <td><div align="right">Direcciòn</div></td>
        <td><div align="left">
          <input type="text" name="Direccion" id="Direccion" required="required"/>
        </div></td>
      </tr>
      <tr>
        <td><div align="right">Cantidad m3</div></td>
        <td><div align="left">
          <input type="text" name="Cantidad" id="CodigoObra3" required="required"/>
        </div></td>
      </tr>
      <tr>
        <td><div align="right">Concretera</div></td>
        <td><p align="left">
          <select name="Concretera" size="1" id="Concretera">
            <option value="Seleccione Concretera">Seleccione Concretera</option>
            <option value="Cemex">Cemex</option>
            <option value="HormigonAndino">Hormigon Andino</option>
            <option value="HormigonUrbano">Hormigon Urbano</option>
            <option value="Argos">Argos</option>
          </select>
          </p>        </td>
      </tr>
      <tr>
        <td><div align="right">Diseño Concreto</div></td>
        <td><p align="left">
          <select name="DiseñoConcreto" size="1" id="DiseñoConcreto" alt="Esto es una lista desplegable que despliega los productos" title="Seleccione un producto">
            <option>Seleccione producto</option>
            <?php
include_once 'libreria.php';
include ('security.php');
$array_productos = select('productos', array('idproducto', 'NombreProducto','PrecioProducto',), '1 ORDER BY NombreProducto');

while ($producto = mysql_fetch_array($array_productos)){

echo "<option value='$producto[1]'>$producto[1]</option>";
mysql_query("SET NAMES 'utf8'");
}

?>
          </select>
          </p>        </td>
      </tr>
      <tr>
        <td><div align="right">Bomba</div></td>
        <td><p align="left">
          <select name="bomba" size="1" id="bomba"alt="Esto es una lista desplegable de las bombas" title="Seleccione una bomba">
            <option selected="selected">Seleccione bomba</option>
            <?php
include_once 'libreria.php';
$array_bombas =  select('bombas', array('idBombas', 'ReferenciaBomba','PrecioBomba'), '1 ORDER BY ReferenciaBomba');

while ($producto = mysql_fetch_array($array_bombas)){

echo "<option value='$producto[1]'>$producto[1]</option>";

}

?>
          </select>
          </p>        </td>
      </tr>
      <tr>
        <td><div align="right">Operador Bomba</div></td>
        <td><div align="left">
          <input type="text" name="OperadorBomba" id="CodigoObra" required="required"/>
        </div></td>
      </tr>
      <tr>
        <td><div align="right">Nivel</div></td>
        <td><div align="left">
          <input type="text" name="Nivel" id="Nivel" required="required"/>
        </div></td>
      </tr>
  </table>
    <table width="123%"  border="0" align="center">
      <tr>
        <td width="52%"><div align="right">Hora de llegada </div></td>
        <td width="40%"><div align="left">
          <select name="HoraLlegadaEquipo" required="required">
            <?php
			 
for ($i=0;$i<24;$i++)
{
$h1=sprintf("%02d",$i).":00";
$h2=sprintf("%02d",$i).":30";
?>
            <option value="<?php echo $h1; ?>"><?php echo $h1; ?></option>
            <option value="<?php echo $h2; ?>"><?php echo $h2; ?></option>
            <?php
}
?>
          </select>
        </div></td>
      </tr>
      <tr>
        <td><div align="right">Metros Totales </div></td>
        <td><div align="left">
          <input type="text" name="MetrosTotales" id="MetrosTotales" align="left" required="required"/>
        </div></td>
      </tr>
      <tr>
        <td><div align="right">Equipo listo</div></td>
        <td><div align="left">
          <select name="EquipoListo">
            <?php
for ($i=0;$i<24;$i++)
{
$h1=sprintf("%02d",$i).":00";
$h2=sprintf("%02d",$i).":30";
?>
            <option value="<?php echo $h1; ?>"><?php echo $h1; ?></option>
            <option value="<?php echo $h2; ?>"><?php echo $h2; ?></option>
            <?php
}
?>
          </select>
        </div></td>
      </tr>
      <tr>
        <td><div align="right">No. armadas</div></td>
        <td><div align="left">
          <input type="text" name="Armadas" id="Armadas" required="required"/>
        </div></td>
      </tr>
      <tr>
        <td><div align="right">Inicio de servicio</div></td>
        <td><div align="left">
          <select name="InicioServicio">
            <?php
for ($i=0;$i<24;$i++)
{
$h1=sprintf("%02d",$i).":00";
$h2=sprintf("%02d",$i).":30";
?>
            <option value="<?php echo $h1; ?>"><?php echo $h1; ?></option>
            <option value="<?php echo $h2; ?>"><?php echo $h2; ?></option>
            <?php
}
?>
          </select>
        </div></td>
      </tr>
      <tr>
        <td><div align="right">Cantidad elementos</div></td>
        <td><div align="left">
          <input type="text" name="CantidadElemntos" id="CantidadElemntos" required="required"/>
        </div></td>
      </tr>
      <tr>
        <td><div align="right">Final de servicio</div></td>
        <td><div align="left">
          <select name="FinalServicio">
            <?php
for ($i=0;$i<24;$i++)
{
$h1=sprintf("%02d",$i).":00";
$h2=sprintf("%02d",$i).":30";
?>
            <option value="<?php echo $h1; ?>"><?php echo $h1; ?></option>
            <option value="<?php echo $h2; ?>"><?php echo $h2; ?></option>
            <?php
}
?>
          </select>
        </div></td>
      </tr>
  </table>
   
  <p>
  <p align="center">
  <button class="button button-sp" input type="submit"  id="Siguiente" title="continuar al paso 2" onclick=" return validar_Lista()" value="Siguente" alt="Este boton nos lleva al siguiente menú" ><strong>SIGUIENTE</strong></button></p>
  </p>
  
</form>
<p>&nbsp;</p>
<p align="center">
  <a href="empleadoPage.php">
  <button class="button button-sp" input type="button"  id="volver" title="volver"  value="volver" alt="volver a página cliente" >CANCELAR</button></a></p>
  </p>
<p>&nbsp;</p>

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
       var msg = "No se ha seleccionado una opción";
       var  bomba = document.getElementById("bomba");
	   var  Concretera =document.getElementById("Concretera");
	   var  DiseñoConcreto = document.getElementById("DiseñoConcreto");
	   
       
       if(bomba.selectedIndex == 0 || Concretera.selectedIndex == 0 || DiseñoConcreto.selectedIndex == 0)
       {
               alert(msg);
               return false
       }
       
}

</script>