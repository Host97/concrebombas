<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cotización Completa - Concrebombas</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/Table2.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="../images/ico/apple-touch-icon-144.png">
</head>

<body>
<!-- Title section start -->
 <div class="container">
                    <a href="#" class="brand">
                        <img  src="../Imagenes/LOGONAME.png" alt="Icono Empresarial:CONCREBOMBAS+BR" width="210"/></a></div>
                        
<p>&nbsp;</p>

<div class="title">
                    <h1 title="menú de servicios" align="center">Cotización Completa</h1>
                    
                   
                </div>
   <!-- Title section start -->             
   <!-- Explain section start -->
        <div class="section secondary-section">
            <div class="triangle"></div>
            <div class="container centered">
                <p class="large-text">

                </p>
                
            </div>
        </div>
    <!-- Explain section end -->

 <script type="text/javascript">
               
               //script cuando recarga la pagina
               
               (document).ready(window.print());
              
               </script>

<body>
<div align="center">
  <?php
  error_reporting (0);
   
		$final=0;
		 include_once 'security.php';
		  include_once 'libreria.php';
		 // include_once 'security.php';
		  /*$ref1=1;
  		  $correo= select('cliente', array('Email'),"IDcliente='".$ref1."'");
		  $correo1 = mysql_fetch_row($correo);
		  */
		  
		  $correo1= $_SESSION["Email"];
	
		  
		  
		  
		 if(isset($_POST['bombas']))
		  {
		   
	  
			  $ref = $_POST["bombas"];
			  $con = select('bombas',array('idBombas','ReferenciaBomba','PrecioBomba'),"idBombas='".$ref."'");
			  $dato1 = mysql_fetch_row($con);
			  
			  $cantidadC=$_POST["cantidad"];
			  $total=$dato1[2]*$_POST["cantidad"];
	  
	  
			  $prueba=select('cotizacion',array('Correo','Referencia','Cantidad','Precio','Total'),"Correo='".$correo1."' AND '".$dato1[1]."'=Referencia ");
			  $prueba1 = mysql_fetch_row($prueba);
			 
	  if ($prueba1[0]==$correo1 && $dato1[1]==$prueba1[1])
	  {
		  $catidadt=$prueba1[2]+$cantidadC;
		  $totalf=$catidadt*$prueba1[3];
		  //echo $catidadt;
		  
		  
		 
		?>
  <?php
        mysql_connect('localhost','root','') or die (mysql_error());
	   mysql_select_db('concrebombas') or die (mysql_error());	
	   
	mysql_query("UPDATE cotizacion SET Cantidad='".$catidadt."' ,Total='".$totalf."' WHERE Correo='".$prueba1[0]."' AND Referencia='".$dato1[1]."'");
		 
		 echo"los datos se han cambiado ";
	  }
	 
		 else
		  {
	  
	     mysql_connect('localhost','root','') or die (mysql_error());
	   mysql_select_db('concrebombas') or die (mysql_error());	
	  
	  $consulta1="INSERT INTO cotizacion(Correo,Referencia,Cantidad,Precio,Total) VALUES ('$correo1','$dato1[1]', '$cantidadC','$dato1[2]','$total')";
	  @$link;
	  mysql_query($consulta1) or die(mysql_error());
	  mysql_close($link);
	  }
	  
	}
	else
	 if(isset($_POST['productos']))
		  {
			
			  
			$ref = $_POST["productos"];
			$con = select('productos',array('idproducto','NombreProducto','PrecioProducto'),"idproducto='".$ref."'");
	  		$dato1 = mysql_fetch_row($con);
			
			$cantidadC=$_POST["cantidad"];
	        $total=$dato1[2]*$_POST["cantidad"];
			
			 $prueba=select('cotizacion',array('Correo','Referencia','Cantidad','Precio','Total'),"Correo='".$correo1."' AND '".$dato1[1]."'=Referencia");
	  $prueba1 = mysql_fetch_row($prueba);
	 
	  		  if ($prueba1[0]==$correo1 && $dato1[1]==$prueba1[1])
	  {
		  $catidadt=$prueba1[2]+$cantidadC;
		  $totalf=$catidadt*$prueba1[3];
		  //echo $catidadt;
		  
		  
		 
		?>
  <?php
        mysql_connect('localhost','root','') or die (mysql_error());
	   mysql_select_db('concrebombas') or die (mysql_error());	
	   
	mysql_query("UPDATE cotizacion SET Cantidad='".$catidadt."' ,Total='".$totalf."' WHERE Correo='".$prueba1[0]."' AND Referencia='".$dato1[1]."'");
		 
		 echo"los datos se han cambiado ";
	  }
	   else
		  {
			
			$link = mysql_connect("localhost","root","");
	        mysql_select_db("concrebombas",$link);
	        $consulta1="INSERT INTO cotizacion(Correo,Referencia,Cantidad,Precio,Total) VALUES ('$correo1','$dato1[1]','$cantidadC','$dato1[2]','$total')";
	  
	  mysql_query($consulta1) or die(mysql_error());
	  mysql_close($link);
			}
			}
		?>
  <table width="554" border="1">
    <tr bgcolor="#999999">
      <td>Referencia</td>
      <td>Cantidad</td>
      <td>Precio</td>
      <td>Total</td>
    </tr>
    <?php 		$con1=select('cotizacion',array('Correo','Referencia','Cantidad','Precio','Total'),"Correo='$correo1'");
		while ($dato2= mysql_fetch_array($con1))
		{
			
		?>
    <tr>
      <td width="98"><?php echo $dato2[1]," ";?></td>
      <td width="121"><?php echo $dato2[2]," ";?></td>
      <td width="67"><?php echo $dato2[3]," ";?></td>
      <td width="250"><?php echo $dato2[4]," ";?></td>
    </tr>
    <?php
	
	$final += $dato2[4];
  }
  ?>
    <tr>
      <td colspan="3" bgcolor="#999999">Valor Total</td>
      <td><?php echo $final ?></td>
    </tr>
  </table>
</div>

</body>
</html>
 <script>

function validar_Lista()
{
 var retVal = confirm("Desea continuar?");
               if( retVal == true ){
                  document.write ("hola");
                  return true;
               }
               else{
                  
                  return false;
               }
}

</script>


