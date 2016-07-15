<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gestión de Servicio - Concrebombas</title>
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
                    <h1 title="menú de servicios" align="center">Gestión de Servicio</h1>
                    
                   
                </div>
   <!-- Title section start -->             
   <!-- Explain section start -->
        <div class="section secondary-section">
            <div class="triangle"></div>
            <div class="container centered">
                <p class="large-text">En esta sección puede visualizar el reporte, los datos básicos y de servicio no pueden ser modificados.<br />para agregar un nuevo viaje de clic en el boton <strong>NUEVO</strong>
<br />
Al terminar de llenar el reporte de clic en el botón <strong>GUARDAR</strong> para guardar los datos

                </p>
                
            </div>
        </div>
    <!-- Explain section end -->
<form id="form1" name="form1" method="post" action="">
  <p>
    <?php
	
	session_start();

?>
  </p>
  <h2 align="center">Datos básicos</h2>
              <div class="triangle"></div>

  <div align="center">
    <table width="82%" border="1">
      <tr>
        <th width="50%">Cliente</td>
        <td width="50%"><?php echo @$_SESSION['Cliente']?></td>
        <th width="50%">Concretera</td>
        <td width="50%"><?php echo @$_SESSION['Concretera']?></td>
      </tr>
      <tr>
        <th>Correo cliente</th>
        <td><?php echo @$_SESSION['EmailCliente']?></td>
        <th>Diseño Concreto </th>
        <td><?php echo @$_SESSION['DiseñoConcreto']?></td>
      </tr>
      <tr>
        <th>Codigo Obra</td>
        <td><?php echo @$_SESSION['CodigoObra']?></td>
        <th>Bomba</th>
        <td><?php echo @$_SESSION['Bomba']?></td>
      </tr>
      <tr>
        <th>Direcciòn</th>
        <td><?php echo @$_SESSION['Direccion']?></td>
        <th>Operador Bomba </th>
        <td><?php echo @$_SESSION['OperadorBomba']?></td>
      </tr>
      <tr>
        <th>Cantidad m3</th>
        <td><?php echo @$_SESSION['Cantidad']?></td>
        <th>Nivel </th>
        <td><?php echo @$_SESSION['Nivel']?></td>
      </tr>
    </table>
    <h1 align="center"> </h1>
    <table width="180%" border="1">
      <tr>
      
        <th width="12%" scope="col" >Hora Llegada Equipo</th>
        <th width="9%" scope="col" >Metros Totales</th>
        <th width="9%" scope="col" >Equipo Listo</th>
        <th width="11%" scope="col" >Armadas</th>
        <th width="16%" scope="col" >Inicio Servicio</th>
        <th width="23%" scope="col" >Cantidad Elemntos</th>
        <th width="20%" scope="col" >Final Servicio</th>
      </tr>
      <tr>
        <td><?php echo @$_SESSION['HoraLlegadaEquipo']?></td>
        <td><?php echo @$_SESSION['MetrosTotales']?></td>
        <td><?php echo @$_SESSION['EquipoListo']?></td>
        <td><?php echo @$_SESSION['Armadas']?></td>
        <td><?php echo @$_SESSION['InicioServicio']?></td>
        <td><?php echo @$_SESSION['CantidadElemntos']?></td>
        <td><?php echo @$_SESSION['FinalServicio']?></td>
      </tr>
    </table>
    <table width="180%" border="1">
      <tr>
        <th width="12%">No.viaje</th>
        <th width="8%">Mixer</th>
        <th width="11%">Hora de llegada</th>
        <th width="17%">Inicio de descargue</th>
        <th width="17%">Final de descargue</th>
        <th width="17%">m3 descargue</th>
        <th width="18%">Remision</th>
      </tr>
      <tr>
        <td><?php echo @$_SESSION['viaje']?></td>
        <td><?php echo @$_SESSION['Mixer']?></td>
        <td><?php echo @$_SESSION['HoraLlegada']?></td>
        <td><?php echo @$_SESSION['InicioDescargue']?></td>
        <td><?php echo @$_SESSION['FinalDescargue']?></td>
        <td><?php echo @$_SESSION['m3Descargue']?></td>
        <td><?php echo @$_SESSION['Remision']?></td>
      </tr>
    </table>
  </div>
  <p>&nbsp;</p>
<p align="center">
  <a href="gestion_viajes.php">
  <button class="button button-sp" input type="button"  id="Nuevo" title="reportar nuevo viaje" value="Siguente" alt="generar nuevo viaje" >Nuevo</button></a> 
  
  <a href="gestion_serv_ward.php">
  <button class="button button-sp" input type="button"  id="Siguiente" title="terminar reporte" value="Siguente" alt="Este boton nos lleva al siguiente menú" >Guardar</button></a></p>
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