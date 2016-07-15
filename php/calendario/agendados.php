<?php
//desarrollo por Hollmann Peñuela
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(0);
?>
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf8" />
		<title>Alquiler de bombas</title>
		<meta http-equiv="PRAGMA" content="NO-CACHE" />
		<meta http-equiv="EXPIRES" content="-1" />
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="vtip.js"></script>
		<script type="text/javascript">
		
		//script cuando recarga la pagina
		
		$(document).ready(function(){
			setTimeout(function() {$('#mensaje').fadeOut('fast');}, 3000);
		});
		</script>
        
		<link href="calendario.css" rel="stylesheet" type="text/css">
     	<link href="../../css/button.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="../../images/ico/apple-touch-icon-144.png">
	</head>
<body>



<div align="left">
   
  <!-- Title section start -->
</div>
 <div class="container">
   <div align="left"><a href="#" class="brand">
     <img src="../../Imagenes/LOGONAME.png" alt="Icono Empresarial:CONCREBOMBAS+BR" width="210"/></a></div>
 </div>
                        
<p>&nbsp;</p>

<div  class="primary-section">
                    <h1 title="menú de servicios" align="center">Agendamiento</h1>
                    
                   
                </div>
   <!-- Title section start -->             
   <!-- Explain section start -->
        <div class="section secondary-section">
            <div class="triangle"></div>
            <div class="container centered">
                <h3 class="large-text">En esta secci&oacute;n puedes visualizar la disponibilidad de fechas para hacer su agendamiento, debe iniciar sesi&oacute;n para solicitar su agendamiento.</h3>
                
            </div>
        </div>
    <p><!-- Explain section end -->
          
