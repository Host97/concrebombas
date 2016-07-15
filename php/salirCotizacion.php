<style type="text/css">
body {
	background-image: url(../images/descarga.jpg);
}
</style>
 <?php
 
	  include_once 'libreria.php';
	  include_once 'security.php';
		 /* $ref1=1;
  		  $correo= select('cliente', array('Email'),"IDcliente='".$ref1."'");
		  $correo1 = mysql_fetch_row($correo);
		  */
		   $correo1= $_SESSION['Email'];
		 ?>
	<?php	  
$link = mysql_connect("localhost","root","");
	        mysql_select_db("concrebombas",$link);
	        $consulta1="DELETE from cotizacion WHERE correo= '$correo1'";
			 mysql_query($consulta1) or die(mysql_error());
	 		 mysql_close($link);
			
			header ('Location: clientepage.php')
			?>