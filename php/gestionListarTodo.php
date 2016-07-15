<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Selección Reportajes/Administración - Concrebombas</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="../css/bootstrap-responsive.css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/Table2.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../images/ico/apple-touch-icon-144.png">
</head>

<body>
<!-- Title section start -->
 <div class="container">
                    <a href="Administracion.php" class="brand">
                        <img  src="../Imagenes/LOGONAME.png" alt="Icono Empresarial:CONCREBOMBAS+BR" width="210"/></a></div>
                        
<p>&nbsp;</p>

<div class="title">
                    <h1 title="menú de servicios" align="center">Revisión de Reportes</h1>
                    
                   
                </div>
   <!-- Title section start -->             
   <!-- Explain section start -->
        <div class="section secondary-section">
            <div class="triangle"></div>
            <div class="container centered">
                <p class="large-text">En esta sección puede revisar todos los reportes enviados por sus empleados</p>
                
            </div>
        </div>
    <!-- Explain section end -->
    <!-- Form section start -->

<form id="form1" name="form1" method="post" action="">
  <?php



include_once 'libreria.php';
	  
$con1=select('gestionservicio',array('idServicio','Fecha','Cliente','CorreoCliente','CodigoObra','Direccion','CantidadM3','Concretera','DisenoConcreto','Bomba','OperadorBomba','Nivel','HoraLlegadaEquipo','MetrosTotales','EquipoListo','Armadas','InicioServicio','CantidadElementos','FinalServicio','NumViaje','Mixer','HoraLlegada','InicioDescargue','FinalDescargue','m3Descargue','Remision'),'1 ORDER BY Cliente ');
	while ($dato2= mysql_fetch_array($con1))
		{
			
		?>
    <p>
    
    </p>
    <table width="736" border="1" align="center">
      <tr>
        <th width="137"><img src="../Imagenes/LOGONAME.png" alt="logo" width="691" height="275" align="right" /></th>
        <th width="200"><p align="right">Numero de Gestion
          <?php echo $dato2['idServicio'];?>
        </p>
        <p align="right">Fecha  <?php echo $dato2['Fecha'];?>
          <label for="Fecha"></label>
        </p></th>
      </tr>
    </table>
    <table width="735" border="1" align="center">
      <tr>
          <td width="93">Cliente</td>
          <td width="143"><?php echo $dato2['Cliente']," ";?></td>
          <td width="114">Operador Bomba </td>
          <td width="135"><?php echo $dato2['OperadorBomba']," ";?></td>
        </tr>
        <tr>
          <td>Correo Cliente</td>
          <td><?php echo $dato2['CorreoCliente']," ";?></td>
          <td>Concretera </td>
          <td><?php echo $dato2['Concretera']," ";?></td>
        </tr>
        <tr>
          <td>Codigo Obra</td>
          <td><?php echo $dato2['CodigoObra']," ";?></td>
          <td>Diseño Concreto </td>
          <td><?php echo $dato2['DisenoConcreto']," ";?></td>
        </tr>
        <tr>
          <td>Direccion</td>
          <td><?php echo $dato2['Direccion']," ";?></td>
          <td>Bomba</td>
          <td><?php echo $dato2['Bomba']," ";?></td>
        </tr>
        <tr>
          <td>Cantidad M3</td>
          <td><?php echo $dato2['CantidadM3']," ";?></td>
          <td>Nivel</td>
          <td><?php echo $dato2['Nivel']," ";?></td>
        </tr>
      </table>
      <table width="735" border="1" align="center">
        <tr>
          <th scope="col">Hora Llegada Equipo</th>
          <th scope="col">Equipo Listo</th>
          <th scope="col">Inicio Servicio</th>
          <th scope="col">Final Servicio</th>
          <th scope="col">Metros Totales</th>
          <th scope="col">Armadas</th>
          <th scope="col">Cantidad Elementos</th>
        </tr>
        <tr>
          <td><?php echo $dato2['HoraLlegadaEquipo']," ";?></td>
          <td><?php echo $dato2['EquipoListo']," ";?></td>
          <td><?php echo $dato2['InicioServicio']," ";?></td>
          <td><?php echo $dato2['FinalServicio']," ";?></td>
          <td><?php echo $dato2['MetrosTotales']," ";?></td>
          <td><?php echo $dato2['Armadas']," ";?></td>
          <td><?php echo $dato2['CantidadElementos']," ";?></td>
        </tr>
      </table>
      <table width="735" border="1" align="center">
        <tr>
          <th scope="col">No.viaje</th>
          <th scope="col">Mixer</th>
          <th scope="col">Hora de llegada</th>
          <th scope="col">Inicio de descargue</th>
          <th scope="col">Final de descargue</th>
          <th scope="col">m3 descargue</th>
          <th scope="col">Remision</th>
        </tr>
        <tr>
          <td><?php echo $dato2['NumViaje']," ";?></td>
          <td><?php echo $dato2['Mixer']," ";?></td>
          <td><?php echo $dato2['HoraLlegada']," ";?></td>
          <td><?php echo $dato2['InicioDescargue']," ";?></td>
          <td><?php echo $dato2['FinalDescargue']," ";?></td>
          <td><?php echo $dato2['m3Descargue']," ";?></td>
          <td><?php echo $dato2['Remision']," ";?></td>
        </tr>
      </table>
      <p></p>
  <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>
        <?php
	
	
  }
?>
	<!-- Form section end -->
  <p align="center">
  <a href="gestionAdmin.php">
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
 