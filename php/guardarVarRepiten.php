<?php
session_start();



$salto=(isset($_POST["Viaje"]))?'<br>':'';

@$_SESSION['viaje']=$_SESSION['viaje'].$salto.$_POST["Viaje"];
@$_SESSION['Mixer']=$_SESSION['Mixer'].$salto.$_POST["Mixer"];
@$_SESSION['HoraLlegada']=$_SESSION['HoraLlegada'].$salto.$_POST["HoraLlegada"];
@$_SESSION['InicioDescargue']=$_SESSION['InicioDescargue'].$salto.$_POST["InicioDescargue"];
@$_SESSION['FinalDescargue']=$_SESSION['FinalDescargue'].$salto.$_POST["FinalDescargue"];
@$_SESSION['m3Descargue']=$_SESSION['m3Descargue'].$salto.$_POST["m3Descargue"];
@$_SESSION['Remision']=$_SESSION['Remision'].$salto.$_POST["Remision"];

header('Location:gestion_Servicio.php');	
?>