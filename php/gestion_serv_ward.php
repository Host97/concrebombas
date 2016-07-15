<?php
session_start();
   mysql_connect('localhost','root','') or die (mysql_error());
	   mysql_select_db('concrebombas') or die (mysql_error());	
	   
$Fecha=date("Y/m/d");
	  
	  
	   $insertar="INSERT INTO gestionservicio(Fecha,Cliente,CorreoCliente,CodigoObra,Direccion,CantidadM3,Concretera,DisenoConcreto,Bomba,OperadorBomba,Nivel,HoraLlegadaEquipo,MetrosTotales,EquipoListo,Armadas,InicioServicio,CantidadElementos,FinalServicio,NumViaje,Mixer,HoraLlegada,InicioDescargue,FinalDescargue,m3Descargue,Remision) VALUES ('$Fecha','$_SESSION[Cliente]','$_SESSION[EmailCliente]','$_SESSION[CodigoObra]','$_SESSION[Direccion]','$_SESSION[Cantidad]','$_SESSION[Concretera]','$_SESSION[DiseñoConcreto]','$_SESSION[Bomba]','$_SESSION[OperadorBomba]','$_SESSION[Nivel]','$_SESSION[HoraLlegadaEquipo]','$_SESSION[MetrosTotales]','$_SESSION[EquipoListo]','$_SESSION[Armadas]','$_SESSION[InicioServicio]','$_SESSION[CantidadElemntos]','$_SESSION[FinalServicio]','$_SESSION[viaje]','$_SESSION[Mixer]','$_SESSION[HoraLlegada]','$_SESSION[InicioDescargue]','$_SESSION[FinalDescargue]','$_SESSION[m3Descargue]','$_SESSION[Remision]')";
	  
	
	  
	  @$link;
	  mysql_query($insertar) or die(mysql_error());
	  mysql_close($link);






@$_SESSION['Cliente']="";
@$_SESSION['EmailCliente']="";
@$_SESSION['CodigoObra']="";
@$_SESSION['Direccion']="";
@$_SESSION['Cantidad']="";
@$_SESSION['Concretera']="";
@$_SESSION['DiseñoConcreto']="";
@$_SESSION['Bomba']="";
@$_SESSION['OperadorBomba']="";
@$_SESSION['Nivel']="";

@$_SESSION['HoraLlegadaEquipo']="";
@$_SESSION['MetrosTotales']="";
@$_SESSION['EquipoListo']="";
@$_SESSION['Armadas']="";
@$_SESSION['InicioServicio']="";
@$_SESSION['CantidadElemntos']="";
@$_SESSION['FinalServicio']="";

@$_SESSION['viaje']="";
@$_SESSION['Mixer']="";
@$_SESSION['HoraLlegada']="";
@$_SESSION['InicioDescargue']="";
@$_SESSION['FinalDescargue']="";
@$_SESSION['m3Descargue']="";
@$_SESSION['Remision']="";



//session_destroy();
header('Location:empleadoPage.php');
?>