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
        
		
        
        <link rel="shortcut icon" href="../../images/ico/apple-touch-icon-144.png">
    <link href="calendario.css" rel="stylesheet" type="text/css">
    <link href="../../css/button.css" rel="stylesheet" type="text/css">

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
                <h3 class="large-text">Bienvenido al sistema de  agendamiento nuevo, recuerde que para a&ntilde;adir un agendamiento debe de hacerlo con m&aacute;s de 24 horas y se cuente con disponibilidad de d&iacute;a.</h3>
                
            </div>
        </div>
    <!-- Explain section end -->





	<div id="agenda">
    
		<p>
		  <?php
		
		//funcion para mostrar las fechas 
		
			include("config.inc.php");
			include("securityCalendario.php");
			$mostrar="";
			$correo= $_SESSION["Email"];
			function fecha ($valor)
			{
				$timer = explode(" ",$valor);
				$fecha = explode("-",$timer[0]);
				$fechex = $fecha[2]."/".$fecha[1]."/".$fecha[0];
				return $fechex;
			}
			
			//condicion para guardar un alquiler de bomba
					
			if (isset($_POST["guardarevento"])=="Si")
			{
				$titulo = $_POST["titulo"];
				
				if($titulo=="--Seleccione bomba--")
				{
					echo "<p class='error' id='mensaje'>No ha seleccionado ninguna bomba</p>";
				}
				else
				{
				
				$q1="insert into reservacion (Email,fecha,descripcion,activo,relacionar) values ('$correo','".$_POST["fecha"]."','".strip_tags($_POST["titulo"])."','1','1')";
				mysql_select_db($dbname);
				if ($r1=mysql_query($q1)) $mostrar="<p class='ok' id='mensaje'>la bomba se a reservado correctamente.</p>";
				else $mostrar= "<p class='error' id='mensaje'>Se ha producido un error con su reservación.</p>";
				}
			}
			
			//condicion para guardar un alquiler de bomba
						
			if (isset($_POST["addevent"])=="Si")
			{
				$fechaGuardado = $_POST["fechas"];
				$titulos = $_POST["titulos"];



				$consulta = "select * from reservacion where fecha ='".$fechaGuardado."' and descripcion='".$titulos."'";
				mysql_select_db($dbname);
				$consulta1=mysql_query($consulta);
				$consulta2=mysql_fetch_row($consulta1);
				
				if($titulos=="--Seleccione bomba--")
				{
					echo "<p class='error' id='mensaje'>No ha seleccionado ninguna bomba</p>";
				}
				else
				if($fechaGuardado==$consulta2[2] && $titulos==$consulta2[3])
				{
					echo "<p class='error' id='mensaje'>Esta bomba no esta disponible para esta fecha</p>";
				}
				else
				{
				$q1="insert into reservacion (Email,fecha,descripcion,activo,relacionar) values ('$correo','".$_POST["fechas"]."','".$_POST["titulos"]."','1','1')";
				mysql_select_db($dbname);
				if ($r1=mysql_query($q1)) $mostrar="<p class='ok' id='mensaje'>reserva guardada correctamente.</p>";
				else $mostrar="<p class='error' id='mensaje'>Se ha producido un error guardando su reserva.</p>";
				}
			}
			
			//si el mes tiene menos de dos números es decir si es antes de octubre se le agrega un cero antes del numero de mes
			
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
					
					
					//aca se define el tipo de casillas en el calendario segun la fecha en la que se encuentre
					
					$añoactual=date("Y");
					$mesahora=date("m");
					$diaactual=date("d");
					
					
					if($elanio<$añoactual)
					{
						include ('noAgregar.php');
					}
					else
					{
						if($elanio>$añoactual)
						{
							include ('Agregar.php');
						}
						else
						{
							if($elmes<$mesahora)
							{
								include ('noAgregar.php');
							}
							else
							if($elmes>$mesahora)
							{
								include ('Agregar.php');
							}
							else{
							if($dd<=$diaactual)
							{
								include ('noAgregar.php');
							}
							else 
							{
								include ('Agregar.php');
							}
							}
						}
					}
					
					
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
		  
		  <br>
		  <br>
		    <p align="center">
  <a href="../Administracion.php">
  <button class="button button-sp" input type="button"  id="Salir" title="Salir de cotizacion" onClick=" return validar_Lista()" value="Salir" alt="Este boton nos lleva de nuevo al menu se perderan los datos de la cotizacion" >volver</button></a></p>
		  
		  <!--</td></tr></table>--></p>
		<p><br>
	  </p>
   </div>
   
   <!-- Footer section start -->
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