<?php
session_start();



@$_SESSION['Cliente']=$_POST["Cliente"];
@$_SESSION['EmailCliente']=$_POST["EmailCliente"];
@$_SESSION['CodigoObra']=$_POST["CodigoObra"];
@$_SESSION['Direccion']=$_POST["Direccion"];
@$_SESSION['Cantidad']=$_POST["Cantidad"];
@$_SESSION['Concretera']=$_POST["Concretera"];
@$_SESSION['DiseñoConcreto']=$_POST["DiseñoConcreto"];
@$_SESSION['Bomba']=$_POST["bomba"];
@$_SESSION['OperadorBomba']=$_POST["OperadorBomba"];
@$_SESSION['Nivel']=$_POST["Nivel"];

@$_SESSION['HoraLlegadaEquipo']=$_POST["HoraLlegadaEquipo"];
@$_SESSION['MetrosTotales']=$_POST["MetrosTotales"];
@$_SESSION['EquipoListo']=$_POST["EquipoListo"];
@$_SESSION['Armadas']=$_POST["Armadas"];
@$_SESSION['InicioServicio']=$_POST["InicioServicio"];
@$_SESSION['CantidadElemntos']=$_POST["CantidadElemntos"];
@$_SESSION['FinalServicio']=$_POST["FinalServicio"];






header('Location:gestion_viajes.php')
?>