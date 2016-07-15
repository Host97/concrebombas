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
                <p class="large-text">En esta sección puede revisar los reportes de gestión de servicio enviados por sus empleados<br />
Elija la opción por la cual desea filtrar los reportes</p>
                
            </div>
        </div>
    <!-- Explain section end -->
    <!-- Form section start -->
        <div class="section third-section">
          <div class="container newsletter">
            <div class="sub-section">
              <div class="title clearfix" align="center">
                  <p><form id="form1" name="form1" method="post" onsubmit="return validar_Id()" action="gestionListarPorId.php">    <label for="idServicio"></label>
  Número de gestión de servicio 
  <select name="idServicio" size="1" id="idServicio" alt="Esto es una lista desplegable que despliega el numero de gestión" title="Seleccione un numero">
                      <option>Seleccione numero</option>
          <?php
		  include('security.php');
include_once 'libreria.php';
$array_productos = select('gestionservicio', array('idServicio',), '1 ORDER BY idServicio');

while ($producto = mysql_fetch_array($array_productos)){

echo "<option value='$producto[0]'>$producto[0]</option>";

}

?>
      </select>
                    <input name="Buscar" type="submit" class="button-ps" id="Buscar" value="Buscar Por Numero de gestion" /></form>
                  </p>
                  <p><form id="form2" name="form2" method="post" onsubmit="return validar_Cliente()" action="gestionListarPorCliente.php"><label for="idcliente"></label>
                  Nombre cliente
                    <select name="Cliented" size="1" id="Cliented" alt="Esto es una lista desplegable que despliega los clientes" title="Seleccione un cliente">
                      <option>Seleccione cliente</option>
          <?php
include_once 'libreria.php';
$array_productos = select('gestionservicio', array('Cliente',), '1 ORDER BY Cliente');

while ($producto = mysql_fetch_array($array_productos)){

echo "<option value='$producto[0]'>$producto[0]</option>";

}

?>
      </select>
                    <input name="Buscar1" type="submit" class="button-ps" id="Buscar1" value="Buscar Por Nombre De Cliente" /></form>
                  </p>
                  
                  
                  
                  <p><form id="Fecha" name="Fecha" method="post" onsubmit="return validar_Fecha()" action="gestionListarPorFecha.php"><label for="fecha"></label>
                    Fecha
                    <select name="fecha" size="1" id="fecha" alt="Esto es una lista desplegable que despliega las fechas de la gestión" title="Seleccione una fecha">
          <option>Seleccione fecha</option>
          <?php
include_once 'libreria.php';
$array_productos = select('gestionservicio', array('Fecha',), '1 ORDER BY Fecha');

while ($producto = mysql_fetch_array($array_productos)){

echo "<option value='$producto[0]'>$producto[0]</option>";

}

?>
        </select>
                    <input name="Buscar2" type="submit" class="button-ps" id="Buscar2" value="Buscar Por Fecha" /></form>
                  </p>

                  
                  <p><a href="gestionListarTodo.php">
                    <input name="Listar" type="submit" class="button-ps" id="Listar" value="Listar todo" /></a>
                  </p>

              </div>
            </div>
            <div id="success-subscribe" class="alert alert-success invisible"> <strong>Well done!</strong>You successfully subscribet to our newsletter.</div>
            <div class="row-fluid">
              <div class="span7">
                <div id="err-subscribe" class="error centered">Please provide valid email address.</div>
              </div>
            </div>
          </div>
        </div>
        <!-- Newsletter section end --> 
<div align="center"></div> 
 
<!-- Form section end -->
  <p align="center">
  <a href="Administracion.php">
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


<script>

function validar_Id()
{
         var msg = "No ha seleccionado una ningun numero";
       var idServicio = document.getElementById("idServicio");
       
	   
       
       if( idServicio.selectedIndex == null || idServicio.selectedIndex == 0)
       {
               alert(msg);
               return false
       }
	   
}

function validar_Cliente()
{
	var msg = "No ha seleccionado ningun cliente";
	var  Cliented= document.getElementById("Cliented");
	
	if( Cliented.selectedIndex == null || Cliented.selectedIndex == 0)
       {
               alert(msg);
               return false
       }
}

function validar_Fecha()
{
	var msg = "No ha seleccionado ninguna fecha";
	var  fecha= document.getElementById("fecha");
	
	if( fecha.selectedIndex == null || fecha.selectedIndex == 0)
       {
               alert(msg);
               return false
       }
	
}

</script>
 