<div id="agenda">
          
          
          
          
          
          <p>
            <?php
		
		//funcion para mostrar las fechas 
		
			include("config.inc.php");
			$mostrar="";
			function fecha ($valor)
			{
				$timer = explode(" ",$valor);
				$fecha = explode("-",$timer[0]);
				$fechex = $fecha[2]."/".$fecha[1]."/".$fecha[0];
				return $fechex;
			}
			
			//si el mes tiene menos de dos numeros es decir si es antes de octubre se le agrega un cero antes del numero de mes
			
			if (!isset($_GET["fecha"])) 
			{
				$mesactual=intval(date("m"));
				if ($mesactual<10) $elmes="0".$mesactual;
				else $elmes=$mesactual;
				$elanio=date("Y");
			} 
			else 
			{
				$cortefecha=explode("-",$_GET["fecha"]);
				$mesactual=intval($cortefecha[1]);
				if ($mesactual<10) $elmes="0".$mesactual;
				else $elmes=$mesactual;
				$elanio=$cortefecha[0];
			}
			
			
			//aqui se coloca la fecha con el primer dia del mes
			
			$primeromes=date("N",mktime(0,0,0,$mesactual,1,$elanio));
			
			if (!isset($_GET["mes"])) $hoy=date("Y-m-d"); 
			else $hoy=$_GET["ano"]."-".$_GET["mes"]."-01";
			
			//en esta condicion se da el numero de dias que tiene el mes segun el año sea o no sea biciesto
			
			if (($elanio % 4 == 0) && (($elanio % 100 != 0) || ($elanio % 400 == 0))) $dias=array("","31","29","31","30","31","30","31","31","30","31","30","31");
			else $dias=array("","31","28","31","30","31","30","31","31","30","31","30","31");
			
			$ides=array();
			$eventos=array();
			$titulos=array();
			
			//se hace la consulta en la base de datos para traer la reservación de la bomba
			
			$q1="select * from reservacion where month(fecha)='".$elmes."' and year(fecha)='".$elanio."'";
			mysql_select_db($dbname);
			$r1=mysql_query($q1);
			if ($f1=mysql_fetch_array($r1))
			{
				$h=0;
				do
				{
					$ides[$h]=$f1["id"];
					$eventos[$h]=$f1["fecha"];
					$titulos[$h]=$f1["descripcion"];
					$h+=1;
				}
				while($f1=mysql_fetch_array($r1));
			}
			
			
			//se realiza un array que guarda los nombres de los meses
			
			$meses=array("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
			
			//se define la cantidad de casillas que tendra la tabla del calendario
			
			$diasantes=$primeromes-1;
			$diasdespues=42;
			$tope=$dias[$mesactual]+$diasantes;
			if ($tope%7!=0) $totalfilas=intval(($tope/7)+1);
			else $totalfilas=intval(($tope/7));
			
			//cabecera de la tabla del calendario
			
			echo "<h2>Calendario de reservas para: ".$meses[$mesactual]." de ".$elanio."</h2>";
			echo $mostrar;
			echo "<script>function mostrar(cual) {if (document.getElementById(cual).style.display=='block') {document.getElementById(cual).style.display='none';} else {document.getElementById(cual).style.display='block'} }</script>";
			echo "<table class='calendario' cellspacing='0' cellpadding='0'>";
			echo "<tr><th>L</th><th>M</th><th>M</th><th>J</th><th>V</th><th>S</th><th>D</th></tr><tr>";
			$j=1;
			$filita=0;
			
			//en caso tal de que exista una reservación esta funcion la trae para colocarla en su respectivo campo
			
			function buscarevento($fecha,$eventos,$titulos)
			{
				$clave=array_search($fecha,$eventos,true);
				return $titulos[$clave];
			}
			for ($i=1;$i<=$diasdespues;$i++)
			{
				if ($filita<$totalfilas)
				{
				if ($i>=$primeromes && $i<=$tope) 
				{
					echo "<td";
					if ($j<10) $dd="0".$j;else $dd=$j;
					$compuesta=$elanio."-$elmes-$dd";
					if (count($eventos)>0 && in_array($compuesta,$eventos,true)) {echo " class=' evento";$noagregar=true;}
					else {echo " class='activa";$noagregar=false;}
					
					
					if ($hoy==$compuesta) echo " hoy";
					
					if ($noagregar==false) echo "'>$j<a href='javascript:mostrar(\"evento$j\")'></a><form id='evento$j' method='post' action='".$_SERVER["PHP_SELF"]."' style='display:none'<input type='hidden' name='fecha' value='$compuesta' /></form>";
					else echo "'>$j<a href='javascript:mostrar(\"evento$j\")'></a><form id='evento$j' method='post' action='".$_SERVER["PHP_SELF"]."' style='display:none'><input type='hidden' name='fechas' value='$compuesta' /></form>";
					
					
					//se hace la consulta en la base de datos para mostar la reservación en el dia indicado
					
					$sqlevent="select * from reservacion where fecha='".$compuesta."' order by id";
					mysql_select_db($dbname);
					$revent=mysql_query($sqlevent);
					while($rowevent=mysql_fetch_array($revent))
					{
						echo "<p>$rowevent[descripcion]</p>";
					}
					
					echo "</td>";
					$j+=1;
					
				}
				else echo "<td class='desactivada'>&nbsp;</td>";
				if ($i==7 || $i==14 || $i==21 || $i==28 || $i==35 || $i==42) {echo "<tr>";$filita+=1;}
				}
			}
			echo "</table>";
			
			//enlaces para navegar al mes pasado o al siguiente mes
			
			$mesanterior=date("Y-m-d",mktime(0,0,0,$mesactual-1,01,$elanio));
			$messiguiente=date("Y-m-d",mktime(0,0,0,$mesactual+1,01,$elanio));
			echo "<p>&laquo; <a href='".$_SERVER["PHP_SELF"]."?fecha=$mesanterior' alt='Enlace al mes anterior' title='Redirecciona al mes anterior' class='vtip'>Mes Anterior</a> - <a href='".$_SERVER["PHP_SELF"]."?fecha=$messiguiente' alt='Enlace al siguiente mes' title='Redirecciona al siguiente mes' class='vtip'>Mes Siguiente</a> &raquo;</p>";
			?>
          </p>
          <br>
          <br>
          <p align="center">
  <a href="../index.php">
  <button class="button button-sp" input type="button"  id="Salir" title="Salir de cotizacion" onclick=" return validar_Lista()" value="Salir" alt="Este boton nos lleva de nuevo al menu se perderan los datos de la cotizacion" >SALIR</button></a></p>
            </td></tr></table>
          </p>
    <p>&nbsp;</p>
    <p>
      <!-- Footer section start -->
    </p>
        <div class="footer">
            <p>&copy; PIERRE MAGIQUE Developers<br>
            SENA 2016</p>
        </div>
        <!-- Footer section end -->
    
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-266167-20");
pageTracker._setDomainName(".martiniglesias.eu");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>