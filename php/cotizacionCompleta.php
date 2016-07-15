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
                <p class="large-text">En esta sección puedes visualizar los productos y Servicios previamente añadidos, para agregar un producto más debes dar clic en agregar producto, para añadir bomba debes dar click en bomba.<br />
Si terminaste guarda tu cotización dando clic en Imprimir o Guardar

                </p>
                
            </div>
        </div>
    <!-- Explain section end -->


  <div align="center">
    <?php
	error_reporting (0);
		$final=0;
	      include_once 'security.php';
		  include_once 'libreria.php';
		 /* $ref1=1;
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
    <table width="820" border="1">
      <tr bgcolor="#999999">
        <th>Referencia</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Total</th>
        <th>Eliminar</th>
      </tr>
      <?php 		$con1=select('cotizacion',array('idCotizacion','Correo','Referencia','Cantidad','Precio','Total'),"Correo='$correo1'");
		while ($dato2= mysql_fetch_array($con1))
		{
			
		?>
      <tr>
        <td width="98"><?php echo $dato2['Referencia']," ";?></td>
        <td width="121"><?php echo $dato2['Cantidad']," ";?></td>
        <td width="67"><?php echo $dato2['Precio']," ";?></td>
        <td width="250"><?php echo $dato2['Total']," ";?></td>
        <td width="250"><form id="eliminar" name="eliminar" method="post" action="EliminarProductoCotizacion.php">
          <label for="idCotizacion"></label>
          <input type="hidden" name="idCotizacion" id="idCotizacion" value= <?php echo $dato2['idCotizacion']?>/>
          
<input type="submit" name="Eliminar" id="Eliminar" value="Eliminar" />
        </form></td>
      </tr>
      <?php
	
	$final += $dato2[4];
  }
  ?>
      <tr>
        <td colspan="3" bgcolor="#E6B811">Valor Total</td>
        <td><?php echo $final ?></td>
        <td>&nbsp;</td>
      </tr>
    </table>
    
    <table width="554" border="0">
      <tr>
        <td><a href="cotizacionProductos.php"><input name="AgregarProducto" type="button" class="button" id="AgregarProducto" title="Agregar los productos"  value="Agregar Producto" alt="Esto es un boton para ir a la pagina donde agregamos productos"/></a></td>
        <td><a href="cotizacionBombas.php"><input name="AgregarBomba" type="button" class="button" id="AgregarBomba" title="Agregamos las bombas"  value="AgregarBomba" alt="Esto es un boton para ir a la pagina donde agregamos las bombas"/></a></td>
        <td><a href="cotizacionCompleta1.php" target="_blank"><input type = "button" class="button" title="Imprimir o guardar" value = "Imprimir o Guardar" alt="Este boton nos lleva a una nueva pagina donde nos generea un pdf para imprimir o guardar la cotizacion "> </a></td>
        <td>&nbsp;</td>
      </tr>
    </table>
  </div>
  <p align="center">
  <a href="salirCotizacion.php">
  <button class="button button-sp" input type="button"  id="Salir" title="Salir de cotizacion" onclick=" return validar_Lista()" value="Salir" alt="Este boton nos lleva de nuevo al menu se perderan los datos de la cotizacion" >SALIR</button></a></p>
</form>
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
 var retVal = confirm("Al salir los datos seran eliminados \n¿Desea continuar?");
               if( retVal == true ){
                  
                  return true;
               }
               else{
                  
                  return false;
               }
}

</script>


