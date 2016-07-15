<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gestión de servicio/viajes - Concrebombas</title>
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
                    <h1 align="center">Gestión de servicio</h1>
                    
                   
                </div>
   <!-- Title section start -->             
   <!-- Explain section start -->
        <div class="section secondary-section">
            <div class="triangle"></div>
            <div class="container centered">
                <p class="large-text">Esta sección debe llenarse en su totalidad para continuar con el proceso.<br />
Dar clic en <strong>Sumar</strong> para adicionarlo al reporte.

                </p>
                
            </div>
        </div>
    <!-- Explain section end -->
<?php
	//session_start();
	include ('security.php');
?>
<form id="form1" name="form1" method="post" action="guardarVarRepiten.php">
  <p>&nbsp;</p>
  <table id="tbl3" width="123%" border="0" align="center" >
    <tr>
      <th width="50%"><div align="right">No.viaje</div></th>
      <td width="50%"><input type="text" name="Viaje" id="Viaje" required="required" /></td>
    </tr>
    <tr>
      <th><div align="right">Mixer</div></th>
      <td><input type="text" name="Mixer" id="Mixer" required="required"/></td>
    </tr>
    <tr>
      <th><div align="right">Hora de llegada</div></th>
      <td><select name="HoraLlegada">
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
      </select></td>
    </tr>
    <tr>
      <th><div align="right">Inicio de descargue
        
        
      </div></th>
      <td><select name="InicioDescargue">
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
      </select></td>
    </tr>
    <tr>
      <th><div align="right">Final de descargue</div></th>
      <td><select name="FinalDescargue">
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
      </select></td>
    </tr>
    <tr>
      <th><div align="right">m3 descargue</div></th>
      <td><input type="text" name="m3Descargue" id="m3Descargue" required="required"/></td>
    </tr>
    <tr>
      <th><div align="right">Remision</div></th>
        <td><input type="text" name="Remision" id="Remision" required="required"/></td>
    </tr>
  </table>
  <p>
    <label for="textfield"></label>
  </p>
  <?php
 
 if (isset($_SESSION['viaje']))
  {
	  
	  
  }
  ?>
<p align="center">
  <button class="button button-sp" input type="submit"  id="guardar" title="continuar al paso 2" value="guardar" alt="guardar en el informe los datos ingresados" ><strong>SUMAR</strong></button></p>
</form>	
<p align="center">
  <a href="gestion_servicio.php">
  <button class="button button-sp" input type="button"  id="Volver" title="volver" value="Siguente" alt="cancelar proceso de adición de datos" >CANCELAR</button></a></p>

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